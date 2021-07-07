{% block content %} 
{% load static %}	

<footer class="contacts_wrap footer-color">
	<div class="">
		<div class="content_wrap">
			<div class="sc_columns columns_wrap">
				<div class="column-1_3 column_padding_bottom">
					<div>
						<h3 class="text-white ">Contact info</h3>
						<ul>
							<li> <i class="fa fa-send"></i>  <a href="mailto:gwencatt@gmail.com">gwencatt@gmail.com</a>
							</li>
						</ul>
						<div class="content_wrap">
							<div class="sc_socials sc_socials_type_images sc_socials_shape_square sc_socials_size_large">
								<div class="sc_socials_item">
									<a class="social_icons social_twitter" href="https://twitter.com/CattGwen" target="_blank"> <span class="sc_socials_hover"></span>
									</a>
								</div>
								<div class="sc_socials_item">
									<a class="social_icons social_facebook" href="https://www.instagram.com/ninelivespublishing/" target="_blank"> <span class="sc_socials_hover"></span>
									</a>
								</div>
								<!-- <div class="sc_socials_item">
									<a class="social_icons social_vimeo" href="#" target="_blank"> <span class="sc_socials_hover"></span>
									</a>
								</div> -->
								<div class="sc_socials_item">
									<a class="social_icons social_pinterest" href="https://in.pinterest.com/gcatt3675/" target="_blank"> <span class="sc_socials_hover"></span>
									</a>
								</div>
								<div class="sc_socials_item">
									<a class="social_icons social_linkedin" href="#" target="_blank"> <span class="sc_socials_hover"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--  -->
				<div class="column-1_3 column_padding_bottom">
                    <div class="logo">
						<img alt="Dog Park Days" class="logo_footer"  src="{% static 'images/logo.png' %}">
                    </div>
                    </div>
				<!--  -->
				<div class="column-1_3 column_padding_bottom">
					<h3 class="text-white ">Information</h3>
					<ul>
						<li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  <a href="{% url 'about' %}">About Us</a>
						</li>
						<li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  <a href="{% url 'delivery' %}">Delivery Details</a>
						</li>
						<li><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  <a href="{% url 'secure' %}">Secure Payment</a>
						</li>
					</ul>
				</div>
				<!--  -->
			</div>
		</div>
	</div>
</footer>
<div class="copyright_wrap copyright_style_text scheme_original">
	<div class="copyright_wrap_inner">
		<div class="content_wrap">
			<div class="copyright_text">
				<figure class="sc_image alignright sc_image_shape_square">
					<img alt="" src="{% static 'images/Visa.png' %}">
				</figure>
				<p>©2020 Gwen Catt. ALL RIGHTS RESERVED. <br />Designed & Developed By - <a href="https://numeroeins.com/" target="_blank">NumeroEins ♥</a></p>
			</div>
		</div>
	</div>
</div>


{% endblock %}