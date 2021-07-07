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
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/fontello/css/fontello.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/style.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.animation.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.shortcodes.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/plugin.woocommerce.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/responsive.css' %}" type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/mediaelement/mediaelementplayer.min.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/grid.layout/grid.layout.min.css' %}" type='text/css'   media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/custom.css' %}" type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/plugins.css' %}" type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.messages.css' %}" type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/magnific/magnific-popup.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/swiper/swiper.min.css' %}"  type='text/css' media='all' />
		<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/essgrid/lightbox.css' %}"  type='text/css' media='all' />

		<link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" /> 	
	</head>
	<body class="home page body_filled scheme_original top_panel_above sidebar_hide">

		<div class="body_wrap">
			<div class="page_wrap">
				<div class="top_panel_fixed_wrap"></div>
				<!-- header Start -->
				{% include 'header.php' %}
				<!-- header End -->
				<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
					<div class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-1" id="rev_slider_1_1_wrapper">
						<div class="rev_slider fullwidthabanner" data-version="5.2.6" id="rev_slider_1_1">
							<ul>
								<li data-delay="28600" data-description="" data-easein="default" data-easeout="default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1" data-masterspeed="300" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide" data-transition="fade">
									<img alt="" class="rev-slidebg" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" height="916" src="{% static 'images/transparent.png' %}" title="bg" width="1920">
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['0','0','0','-100']" data-responsive_offset="on" data-start="0" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-124','-124','-124','-124']" data-whitespace="nowrap" data-width="none" data-x="['center','center','center','center']" data-y="['bottom','bottom','bottom','bottom']" id="slide-1-layer-2">
										<img alt="" data-hh="['916px','916px','916px','916px']" data-no-retina="" data-ww="['1920px','1920px','1920px','1920px']" height="916" src="{% static 'images/bg.png' %}" width="1920">
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['28','28','28','23']" data-responsive_offset="on" data-start="3000" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['96','96','96','40']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-3">
										<div class="rs-looped rs-wave" data-angle="0" data-origin="50% 0%" data-radius="5px" data-speed="4">
											<img alt="" data-hh="['101px','101px','101px','101px']" data-no-retina="" data-ww="['173px','173px','173px','173px']" height="101" src="{% static 'images/1.png' %}" width="173">
										</div>
									</div>
									
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['55','55','55','-73']" data-responsive_offset="on" data-start="500" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-6','-6','-6','79']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['bottom','bottom','bottom','top']" id="slide-1-layer-1">
										<img alt="" data-hh="['562px','562px','562px','562px']" data-no-retina="" data-ww="['559px','559px','559px','559px']" height="562" src="{% static 'images/book2.png' %}" width="559">
									</div>
									
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['509','509','509','532']" data-responsive_offset="on" data-start="3300" data-transform_idle="o:1;" data-transform_in="opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-11','-11','-11','-97']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-8">
										<div class="rs-looped rs-pendulum" data-easing="Linear.easeNone" data-enddeg="7" data-origin="0% 0%" data-speed="7" data-startdeg="-7">
											<img alt="" data-hh="['246px','246px','246px','246px']" data-no-retina="" data-ww="['26px','26px','26px','26px']" height="246" src="{% static 'images/33.png' %}" width="26">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['464','464','464','761']" data-responsive_offset="on" data-start="2500" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['42','42','42','45']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-4">
										<div class="rs-looped rs-wave" data-angle="0" data-origin="50% 50%" data-radius="5px" data-speed="3">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['996','996','996','488']" data-responsive_offset="on" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['78','78','78','3']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-5">
										<div class="rs-looped rs-wave" data-angle="0" data-origin="50% 50%" data-radius="5px" data-speed="5">
											<img alt="" data-hh="['88px','88px','88px','88px']" data-no-retina="" data-ww="['132px','132px','132px','132px']" height="70" src="{% static 'images/2.png' %}" width="172">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['-4','-4','-4','11']" data-responsive_offset="on" data-start="2700" data-transform_idle="o:1;" data-transform_in="opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-120','-120','-120','-24']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-7">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-enddeg="-5" data-origin="0% 0%" data-speed="5" data-startdeg="5">
											<img alt="" data-hh="['246px','246px','246px','246px']" data-no-retina="" data-ww="['26px','26px','26px','26px']" height="246" src="{% static 'images/11.png' %}" width="26">
										</div>
									</div>	
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['215','215','215','215']" data-responsive_offset="on" data-start="3700" data-transform_idle="o:1;" data-transform_in="opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-186','-186','-186','-186']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-9">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-enddeg="-3" data-origin="50% 50%" data-speed="3" data-startdeg="3">
											<img alt="" data-hh="['246px','246px','246px','246px']" data-no-retina="" data-ww="['26px','26px','26px','26px']" height="246" src="{% static 'images/11.png' %}" width="26">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['740','740','740','740']" data-responsive_offset="on" data-start="3000" data-transform_idle="o:1;" data-transform_in="opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-179','-179','-179','-179']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-10">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-enddeg="4" data-origin="50% 50%" data-speed="4" data-startdeg="-4">
											<img alt="" data-hh="['246px','246px','246px','246px']" data-no-retina="" data-ww="['26px','26px','26px','26px']" height="246" src="{% static 'images/11.png' %}" width="26">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['885','885','885','332']" data-responsive_offset="on" data-start="3900" data-transform_idle="o:1;" data-transform_in="opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-78','-78','-78','-122']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-6">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-enddeg="-6" data-origin="0% 0%" data-speed="6" data-startdeg="6">
											<img alt="" data-hh="['246px','246px','246px','246px']" data-no-retina="" data-ww="['26px','26px','26px','26px']" height="246" src="{% static 'images/33.png' %}" width="26">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['1084','1084','1084','1084']" data-responsive_offset="on" data-start="3600" data-transform_idle="o:1;" data-transform_in="opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-189','-189','-189','-189']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-11">
										<div class="rs-looped rs-pendulum" data-easing="linearEaseNone" data-enddeg="2" data-origin="50% 50%" data-speed="2" data-startdeg="-2">
											<img alt="" data-hh="['246px','246px','246px','246px']" data-no-retina="" data-ww="['26px','26px','26px','26px']" height="246" src="{% static 'images/33.png' %}" width="26">
										</div>
									</div>
									<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['928','928','928','409']" data-responsive_offset="on" data-start="4500" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['58','58','58','12']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']" data-y="['top','top','top','top']" id="slide-1-layer-12">
										<img alt="" data-hh="['68px','68px','68px','68px']" data-no-retina="" data-ww="['49px','49px','49px','49px']" height="68" src="{% static 'images/44.png' %}" width="49">
									</div>
									<div class="tp-caption tp-resizeme" data-fontsize="['28','28','28','30']" data-height="none" data-hoffset="['588','588','588','26']" data-lineheight="['54','54','54','40']" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="1500" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['-69','-69','-69','-42']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','right']" data-y="['middle','middle','middle','middle']" id="slide-1-layer-13">
									A dog park is a playground for pups -<br>
									Join the fun as the characters run,<br>
									 wrestle and rest!
									
									</div>
									<a href="{% url 'shop' %}">
										<div class="tp-caption tp-resizeme" data-height="none" data-hoffset="['588','588','588','221']" data-responsive_offset="on" data-start="2700" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['100','100','100','45']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','right']" data-y="['middle','middle','middle','middle']" id="slide-1-layer-15">
											<img alt="" data-hh="['87px','87px','87px','61px']" data-no-retina="" data-ww="['180px','180px','180px','125px']" height="87" src="{% static 'images/55.png' %}" width="180">
										</div>
										<div class="tp-caption tp-resizeme" data-actions='[{"event":"click","action":"simplelink","target":"_self" ,"delay":""}]' data-fontsize="['22','22','22','15']" data-height="none" data-hoffset="['622','622','622','246']" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2700" data-style_hover="c:rgba(18, 174, 224, 1.00);br:0px 0px 0px 0px;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:700;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;" data-voffset="['100','100','100','45']" data-whitespace="nowrap" data-width="none" data-x="['left','left','left','right']" data-y="['middle','middle','middle','middle']" id="slide-1-layer-16">
										PURCHASE
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</section>
				<div class="page_content_wrap page_paddings_no">
					<div class="content_wrap">
						<div class="content">
							<article class="post_item post_item_single page hentry">
								<section class="post_content">
									<div class="vc_row wpb_row vc_row-fluid vc_custom_1465304445467" data-vc-full-width="true" data-vc-full-width-init="false">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="sc_call_to_action sc_call_to_action_accented sc_call_to_action_style_2 sc_call_to_action_align_left" id="sc_call_to_action_1410139963">
														
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row-full-width"></div>
									<!--  -->
									<div class="vc_row wpb_row vc_row-fluid vc_custom_1466079083678" data-vc-full-width="true" data-vc-full-width-init="false">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_empty_space em_height_9">
														<span class="vc_empty_space_inner"></span>
													</div>
													<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
														<div class="column-1_2 sc_column_item odd first ">
															<img src="{% static 'images/gwen.jpg' %}" class="Gwen-Catt-img"/>
														</div>
														<div class="column-1_2 sc_column_item even">
															<h1 class="sc_title sc_title_regular sc_align_left text_uppercase">
																Gwen Catt
															</h1>
															<h6 class="sc_title sc_title_regular sc_align_left">
																Gwen Catt grew up in the small town of Kalkaska, Michigan.  She started her teaching career when she was just a child 
																using a chalkboard and her brother and cousin as students. Later, she earned her Bachelor’s Degree at Aquinas College and 
																eventually a master’s degree.  After decades as a classroom teacher and literacy consultant, she retired and devoted her 
																time to writing.  Gwen retired and splits her time between Charlevoix, Michigan and Bonita Springs, Florida, the setting 
																for Dog Park Days. She and her husband, Glen have two children Olivia and Tanner, and two dogs, Benson and Kobe.
															</h6>
															<div class="sc_section sc_section_block">
																<div class="sc_section_inner">
																	<div class="sc_section_content_wrap">
																		<a class="sc_button sc_button_round sc_button_style_filled sc_button_size_large sc_button_color_1 large" href="{% url 'about' %}">Dog Park Days</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_empty_space em_height_9">
														<span class="vc_empty_space_inner"></span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="vc_row-full-width"></div>
									
									<div class="vc_row-full-width"></div>
									
									<div class="vc_row wpb_row vc_row-fluid vc_custom_1465394530867 inverse_colors" data-vc-full-width="true" data-vc-full-width-init="false">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_empty_space em_height_4-3">
														<span class="vc_empty_space_inner"></span>
													</div>
													<div class="sc_services_wrap" id="sc_services_025_wrap">
														<div class="sc_services sc_services_style_services-3 sc_services_type_icons" id="sc_services_025">
															<div class="sc_columns columns_wrap">
																<div class="column-1_2 column_padding_bottom">
																	<div class="sc_services_item sc_services_item_1" id="sc_services_025_1">
																		<span class="sc_icon icon-time10"></span>
																		<h4 class="sc_services_item_title">
																			<a href="#">Fast Delivery</a>
																		</h4>
																		<div class="sc_services_item_description">
																			<p>Find tracking information and order details from Your Orders.</p>
																		</div>
																	</div>
																</div>
																<div class="column-1_2 column_padding_bottom">
																	<div class="sc_services_item sc_services_item_2" id="sc_services_025_2">
																		<span class="sc_icon icon-key65"></span>
																		<h4 class="sc_services_item_title">
																			<a href="#">Save Money</a>
																		</h4>
																		<div class="sc_services_item_description">
																			<p>Get the book at a great price without any hidden costs or taxations.</p>
																		</div>
																	</div>
																</div>
																<div class="column-1_2 column_padding_bottom">
																	<div class="sc_services_item sc_services_item_3" id="sc_services_025_3">
																		<span class="sc_icon icon-rocket21"></span>
																		<h4 class="sc_services_item_title">
																			<a href="#">Child Safe</a>
																		</h4>
																		<div class="sc_services_item_description">
																			<p>These books are made of child-safe papers and are 100% recyclable.</p>
																		</div>
																	</div>
																</div>
																<div class="column-1_2 column_padding_bottom">
																	<div class="sc_services_item sc_services_item_4" id="sc_services_025_4">
																		<span class="sc_icon icon-sun41"></span>
																		<h4 class="sc_services_item_title">
																			<a href="#">Online Support</a>
																		</h4>
																		<div class="sc_services_item_description">
																			<p>Use our 24/7 customer hotline so you’re not alone if you have a question</p>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_empty_space em_height_2-5">
														<span class="vc_empty_space_inner"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="vc_row-full-width"></div>
								
									<div class="vc_row-full-width"></div>
									<div class="vc_row wpb_row vc_row-fluid vc_custom_1465460471441 inverse_colors" data-vc-full-width="true" data-vc-full-width-init="false">
										<div class="overlay"></div>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="vc_empty_space em_height_6-7">
														<span class="vc_empty_space_inner"></span>
													</div>
													<div class="sc_section sc_section_block aligncenter">
														<div class="sc_section_inner">
															<div class="sc_section_content_wrap">
																<figure class="sc_image sc_image_shape_square">
																	<img alt="" src="{% static 'images/pawprint.png' %}">
																</figure>
																<div class="sc_testimonials sc_testimonials_style_testimonials-1 aligncenter" id="sc_testimonials_186">
																	<h2 class="sc_testimonials_title sc_item_title">What our Happy Clients Say</h2>
																	<div class="sc_slider_swiper swiper-slider-container sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols" data-interval="9245" data-old-width="900px" data-slides-min-width="250">
																		<div class="slides swiper-wrapper">
																			<div class="swiper-slide" data-style="width:900px;">
																				<div class="sc_testimonial_item" id="sc_testimonials_186_1">
																					<div class="sc_testimonial_content">
																						<p>
																							Dog Park Days can be your “go to” book for any discipline. Whether you are a speech therapist (like myself), teacher or mother, your children will be learning while being engaged throughout.
																						</p>
																					</div>
																					<div class="sc_testimonial_author">
																						<span class="sc_testimonial_author_name">Olivia Stipanovich, MSP. CCC-SLP, <br> Creekside Elementary School New Bern, North Carolina
																						</span>
																					</div>
																				</div>
																			</div>
																			<!--  -->
																			<div class="swiper-slide" data-style="width:900px;">
																				<div class="sc_testimonial_item" id="sc_testimonials_186_1">
																					<div class="sc_testimonial_content">
																						<p>
																							I may have to buy another copy, both my girls want Dog Park Days! As a parent, I love the teaching tips in the back, that is exactly what my daughters are working on in school.
																						</p>
																					</div>
																					<div class="sc_testimonial_author">
																						<span class="sc_testimonial_author_name">Kelly Stakely, mother of elementary students,<br> Bonita Springs, Florida
																						</span>
																					</div>
																				</div>
																			</div>
																			<!--  -->
																			<div class="swiper-slide" data-style="width:900px;">
																				<div class="sc_testimonial_item" id="sc_testimonials_186_1">
																					<div class="sc_testimonial_content">
																						<p>
																							What a fun book! I, personally, enjoyed it and see no reason why kids wouldn’t as well! It is busy and lighthearted. Bringing forth similarities between behaviors in the dog park and the school playground was a great idea which can serve as a platform for a variety of verbal discussions centering on social behavior and feelings. School age kids will grasp the more advanced concepts and preschoolers should love it just for the antics and mischief found in the dogs park behavior!  A great first book by Gwen Catt! Looking forward to seeing more!  
																						</p>
																					</div>
																					<div class="sc_testimonial_author">
																						<span class="sc_testimonial_author_name">Robin Johnson, retired Gaylord Community Schools,<br> Michigan, MSP

																						</span>
																					</div>
																				</div>
																			</div>
																			<!--  -->
																			<div class="swiper-slide" data-style="width:900px;">
																				<div class="sc_testimonial_item" id="sc_testimonials_186_1">
																					<div class="sc_testimonial_content">
																						<p>
																							What a nice lesson at the end of Dog Park Days to guide teachers through a writers’ workshop lesson.  I like the generic structure the charts gave; it would seem to be easy for teachers to take the chart from the book and apply it to another text.  I think teachers would appreciate the reference of specific text such as Katie Wood Ray’s, In Pictures and in Words.  There’s so much “stuff” out there; it’s nice to have someone direct you to a text that has been vetted by a real teacher and specialist. This book is great scaffolding for teaching writing. 
																						</p>
																					</div>
																					<div class="sc_testimonial_author">
																						<span class="sc_testimonial_author_name">I  Annette Horino-Holbrook, retired reading specialist Cheybogan-Otsego-Presque Isle Educational Service Center,<br> Michigan 

																						</span>
																					</div>
																				</div>
																			</div>
																			
																		</div>
																		<div class="sc_slider_controls_wrap">
																			<a class="sc_slider_prev" href="#"></a>
																			<a class="sc_slider_next" href="#"></a>
																		</div>
																		<div class="sc_slider_pagination_wrap"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="vc_empty_space em_height_5-9">
														<span class="vc_empty_space_inner"></span>
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

		<script type='text/javascript' src="{% static 'js/vendor/jquery/jquery.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/jquery/jquery-migrate.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/custom/custom.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/essgrid/lightbox.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/essgrid/jquery.themepunch.tools.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/essgrid/jquery.themepunch.essential.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/revslider/jquery.themepunch.revolution.min.js' %}" ></script>
		<script type="text/javascript" src="{% static 'js/vendor/revslider/extensions/revolution.extension.slideanims.min.js' %}" ></script>
		<script type="text/javascript" src="{% static 'js/vendor/revslider/extensions/revolution.extension.actions.min.js' %}" ></script>
		<script type="text/javascript" src="{% static 'js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/woo/add-to-cart.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/woo/woocommerce-add-to-cart.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/photostack/modernizr.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/woo/jquery.blockUI.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/woo/woocommerce.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/woo/jquery.cookie.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/woo/cart-fragments.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/superfish.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/custom/jquery/core.utils.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/custom/jquery/core.init.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/custom/jquery/theme.init.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/mediaelement/mediaelement-and-player.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/custom/jquery/theme.shortcodes.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/custom/jquery/core.messages.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/magnific/jquery.magnific-popup.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/grid.layout/grid.layout.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/swiper/swiper.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/ui/core.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/ui/widget.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/ui/tabs.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/ui/effect.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/ui/effect-fade.min.js' %}" ></script>
		<script type='text/javascript' src="{% static 'js/vendor/isotope/isotope.pkgd.min.js' %}" ></script>

		<script type='text/javascript' src=" {% static 'js/cart.js' %}"></script>
	</body>
</html>


{% endblock %}