{% extends 'index.php' %}
{% block content %} 
{% load static %}

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
	<title>Dog Park Day</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="images/1000.png" />
	<link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3' type='text/css' media='all' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link property="stylesheet" rel='stylesheet' href='js/vendor/woo/prettyPhoto.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='js/vendor/woo/woocommerce-layout.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='js/vendor/woo/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
	<link property="stylesheet" rel='stylesheet' href='js/vendor/woo/woocommerce.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/socials.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/style.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/core.animation.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/theme.shortcodes.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/theme.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='js/vendor/woo/plugin.woocommerce.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/custom/custom.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/custom/plugins.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/core.messages.css' type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
	<link rel="icon" href="images/cropped-big_favicon-32x32.png" />
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
				<?php include( "header.php"); ?>
				<!-- header End -->
				<div class="top_panel_title top_panel_style_6 title_present scheme_original">
					<div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner">
						<div class="overlay"></div>
						<div class="content_wrap">
							<h1 class="page_title no_breadcrumbs">Checkout</h1>
						</div>
					</div>
				</div>
				<div class="page_content_wrap page_paddings_no">
					<div class="content_wrap">
						<div class="content">
							<article class="post_item post_item_single post-15 page hentry">
								<div class="post_content">
									<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="vc_empty_space w-100-f-left ptb-50">
														<div id="sc_form_777_wrap" class="sc_form_wrap">
															<form>
																<div class="sc_form_style_form_1 ">
																	<div class="tab">
																		<button class="tablinks  sc_button_hover_fade active " onclick="openCity(event, 'Shipping-Information')">Shipping Information</button>
																	</div>
																	<div id="Shipping-Information" class="tabcontent" style="display: block;">
																		<h2>Shipping Information</h2>
																		<hr/>
																		<div class="sc_input_hover_default">
																			<div class="sc_form_info">
																				<div class="columns_wrap">
																					<h4>Contact Info</h4>
																					<div class="sc_form_item sc_form_field label_over column-1_2">
																						<input type="text" placeholder="First Name *" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_2">
																						<input type="text" placeholder="Last Name *" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_2">
																						<input type="text" placeholder="Phone No*" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_2">
																						<input type="text" placeholder="E-mail *" required>
																					</div>
																					<h4>Address</h4>
																					<div class="sc_form_item sc_form_field label_over column-1_2">
																						<input type="text" placeholder="Delivery Address" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_2">
																						<input type="text" placeholder="Delivery Address" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_3">
																						<input type="text" placeholder="City" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_3">
																						<input type="text" placeholder="Pin code" required>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_3">
																						<select required>
																							<option value="Select State">Select State</option>
																						</select>
																					</div>
																					<div class="sc_form_item sc_form_field label_over column-1_1">
																						<select required>
																							<option value="Select Country">Select Country</option>
																						</select>
																					</div>
																				</div>
																			</div>
																			<button class="sc_form_item sc_form_button sc_button sc_button_color_1 small sc_button_size_small db-mx" style="margin-bottom: 20px;">Confirm</button>
																		<hr/>
																			<div class="sc_columns columns_wrap">
																				<div class="column-1_2 column_padding_bottom"><h2 style="margin-bottom: 0;">Make Payment</h2></div>
																				<div class="column-1_2 column_padding_bottom" ><button class="sc_form_item sc_form_button sc_button sc_button_color_1 small sc_button_size_small db-mx">Payment</button></div>
																			</div>
																			
																			<hr>
																			<h3>Order Review</h3>
																			<div class="content_container">
																				<div class="sc_columns columns_wrap">
																					<div class="product has-post-thumbnail ">
																						<div class="sc_columns columns_wrap">
																							<div class="column-1_3 column_padding_bottom">
																								<img src="images/video/book1.png" alt="" title="Book" />
																							</div>
																							<!--  -->
																							<!--  -->
																							<div class="column-1_3 column_padding_bottom">
																								<h1 class="product_title entry-title cart-price-page">Dog Park Days</h1>
																								<div class="cart-grid-right col-xs-12 col-lg-4">
																									<div class="card cart-summary">
																										<div class="card-block">
																											<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														items:
																												</span>
																												<span class="value"> $18.95</span>
																											</div>
																											<!--  -->
																											<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Shipping:
																													</span>
																												<span class="value">Free</span>
																											</div>
																											<hr class="separator">
																											<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Order Total:
																													</span>
																												<span class="value">$18.95</span>
																											</div>
																											<div class="cart-summary-line review-list-main"> <span class="review-list-tool">
																														Delivery Date:
																													</span>
																												<span class="value">30-03-2021</span>
																											</div>
																										</div>
																									</div>
																								</div>
																								<!--  -->
																							</div>
																						</div>
																					</div>
																					<div>
																			</div>
																			</div>
																			</div>
																		</div>
															</form>
															</div>
															</div>
														</div>
													</div>
												</div>
												<div class="vc_row-full-width"></div>
											</div>
										</div>
							</article>
							<section class="related_wrap related_wrap_empty"></section>
							</div>
							</div>
						</div>
						<!-- footer Start -->
						<?php include( "footer.php"); ?>
						<!-- footer End -->
					</div>
				</div>
				<a href="#" class="scroll_to_top" title="Scroll to top"></a>
				<div class="custom_html_section"></div>
				<script type='text/javascript' src='js/vendor/jquery/jquery.js'></script>
				<script type='text/javascript' src='js/vendor/jquery/jquery-migrate.min.js'></script>
				<script type='text/javascript' src='js/custom/custom.js'></script>
				<script type='text/javascript' src='js/vendor/woo/add-to-cart.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/woocommerce-add-to-cart.js'></script>
				<script type='text/javascript' src='js/vendor/photostack/modernizr.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/jquery.prettyPhoto.min.js?ver=3.1.6'></script>
				<script type='text/javascript' src='js/vendor/woo/jquery.prettyPhoto.init.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/single-product.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/jquery.blockUI.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/woocommerce.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/jquery.cookie.min.js'></script>
				<script type='text/javascript' src='js/vendor/woo/cart-fragments.min.js'></script>
				<script type='text/javascript' src='js/vendor/superfish.js'></script>
				<script type='text/javascript' src='js/custom/jquery/core.utils.js'></script>
				<script type='text/javascript' src='js/custom/jquery/core.init.js'></script>
				<script type='text/javascript' src='js/custom/jquery/theme.init.js'></script>
				<script type='text/javascript' src='js/vendor/comment-reply.min.js'></script>
				<script type='text/javascript' src='js/custom/jquery/theme.shortcodes.js'></script>
				<script type='text/javascript' src='js/custom/jquery/core.messages.js'></script>
				<script>
					function openCity(evt, cityName) {
						  var i, tabcontent, tablinks;
						  tabcontent = document.getElementsByClassName("tabcontent");
						  for (i = 0; i < tabcontent.length; i++) {
						    tabcontent[i].style.display = "none";
						  }
						  tablinks = document.getElementsByClassName("tablinks");
						  for (i = 0; i < tablinks.length; i++) {
						    tablinks[i].className = tablinks[i].className.replace(" active", "");
						  }
						  document.getElementById(cityName).style.display = "block";
						  evt.currentTarget.className += " active";
						}
				</script>
				<script>
					var myVar;
			
			function myFunction() {
			  myVar = setTimeout(showPage, 300);
			}
			
			function showPage() {
			  document.getElementById("loader").style.display = "none";
			  document.getElementById("myDiv").style.display = "block";
			}
				</script>
</body>

</html>