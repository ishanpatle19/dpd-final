{% block content %} 
{% load static %}	


<!DOCTYPE html>
<html class="scheme_original" lang="en-US">

<head>
	<title>Dog Park Days</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/essgrid/settings.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3' type='text/css' media='all' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/revslider/settings.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce-layout.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce-smallscreen.css' %}" type='text/css' media='only screen and (max-width: 768px)' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/socials.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/style.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/fontello/css/fontello.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.animation.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.shortcodes.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/plugin.woocommerce.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/responsive.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/mediaelement/mediaelementplayer.min.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/grid.layout/grid.layout.min.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/custom.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/plugins.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.messages.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/magnific/magnific-popup.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/swiper/swiper.min.css' %}" type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/essgrid/lightbox.css' %}" type='text/css' media='all' />
	<link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}"/>
</head>

<body class="page body_filled article_style_stretch scheme_original top_panel_above sidebar_hide wpb-js-composer vc_responsive" onload="myFunction()" style="margin:0;">
	<div id="loader"></div>
	<div id="myDiv">
		<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.php" data-separator="yes"></a>
		<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
		<div class="body_wrap">
			<div class="page_wrap">
				<div class="top_panel_fixed_wrap"></div>
				<!-- header Start -->
				{% include 'header.php' %}
				<!-- header End -->
				<div class="top_panel_title top_panel_style_6 title_present scheme_original">
					<div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
						<div class="overlay"></div>
						<div class="content_wrap">
							<h1 class="page_title no_breadcrumbs ">My Order</h1>
						</div>
					</div>
				</div>
				<div class="page_content_wrap page_paddings_no">
					<div class="content_wrap">
						<div class="content">
						</br>
						<h3 class="text-center Product-successfully-added-text"><i class="fa fa-check" aria-hidden="true"></i>
						{% if user.is_authenticated %}
							Order Summary
    					{% else %}
      						Please login to see this page.
    					{% endif %}
						</h3>
							<article class="post_item post_item_single post-15 page hentry">
								<section class="post_content">
									<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="vc_empty_space w-100-f-left ptb-50">
														<div id="sc_form_777_wrap" class="sc_form_wrap">
															<div class="column-1_1 column_padding_bottom mb-5 tabcontent " style="display: block;">
																<h3>View Order details</h3>
																<hr class="separator">
																<div class="cart-grid-right col-xs-12 col-lg-4">
																	<div class="card cart-summary">
																		<div class="card-block">
																			<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Order Date:
																												</span>
																				<span class="value"> {{ orders.date_ordered }}</span>
																			</div>
																			<hr class="separator">
																			<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
                                                                                                                                  Order #:
																													</span>
																				<span class="value">{{ orders.transaction_id }}</span>
																			</div>
																			<hr class="separator">
																			<!-- <hr class="separator"> -->
																			{% for item in items %}
																			<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Order Total:
																													</span>
																				<span class="value">${{ item.product.price|floatformat:2}} x {{ item.quantity }} Book{{ item.quantity|pluralize }} </span>
																			</div>
																			{% endfor %}
																			<hr class="separator">
																		</div>
																	</div>
																</div>
																<!--  -->
															</div>
															<div class="sc_form_style_form_1 ">
																<div class="tabcontent " style="display: block;">
																	<h3>Shipment details   </h3>
																	<hr class="separator">
																	<h6>{{ shipping.address }}</h6>
																	<hr class="separator">
																	<article class="content_container">
																		<div class="sc_columns columns_wrap">
																			<div class="product has-post-thumbnail ">
																				<div class="sc_columns columns_wrap">
																					<div class="column-1_3 column_padding_bottom">Expected Delivery - 
																						<h4>5-6 Business Days </h4>
																						<hr class="separator">
																						<img src="{% static 'images/video/book1.png' %}" alt="" title="Book" />
																					</div>
																					<!--  -->
																					<!--  -->
																					<div class="column-1_2 column_padding_bottom">
																						<div class="cart-grid-right col-xs-12 col-lg-4">
																							<div class="card cart-summary order-payd">
																								<div class="card-block">
																								{% for item in items %}
																									<!--  -->
																									<hr class="separator">
																									<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Qty:
																													</span>
																										<span class="value">{{ item.quantity }}</span>
																									</div>
																									<hr class="separator">
																									<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
                                                                                                                                  Price
																												</span>
																										<span class="value"> ${{ item.product.price|floatformat:2}}</span>
																									</div>
																									<hr class="separator">
																									<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
                                                                                                                                  Shipping
																												</span>
																										<span class="value"> $4.00</span>
																									</div>
																									<hr class="separator">
																									<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Total Payable
																													</span>
																										<span class="value">${{ item.get_total|floatformat:2}}</span>
																									</div>
																									<hr class="separator">
																								{% endfor %}
																								</div>
																							</div>
																						</div>
																						<!--  -->
																					</div>
																				</div>
																			</div>
																			<div>
																	</article>
																	</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="vc_row-full-width"></div>
								</section>
							</article>
							<section class="related_wrap related_wrap_empty"></section>
							</div>
							</div>
						</div>
						<!-- footer Start -->
						{% include 'footer.php' %}
						<!-- footer End -->
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

	<script>
		var myVar;
			
			function myFunction() {
			  myVar = setTimeout(showPage, 3000);
			}
			
			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("myDiv").style.display = "block";
			}
	</script>
</body>

</html>



{% endblock %}