{% block content %}
{% load static %}

<!DOCTYPE html>
<html class="scheme_original" lang="en-US">

<head>
	<title>Dog Park Days</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link property="stylesheet" rel='stylesheet' href="{% static 'js/vendor/essgrid/settings.css' %}" type='text/css' media='all'/>
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
	<link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" />
</head>

<body class="single single-product woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_above sidebar_hide wpb-js-composer vc_responsive" onload="myFunction()" style="margin:0;">
	<div id="loader"></div>
	<div id="myDiv">
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
							<h1 class="page_title no_breadcrumbs">Lessons</h1>
						</div>
					</div>
				</div>
				<div class="mar-tool-gin page_paddings_yes pb-0">
					<div class="content_wrap">
						<div class="content">
						{% for pdf in pdfuploads %}
							<!-- 1  -->
							<div class="e-book-pdf-tool e-book-pdf-tool1">
								<div class="sc_services sc_services_style_services-3 sc_services_type_icons" id="sc_services_025">
									<div class="sc_columns columns_wrap">
										<div class="column-1_2 column_padding_bottom">
											<img src="{% static 'images/book2.png' %}" class="">
										</div>
										<div class="column-1_2 column_padding_bottom">
											<div class="e-book-pdf-part">
												<h3 class="heading">{{ pdf.title }}</h3>
												<p>{{ pdf.description }}</p>
													<a class="sc_button sc_button_round sc_button_style_filled sc_button_size_large sc_button_color_1 large sc_button_hover_fade" href="{% static 'images/home/Verbs_Matter.pdf' %}">Download</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- 1 end  -->
						{% endfor %}
						</div>
					</div>
				</div>
				<!--  -->
				<!-- footer Start -->
				{% include 'footer.php' %}
				<!-- footer End -->
			</div>
		</div>
		<a href="#" class="scroll_to_top" title="Scroll to top"></a>
		<div class="custom_html_section"></div>
	</div>
	<script type='text/javascript' src="{% static 'js/vendor/jquery/jquery.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/jquery/jquery-migrate.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/custom.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/essgrid/lightbox.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/essgrid/jquery.themepunch.tools.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/essgrid/jquery.themepunch.essential.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/superfish.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/core.utils.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/core.init.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/theme.init.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/mediaelement/mediaelement-and-player.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/theme.shortcodes.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/custom/jquery/core.messages.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/grid.layout/grid.layout.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/swiper/swiper.min.js' %}"></script>
	<script type='text/javascript' src="{% static 'js/vendor/magnific/jquery.magnific-popup.min.js' %}"></script>
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