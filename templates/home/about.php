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
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/revslider/settings.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce-layout.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce-smallscreen.css' %}" type='text/css'  media='only screen and (max-width: 768px)' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/woocommerce.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/socials.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/style.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/fontello/css/fontello.css' %}"  type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.animation.css' %}"  type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.shortcodes.css' %}"  type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/theme.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/woo/plugin.woocommerce.css' %}"  type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/responsive.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/mediaelement/mediaelementplayer.min.css' %}"  type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/grid.layout/grid.layout.min.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/custom.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/custom/plugins.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'css/core.messages.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/magnific/magnific-popup.css' %}"  type='text/css' media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/swiper/swiper.min.css' %}" type='text/css'  media='all' />
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/essgrid/lightbox.css' %}" type='text/css'  media='all' />
	<link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" />
</head>

<body class="single single-product woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_above sidebar_hide wpb-js-composer vc_responsive" onload="myFunction()" style="margin:0;">
	<div id="loader"></div>
	<div style="display:none;" id="myDiv">
		<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
		<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>
		<div class="body_wrap">
			<div class="page_wrap">
				<div class="top_panel_fixed_wrap"></div>
				<!-- header Start -->
				{% include 'header.php' %}
				<!-- header end -->
				<div class="top_panel_title top_panel_style_6 title_present scheme_original">
					<div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner">
						<div class="overlay"></div>
						<div class="content_wrap">
							<h1 class="page_title no_breadcrumbs">About Us</h1>
						</div>
					</div>
				</div>
				<div class="page_content_wrap page_paddings_yes pb-0">
					<div class="content_wrap">
						<div class="content">
							<!--  -->
							<div class="columns_wrap sc_columns">
								<div class="column-1_2 mb-5">
									<h2 class="about-Gwen-head">Gwen Catt </h2>
									<p class="about-Gwen-subtext">is a retired elementary teacher and literacy consultant and the author of Dog Park Days. When she is not writing, Catt works with teachers and teams developing workshop lessons to meet the individual goals of a particular district. Gwen is fueled by her passion for children, outstanding literature and an understanding of the unyielding demands on the elementary teacher. She considers herself a ‘forever student,’ eager to both build on her academic foundations in education and literacy, while staying in tune with the latest teaching strategies through her continued work.</p>
									<p class="about-Gwen-subtext">Gwen Catt grew up in the small town of Kalkaska, Michigan. She started her teaching career when she was just a child using a chalkboard and her brother and cousin as students. Later, she earned her Bachelor’s Degree at Aquinas College and eventually a master’s degree. After decades as a classroom teacher and literacy consultant, she retired and devoted her time to writing. Gwen retired and splits her time between Charlevoix, Michigan and Bonita Springs, Florida, the setting for Dog Park Days. She and her husband, Glen have two children Olivia and Tanner, and two dogs, Benson and Kobe.</p>
								</div>
								<div class="column-1_2">
									<img src="{% static 'images/video/about-12.jpg' %}" class="about-12-img-css %}">
								</div>
							</div>
							<!--  -->
						</div>
					</div>
				</div>
				<!--  -->
				<div class="page_content_wrap page_paddings_yes vc_custom_1466079083678">
					<div class="content_wrap">
						<div class="content">
							<!--  -->
							<div class="columns_wrap sc_columns">
								<div class="column-1_2">
									<img src="{% static 'images/video/about-13.jpg' %}">
								</div>
								<!--  -->
								<div class="column-1_2 mb-5">
									<p class="about-13-text text-justify">Gwen believes in sharing her passion and knowledge with teachers – as a way to improve the writing experience for children. Gwen is currently working as a freelance consultant and is always interested in a challenge. Reach out to gwencatt@gmail.com to connect!</p>
									<blockquote>“Writing is the ultimate art of creativity in which children have the opportunity to express. Too often our classrooms are filled with students that look at writing as a chore rather than a creative opportunity. Our jobs as teachers… is to change that.” -Gwen Catt</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="page_content_wrap page_paddings_yes">
					<div class="content_wrap">
						<div class="content">
							<article class="post_item post_item_single page hentry">
								<section class="post_content">
									<div class="vc_row wpb_row vc_row-fluid">
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
												<div class="wpb_wrapper">
													<div class="sc_section sc_section_block">
														<div class="sc_section_inner">
															<h2 class="sc_section_title sc_item_title">Dog Park Days</h2>
															<div class="sc_section_content_wrap">
																<article class="myportfolio-container minimal-light" id="esg-grid-48-1-wrap">
																	<div id="esg-grid-48-1" class="esg-grid">
																		<ul>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="3" data-cobblesh="2">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/img-11.png' %}" alt="video">
																					</div>
																					<a class="eg-washington-element-0 esgbox play-bg-btn-dpd" target="bank" href="{% static 'images/video/DogParkDays2.mp4' %}">
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							 <i class="eg-icon-play"></i>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																					</a>
																				</div>
																			</li>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="1" data-cobblesh="1">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/img-12.png' %}" alt="">
																					</div>
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							<a class="eg-washington-element-0 esgbox" href="{% static 'images/video/img-12.png' %}"> <i class="eg-icon-search"></i>
																							</a>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																				</div>
																			</li>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="1" data-cobblesh="1">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/img-13.png' %}" alt="">
																					</div>
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							<a class="eg-washington-element-0 esgbox" href="{% static 'images/video/img-13.png'%}"> <i class="eg-icon-search"></i>
																							</a>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																				</div>
																			</li>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="1" data-cobblesh="1">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/Catt-12-13_web.jpg' %}" alt="">
																					</div>
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							<a class="eg-washington-element-0 esgbox" href="{% static 'images/video/Catt-12-13_web.jpg' %}"> <i class="eg-icon-search"></i>
																							</a>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																				</div>
																			</li>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="1" data-cobblesh="1">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/book1.png' %}" alt="">
																					</div>
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							<a class="eg-washington-element-0 esgbox" href="{% static 'images/video/book1.png' %}"> <i class="eg-icon-search"></i>
																							</a>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																				</div>
																			</li>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="1" data-cobblesh="1">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/Catt-backCover_web.jpg' %}" alt="">
																					</div>
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							<a class="eg-washington-element-0 esgbox" href="{% static 'images/video/Catt-backCover_web.jpg' %}"> <i class="eg-icon-search"></i>
																							</a>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																				</div>
																			</li>
																			<li class="filterall eg-washington-wrapper" data-cobblesw="1" data-cobblesh="1">
																				<div class="esg-media-cover-wrapper">
																					<div class="esg-entry-media">
																						<img src="{% static 'images/video/toby-and-friend-sleeping_web.jpg' %}" alt="">
																					</div>
																					<div class="esg-entry-cover esg-fade" data-delay="0">
																						<div class="esg-overlay esg-fade eg-washington-container" data-delay="0"></div>
																						<div class="esg-center eg-washington-element-0-a esg-falldown" data-delay="0.1">
																							<a class="eg-washington-element-0 esgbox" href="{% static 'images/video/toby-and-friend-sleeping_web.jpg' %}"> <i class="eg-icon-search"></i>
																							</a>
																						</div>
																						<div class="esg-center eg-washington-element-8 esg-none esg-clear"></div>
																						<div class="esg-center eg-washington-element-9 esg-none esg-clear"></div>
																					</div>
																				</div>
																			</li>
																		</ul>
																	</div>
																</article>
																<div class="clear"></div>
															</div>
														</div>
													</div>
													<div class="vc_empty_space em_height_4-4"> <span class="vc_empty_space_inner"></span>
													</div>
													<div class="wpb_text_column wpb_content_element ">
														<div class="wpb_wrapper">
															<p class="centext">Gwen Catt grew up in the small town of Kalkaska, Michigan. She started her teaching career when she was just a child using a chalkboard and her brother and cousin as students. Later, she earned her Bachelor’s Degree at Aquinas College and eventually a master’s degree. After decades as a classroom teacher and literacy consultant, she retired and devoted her time to writing. Gwen retired and splits her time between Charlevoix, Michigan and Bonita Springs, Florida, the setting for Dog Park Days. She and her husband, Glen have two children Olivia and Tanner, and two dogs, Benson and Kobe.</p>
														</div>
													</div>
													<div class="vc_empty_space em_height_4"> <span class="vc_empty_space_inner"></span>
													</div>
													<div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="vc_row wpb_row vc_row-fluid vc_custom_1465460471441 inverse_colors" data-vc-full-width="true" data-vc-full-width-init="false">
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
                                                            <img alt="" src="images/pawprint.png">
                                                        </figure>
                                                        <div class="sc_testimonials sc_testimonials_style_testimonials-1 aligncenter" id="sc_testimonials_186">
                                                            <h2 class="sc_testimonials_title sc_item_title">What our Happy Clients Say</h2>
                                                            <div class="sc_slider_swiper swiper-slider-container sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols" data-interval="9245" data-old-width="900px" data-slides-min-width="250">
                                                                <div class="slides swiper-wrapper">
                                                                    <div class="swiper-slide" data-style="width:900px;">
                                                                        <div class="sc_testimonial_item" id="sc_testimonials_186_1">
                                                                            <div class="sc_testimonial_content">
                                                                                <p>
                                                                                    “Dog Park Days can be your “go to” book for any discipline. Whether you are a speech therapist (like myself), teacher or mother, your children will be learning while being engaged throughout.” 
                                                                                </p>
                                                                            </div>
                                                                            <div class="sc_testimonial_author">
                                                                                <span class="sc_testimonial_author_name">Olivia Stipanovich, MSP. CCC-SLP, <br> Creekside Elementary School New Bern, North Carolina
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="swiper-slide" data-style="width:900px;">
                                                                        <div class="sc_testimonial_item" id="sc_testimonials_186_1">
                                                                            <div class="sc_testimonial_content">
                                                                                <p>
                                                                                    I may have to buy another copy, both my girls want Dog Park Days! As a parent, I love the teaching tips in the back, that is exactly what my daughters are working on in school.”
                                                                                </p>
                                                                            </div>
                                                                            <div class="sc_testimonial_author">
                                                                                <span class="sc_testimonial_author_name">Kelly Stakely, mother of elementary students,<br> Bonita Springs, FLorida
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                            </div> -->
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
	<script type='text/javascript' src=" {% static 'js/vendor/jquery/jquery.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/jquery/jquery-migrate.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/custom/custom.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/essgrid/lightbox.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/essgrid/jquery.themepunch.tools.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/essgrid/jquery.themepunch.essential.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/photostack/modernizr.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/superfish.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/custom/jquery/core.utils.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/custom/jquery/core.init.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/custom/jquery/theme.init.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/mediaelement/mediaelement-and-player.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/custom/jquery/theme.shortcodes.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/custom/jquery/core.messages.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/grid.layout/grid.layout.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/swiper/swiper.min.js' %}" ></script>
	<script type='text/javascript' src=" {% static 'js/vendor/magnific/jquery.magnific-popup.min.js' %}" ></script>
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


{% endblock %}