from django.shortcuts import render, redirect
from django.http import JsonResponse
from .models import *
import json

import requests
from requests.structures import CaseInsensitiveDict
import urllib3
from bs4 import BeautifulSoup
from .forms import CreateUserForm
import datetime

from .utils import cookieCart, cartData, guestOrder

from django.views.decorators.csrf import csrf_exempt
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.contrib.auth import authenticate, login, logout 

from django.shortcuts import render, redirect
from django.contrib.auth.models import User, auth
from django.contrib.auth import login, logout, authenticate
from django.contrib import auth

def shop(request):
    data = cartData(request) 

    cartItems = data['cartItems']
    order = data['order']
    items = data['items']

    products = Product.objects.all()
    context = {'products':products, 'cartItems':cartItems}
    return render(request, 'shop.php', context)

def cart(request):    
    data = cartData(request) 
    cartItems = data['cartItems']
    order = data['order']
    items = data['items']

    context = {'items' : items, 'order' : order, 'cartItems':cartItems}  
    return render(request, 'cart.php', context)

@csrf_exempt
@login_required(login_url='loginuser')
def checkout(request):
 
    data = cartData(request) 
    cartItems = data['cartItems']
    order = data['order']
    items = data['items']

    context = {'items':items, 'order':order, 'cartItems':cartItems}
    return render(request, 'checkout.php', context)


@login_required(login_url='loginuser')
@csrf_exempt
def updateItem(request):    
    data = json.loads(request.body)
    productId = data['productId'] 
    action = data['action'] 

    customer = request.user.customer
    product = Product.objects.get(id=productId)
    order, created = Order.objects.get_or_create(customer=customer, complete=False)

    orderItem, created = OrderItem.objects.get_or_create(order=order, product=product)

    if action == 'add':
        orderItem.quantity = (orderItem.quantity + 1)
    elif action == 'remove':
        orderItem.quantity = (orderItem.quantity - orderItem.quantity)
    orderItem.save()

    ord_no = OrderItem.objects.all().last()
    cust = Customer.objects.all().last()
    ship_add = ShippingAddress.objects.all().last()
    
    # print(cust.name)
    # print(cust.email)
    # print(ord_no.id)
    # print(ord_no.quantity)
    # print(ship_add.address)
    # print(ship_add.city)
    # print(ship_add.state)
    # print(ship_add.zipcode)


    return JsonResponse('Item was added', safe=False)
    
