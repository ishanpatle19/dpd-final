{% block content %} 
{% load static %}	
<!DOCTYPE HTML>
<header class="top_panel_wrap top_panel_style_4 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_4 top_panel_position_above">
        <div class="top_panel_top">
            <div class="content_wrap clearfix">
                <div class="top_panel_top_contact_area">
                    Contact us on
                    <a href="mailto: gwencatt@gmail.com"> gwencatt@gmail.com</a>
                </div>
                <div class="top_panel_top_user_area">
                    {% if user.is_authenticated %}
                        <h4 style="text-align:center; text-transform: capitalize; margin-top:5px; margin-left:15px">Welcome, {{request.user}}</h4>
                    {% else %}
                        <h4 style="text-align:center; text-transform: capitalize; margin-top:5px; margin-left:20px">Welcome to Dog Park Days</h4>
                    {% endif %}
                </div>
                <div class="top_panel_top_user_area">
                    <ul class="menu_user_nav" id="menu_user">
                        <li class="menu_user_login">
                        {% if user.is_authenticated %}
                            <a class="popup_link popup_login_link icon-lock29 inited" href="{% url 'logoutuser' %}">Logout</a>
                        {% else %}
                            <a class="popup_link popup_login_link icon-lock29 inited" href="{% url 'loginuser' %}">Login</a>
                        {% endif %}
                        </li>
                        <li class="menu_user_cart">                                    
                            <a href="{% url 'cart' %}" class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
                                <span class="contact_icon icon-basket"></span>
                                <span class="contact_label contact_cart_label">Your cart</span>
                                <span class="contact_cart_totals">
                                    <span>{{ cartItems }} Item{{cartItems|pluralize}}</span>
                                    </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="columns_wrap">
                    <div class="contact_logo column-1_4">
                        <div class="logo">
                            <a href="{% url 'index' %}">
                                    <img alt="Dog Park Days" class="logo_main" src="{% static 'images/logo.png' %}" width="150px">
                                <img alt="Dog Park Days" class="logo_fixed" src="{% static 'images/logo.png' %}" width="150px">
                            </a>
                        </div>
                    </div>
                    <div class="menu_main_wrap column-3_4">
                        
                        <nav class="menu_main_nav_area menu_hover_fade">
                            <ul id="menu_main" class="menu_main_nav">
                                <li class="menu-item"><a href="{% url 'index' %}"><span>Home</span></a></li>
                                <li class="menu-item"><a href="{% url 'about' %}"><span>About Us</span></a></li>
                                <li class="menu-item"><a href="{% url 'shop' %}"><span>Shop</span></a></li>
                                <li class="menu-item menu-item-has-children"><a href="#"><span>More</span></a>
                                    <ul class="sub-menu">
                                        
                                <li class="menu-item"><a href="{% url 'orders' %}"><span>My Orders</span></a></li>
                                        <li class="menu-item"><a href="{% url 'contacts' %}"><span>Contact Us</span></a></li>
                                        <li class="menu-item"><a href="{% url 'lessons' %}"><span>More Lessons</span></a></li>
                                    </ul>
                                    </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="header_mobile">
        <div class="content_wrap">
            <div class="menu_button icon-menu"></div>
            <div class="logo">
                <a href="{% url 'index' %}">
                    Dog Park Days
                </a>
            </div>
            <div class="menu_main_cart top_panel_icon">
                <a href="{% url 'cart' %}" class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
                    <span class="contact_icon icon-basket"></span>
                    <span class="contact_label contact_cart_label">Your cart</span>
                    <span class="contact_cart_totals">
                        <span class="cart_items">{{ cartItems }} Item{{cartItems|pluralize}}</span>
                    </span>
                </a>
                <ul class="widget_area sidebar_cart sidebar">
                    <li> 
                        <div class="widget woocommerce widget_shopping_cart">
                            <div class="hide_cart_widget_if_empty">
                                <div class="widget_shopping_cart_content">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="side_wrap">
            <div class="close">
                Close
            </div>
            <div class="panel_top">
                <nav class="menu_main_nav_area">
                    <ul id="menu_mobile" class="menu_main_nav">
                        <li class="menu-item"><a href="{% url 'index' %}"><span>Home</span></a></li>
                        <li class="menu-item"><a href="{% url 'about' %}"><span>About Us</span></a></li>
                        
                        <li class="menu-item"><a href="{% url 'shop' %}"><span>Shop</span></a></li>
                        <li class="menu-item menu-item-has-children"><a href="#"><span>More</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{% url 'orders' %}"><span>My Orders</span></a></li>
                            <li class="menu-item"><a href="{% url 'contacts' %}"><span>Contact Us</span></a></li>
                                <li class="menu-item"><a href="{% url 'lessons' %}"><span>Lessons</span></a></li>
                            </ul>
                            </li>
                    </ul>
                </nav>
                <div class="login">
                    <a href="{% url 'loginuser' %}" class="popup_link popup_login_link icon-user">Login</a>
                </div>
            </div>
            <div class="panel_bottom"></div>
        </div>
        <div class="mask"></div>
    </div>
				<!-- header end -->
    <script type='text/javascript' src=" {% static 'js/cart.js' %}"></script>
    <script>
    var user = '{{request.user}}'
</script>
{% endblock %}