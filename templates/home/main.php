<!DOCTYPE html>
{% load static %}
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{% static 'css/main.css' %}">

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


	<script type="text/javascript">
		var user = '{{request.user}}'

		function getToken(name) {
		    var cookieValue = null;
		    if (document.cookie && document.cookie !== '') {
		        var cookies = document.cookie.split(';');
		        for (var i = 0; i <= cookies.length; i++) {
		            var cookie = cookies[i].trim();
		            // Does this cookie string begin with the name we want?
		            if (cookie.substring(0, name.length + 1) === (name + '=')) {
		                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
		                break;
		            }
		        }
		    }
		    return cookieValue;
		}
		var csrftoken = getToken('csrftoken')

		function getCookie(name) {
		    // Split cookie string and get all individual name=value pairs in an array
		    var cookieArr = document.cookie.split(";");

		    // Loop through the array elements
		    for(var i = 0; i < cookieArr.length; i++) {
		        var cookiePair = cookieArr[i].split("=");

		        /* Removing whitespace at the beginning of the cookie name
		        and compare it with the given string */
		        if(name == cookiePair[0].trim()) {
		            // Decode the cookie value and return
		            return decodeURIComponent(cookiePair[1]);
		        }
		    }

		    // Return null if not found
		    return null;
		}
		var cart = JSON.parse(getCookie('cart'))

		if (cart == undefined){
			cart = {}
			console.log('Cart Created!', cart)
			document.cookie ='cart=' + JSON.stringify(cart) + ";domain=;path=/"
		}
		console.log('Cart:', cart)
	
	</script>

</head>
<body>
	
	{% include 'header.php' %}


	<div class="container">
		<br>
		{% block content %}


		{% endblock content %}
	</div>

	{% include 'footer.php' %}

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

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

	<script type="text/javascript" src="{% static 'js/cart.js' %}"></script>
</body>
</html>