@csrf_exempt
def processOrder(request):
    transcation_id = datetime.datetime.now().timestamp()
    data = json.loads(request.body)

    if request.user.is_authenticated:
        customer =  request.user.customer
        order, created = Order.objects.get_or_create(customer=customer, complete=False)

    else: 
        customer, order = guestOrder(request, data)

    total = float(data['form']['total'])
    order.transaction_id = transcation_id

    if total == order.get_cart_total:
        order.complete = True 
    order.save()

    if order.shipping == True: 
        ShippingAddress.objects.create(
            customer=customer,
            order=order,
            address=data['shipping']['address'],
            city=data['shipping']['city'],
            state=data['shipping']['state'],
            zipcode=data['shipping']['zipcode'],
            )

    urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)
    url = "https://fcp.efulfillmentservice.com/xml/orders/"
    headers={
        "Content-Type": "application/text; charset=utf-8",
    }

    ord_no = OrderItem.objects.all().last()
    cust = Customer.objects.all().last()
    ship_add = ShippingAddress.objects.all().last()
    
    # print(cust.name)
    # print(cust.email)
    # print(ord_no.id)
    # print(ord_no.quantity)
    # print(ship_add.address)
    # print(ship_add.city)
    # print(ship_add.state)
    # print(ship_add.zipcode)

    data = """
        <OrderSubmitRequest>
        <Version>0.6</Version>
        <MerchantId>4067</MerchantId>
        <MerchantName>Nine Lives Publishing, LLC</MerchantName>
        <MerchantToken>63f0ecdbcf26e592728a783d23d8faed</MerchantToken>

        <OrderList>
        <Order>

        <OrderNumber>{}</OrderNumber> 
        <ReferenceNumber/>
        <ShippingMethod>USPS_MEDIA</ShippingMethod>
        <ShippingOptions>
        <Insurance/>
        <CashOnDelivery/>
        <DeclaredValue/>
        <SignatureRequired/>
        </ShippingOptions>

        <Comments/>
        <ShippingAddress>
        <FirstName>{}</FirstName>
        <LastName></LastName>
        <Company/>
        <Address1>{}</Address1>
        <Address2/>
        <City>{}</City>
        <State>{}</State>
        <PostalCode>{}</PostalCode>
        <Country>{}</Country>
        <Phone></Phone>
        <Email>{}</Email>
        </ShippingAddress>
        
        <BillingAddress>
        <FirstName>{}</FirstName>
        <LastName></LastName>
        <Company/>
        <Address1>{}</Address1>
        <Address2/>
        <City>{}</City>
        <State>{}</State>
        <PostalCode>{}</PostalCode>
        <Country>{}</Country>
        <Phone></Phone>
        <Email>{}</Email>
        </BillingAddress>

        <ItemList>
        <Item>
        <Sku>780960105502</Sku>
        <Quantity>{}</Quantity>
        </Item>
        </ItemList>
        </Order>
        </OrderList>
        </OrderSubmitRequest>
    """.format(cust.id, cust.name, ship_add.address, ship_add.city, ship_add.state, ship_add.zipcode, "USA", cust.email, cust.name, ship_add.address, ship_add.city, ship_add.state, ship_add.zipcode, "USA", cust.email, ord_no.quantity)

    # order no       orderitem
    # first name     customer       
    # last Name      customer
    # Address        shippingaddress
    # city           shippingaddress
    # state          shippingaddress
    # zipcode        shippingaddress
    # country        shippingaddress
    # email          customer
    # quantity       orderitem 

    resp = requests.request("POST", url, headers=headers, data=data)
    with open('process_order.xml', 'wb') as f:
        f.write(resp.content)
    
    return JsonResponse('Payment Completed! Order Placed Successfully.', safe=False)


@csrf_exempt 
def registeruser(request):
    if request.user.is_authenticated:
        return redirect('index')
    else:
        form = CreateUserForm()
        if request.method == 'POST':
            form = CreateUserForm(request.POST)
            if form.is_valid():
                user = form.save()
                username = form.cleaned_data.get('username')

                messages.success(request, 'Account was created for ' + username)
                return redirect('loginuser')
            
        context = {'form':form}
        return render(request, 'register.php', context)


@csrf_exempt 
def loginuser(request):
    if request.user.is_authenticated: 
        return redirect('index')
    else:
        if request.method == 'POST':    
            username = request.POST.get('username')
            password = request.POST.get('password')

            user = authenticate(request, username=username, password=password)

            if user is not None:
                login(request, user)
                return redirect('index')
            else:
                messages.info(request, 'Username or Password is incorrect!')

        return render(request, 'login.php')


def logoutuser(request):
    auth.logout(request)
    return redirect('/')

def home(request):
    return render(request, 'index.php')

def about(request):
    return render(request, 'about.php')
 
def contacts(request):
    return render(request, 'contacts.php')

@login_required(login_url='loginuser')
def lessons(request):
    pdfuploads = PdfUpload.objects.all()
    context = { 'pdfuploads':pdfuploads }
    return render(request, 'lessons.php', context)

def delivery(request):
    return render(request, 'delivery.php')
    
def secure(request):
    return render(request, 'secure-payment.php')

@login_required(login_url='loginuser')
def orders(request):
    customer = request.user.customer
    data = cartData(request) 
    cartItems = data['cartItems']
    order = data['order']
    items = data['items']

    orders = Order.objects.get(customer=customer)
    shipping = ShippingAddress.objects.all().last()

    context = {'items' : items, 'order' : order, 'cartItems':cartItems, 'orders':orders, 'shipping':shipping}  
    return render(request, 'order.php', context)

# order no       orderitem
# first name     customer       
# last Name      customer
# Address        shippingaddress
# city           shippingaddress
# state          shippingaddress
# zipcode        shippingaddress
# country        shippingaddress
# email          customer
# quantity       orderitem