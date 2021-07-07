{% load static %}

<div id="popup_login" class="popup_wrap popup_login bg_tint_light">
		<a href="#" class="popup_close"></a> 
		<div class="form_wrap">
			<h4 class="text-center Product-successfully"><i class="fa fa-check" aria-hidden="true"></i> Product successfully added to your shopping cart</h4>
			<div class="sc_columns columns_wrap">
				<div class="product has-post-thumbnail ">
					<div class="sc_columns columns_wrap">
						{% for product in products %}
						<div class="column-1_2 column_padding_bottom">
							<img src="{{ product.imageURL }}" alt="" title="Book">
						</div>
						{% endfor %}
						<!--  -->
						<!--  -->
						{% for product in products %}
						<div class="column-1_2 column_padding_bottom">
							<h3 class="shop-popup-title ">{{ product.name }}</h3>
							<a href="{% url 'cart' %}" class="btn btn-primary proceed-checkout-btn"><i class="fa fa-check-square-o" aria-hidden="true"></i> Proceed to cart</a>
						</div>
						{% endfor %}
					</div>
				</div>
			</div>
		</div>
	</div>