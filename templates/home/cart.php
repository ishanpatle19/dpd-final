{% extends 'main2.php' %}
{% load static %}
{% block content %} 

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
	<title>Dog Park Day</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3' type='text/css' media='all' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce-layout.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce-smallscreen.css' %}" type='text/css' media='only screen and (max-width: 768px)' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/socials.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/fontello/css/fontello.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/style.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.animation.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.shortcodes.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/plugin.woocommerce.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/responsive.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/custom.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/plugins.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.messages.css' %}" type='text/css' media='all' />
	<link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" />
</head>
 
<body class="single single-product woocommerce-page body_filled article_style_stretch scheme_original top_panel_above sidebar_hide wpb-js-composer vc_responsive" onload="myFunction()" style="margin:0;">

		<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
		<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
		<div class="body_wrap">
			<div class="page_wrap">
				<div class="top_panel_fixed_wrap"></div>
				<!-- header Start -->
				<!-- header End -->
				<div class="top_panel_title top_panel_style_6 title_present scheme_original">
					<div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner">
						<div class="overlay"></div>
						<div class="content_wrap">
							<h1 class="page_title no_breadcrumbs">SHOPPING CART</h1>
						</div>
					</div>
				</div>
				<div class="page_content_wrap page_paddings_yes pb-0">
				<div class="content_wrap">
						<h3 class="text-center Product-successfully-added-text"><i class="fa fa-check" aria-hidden="true"></i>
						{% if user.is_anonymous %}
							To protect your personal information, you must create an account.
						{% else %}
							Your Cart!
						{% endif%}
						</h3>
						<article class="content_container">
							<div class="sc_columns columns_wrap">
								<div class="product has-post-thumbnail ">
									<div class="sc_columns columns_wrap">
									{% for item in items %}
										<div class="column-1_3 column_padding_bottom">
												<img src="{{ item.product.imageURL }}" alt="" title="Book" />
										</div>
											<!--  -->
										<div class="column-1_3 column_padding_bottom"></div>
										<!--  -->
										<div class="column-1_3 column_padding_bottom">
											<h4 class="product_title entry-title cart-price-page">My Shopping Bag 
											{% if items %}
											<span>({{ item.quantity }} Book{{ item.quantity|pluralize }})</span>
											{% else %}
											<span>Book</span>
											{% endif %}
											</h4>
											<div class="cart-grid-right col-xs-12 col-lg-4">
												<div class="card cart-summary">
													<div class="cart-detailed-totals">
														<div class="card-block">
															<div class="cart-summary-line" id="cart-subtotal-products"> 
																<span class="label js-subtotal">
																	Qty:
																</span>
																<span class="value">{{ item.quantity }} x ${{ item.product.price|floatformat:2}}</span>
															</div>
															<div class="cart-summary-line" id="cart-subtotal-shipping"> <span class="label">
																							Shipping:
																						</span>
																<span class="value">Free</span>
															</div>
															<div class="cart-summary-line" id="cart-subtotal-shipping"> <span class="label">
																							Publisher:
																						</span>
																<span class="value">Nine Lives Publishing</span>
															</div>
															<div class="cart-summary-line" id="cart-subtotal-shipping"> <span class="label">
																							Delivery Cost:
																						</span>
																<span class="value">$4</span>
															</div>
														</div>
														<hr class="separator">
														<div class="card-block">
															<div class="cart-summary-line cart-total"> <span class="label">Total:</span>
																<span class="value">${{ item.get_total|floatformat:2 }}</span>
															</div>
														</div>
														<hr class="separator">
														<h10 style="font-size: 10px;">(Delivery charges are applicable on each order.)</h10>
													</div>
												</div>
											</div>
										<a href="{% url 'shop' %}" class="btn btn-primary mr-1 single_add_to_cart_button button alt" >Continue shopping</a><a href="{% url 'checkout' %}" class="btn btn-primary proceed-checkout-btn"><i class="fa fa-check-square-o" aria-hidden="true"></i> Proceed to checkout</a>
									{% endfor %}	
									</div>
								</div>
							</div>
						</article>
					</div>
						<!-- footer Start -->
						<!-- footer End -->
					</div>
				</div>
			</div>
			<a href="#" class="scroll_to_top" title="Scroll to top"></a>
			<div class="custom_html_section"></div>
			</div>
		</div>
	</div>
	<script type='text/javascript' src="{% static 'js/vendor/jquery/jquery.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/jquery/jquery-migrate.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/custom.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/add-to-cart.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/woocommerce-add-to-cart.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/photostack/modernizr.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/single-product.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/jquery.blockUI.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/woocommerce.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/jquery.cookie.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/woo/cart-fragments.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/superfish.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/core.utils.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/core.init.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/theme.init.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/comment-reply.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/theme.shortcodes.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/core.messages.js' %}"></script>
</body>
</html>

{% endblock %}