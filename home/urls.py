from django.urls import path

from django.contrib.auth import views as auth_views

from . import views

urlpatterns = [
    
    path('', views.home, name='index'),
    path('about/', views.about, name='about'),
    path('shop/', views.shop, name='shop'),
    path('contacts/', views.contacts, name='contacts'),
    path('lessons/', views.lessons, name='lessons'),
    path('delivery/', views.delivery, name='delivery'),
    path('secure-payment/', views.secure, name='secure'),
    
    # path('test/', views.shipping, name='test'), 
    path('cart/', views.cart, name='cart'), 
    path('checkout/', views.checkout, name='checkout'),
    path('orders/', views.orders, name='orders'),
    path('update_item/', views.updateItem, name='update_item'), 
    path('process_order/', views.processOrder, name='process_order'), 

    path('reset_password/',
        auth_views.PasswordResetView.as_view(template_name = 'password_reset.php'),
        name="reset_password"), 

    path('reset_password_sent/',
        auth_views.PasswordResetDoneView.as_view(template_name = 'password_reset_sent.php'),
        name = "password_reset_done"), 

    path('reset/<uidb64>/<token>/', 
        auth_views.PasswordResetConfirmView.as_view(template_name = 'password_reset_form.php'), 
        name="password_reset_confirm"), 

    path('reset_password_complete/', 
        auth_views.PasswordResetCompleteView.as_view(template_name = 'password_reset_complete.php'), 
        name="password_reset_complete"), 

    path('register/', views.registeruser, name='registeruser'),
    path('login/', views.loginuser, name='loginuser'),
    path('logout/', views.logoutuser, name='logoutuser'),
]
