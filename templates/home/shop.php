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

<body class="single single-product woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_above sidebar_hide wpb-js-composer vc_responsive" >
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
							<h1 class="page_title no_breadcrumbs">Shop</h1>
						</div>
					</div>
				</div>
				<div class="page_content_wrap page_paddings_yes pb-0">
					<div class="content_wrap">
						<div class="content">
							<article class="post_item post_item_single post_item_product">
								<div class="product has-post-thumbnail first">
									{% for product in products %}
										<div class="images">
											<a href="{{ product.imageURL }}" class="woocommerce-main-image zoom" title="">
												<img src="{{ product.imageURL }}" class="attachment-shop_single size-shop_single" alt="" title="TOY 3" />
											</a>
										</div>
										<div class="summary entry-summary">
											<h1 class="product_title entry-title">{{ product.name }}</h1></br>
											<div>
												<p class="price"> <span class="woocommerce-Price-amount amount"><b>Price - 
												<span class="woocommerce-Price-currencySymbol">&#36;</span>{{ product.price|floatformat:2 }}</span></b>
												</p>
											</div> 
											<div>
												<h5> A dog park is a playground for pups-join the fun as the characters run, wrestle and rest!</h5>
											</div>
											<!-- <div class="cart">
												<div class="update-cart">
													<button data-product = {{product.id}} data-action="add" class="btn btn-outline-secondary add-btn single_add_to_cart_button button alt popup_link popup_login_link inited update-cart" href="#popup_login">Add to cart</button>
												</div>
											</div> -->
											</br>
											{% if user.is_anonymous %}
												To protect your personal information, you must create an account.</br>
												<a href="{% url 'loginuser' %}" class="popup_link popup_login_link icon-user">Login</a>
											{% else %}
											<div class="quantity update-cart">
												<button data-product = {{product.id}} data-action="add" class="btn btn-outline-secondary add-btn single_add_to_cart_button button alt popup_link popup_login_link inited update-cart" href="#popup_login">Add to cart</button>
												<button data-product = {{product.id}} data-action="remove" onClick="window.location.reload();" class="btn btn-outline-secondary remove-btn single_remove_to_cart_button button alt popup_link popup_login_link inited update-cart">Empty Cart</button>
											</div>
											{% endif%}
										</div>
									{% endfor %}
									<div class="woocommerce-tabs wc-tabs-wrapper trx-stretch-width scheme_light inited" style="position: relative; box-sizing: border-box; left: -304.375px; width: 1779px; padding-left: 304.375px; padding-right: 304.625px;">
										<ul class="tabs wc-tabs">
											<li class="description_tab"> <a href="#tab-description">BOOK DESCRIPTION</a>
											</li>
										</ul>
										<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display:block">
											<div>
												<h5 class="cop-shop"> ©2020 Gwen Catt. ALL RIGHTS RESERVED.</h5>
												<h6 class="cop-shop1">Book Name : <span>Dog Park Days</span></h6>
												<h6 class="cop-shop1">Book Author : <span>Gwen Catt</span></h6>
												<h6 class="cop-shop1">ASIN : <span> 2020914534</span></h6>
												<h6 class="cop-shop1">Publisher : <span> Nine Lives Publishing | Charlevoix, Michigan</span></h6>
												<h6 class="cop-shop1">Language : <span> English</span></h6>
												<h6 class="cop-shop1">Paperback : <span> 30 pages</span></h6>
												<h6 class="cop-shop1">ISBN-13 : <span> 978-0-9601055-0-2</span></h6>
												<h6 class="cop-shop1">Item Weight :  <span> 0.6 kg</span></h6>
												<h6 class="cop-shop1">Dimensions :  <span> 11.5x8.75x0.25</span></h6>
												<h6 class="cop-shop1">Country of Origin : <span> USA</span></h6>
												<h6 class="cop-shop1">Kids Friendly : <span> Yes</span></h6>
												<h6 class="cop-shop1">Packer : <span> eFulfillment Service, Inc.</span></h6>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
				<!-- footer Start -->
				<!-- footer End -->
			</div>
		</div>
		<!-- addto cart Start -->
		{% include 'add-to-cart.php' %}
		<!-- addto cart End -->
		<a href="#" class="scroll_to_top" title="Scroll to top"></a>
		<div class="custom_html_section"></div>
<!-- </div> -->
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
	
	<script type='text/javascript' src="{% static 'js/cart.js' %}"></script>
</body>
</html>

{% endblock %}
