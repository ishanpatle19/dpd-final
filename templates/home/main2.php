{% load static %}


<!DOCTYPE html>
<html>
<head>
	<title>Dog Park Day</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3' type='text/css' media='all' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" />
</head>
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