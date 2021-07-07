{% load static %}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" />
    <title>Dog Park Days </title>
    <link rel="stylesheet" type="text/css" href="{% static 'css/bootstrap.min.css' %}">
    <link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3' type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" href="{% static 'css/iofrm-style.css' %}">
    <link rel="stylesheet" type="text/css" href="{% static 'css/iofrm-theme16.css' %}">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="{% url 'index' %}">
                <div class="logo">
                    <img class="logo-size" src="{% static 'images/logo.png' %}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{% static 'images/graphic3.svg' %}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="text-align:center;">Login to account</h3></br>
                            {% for message in messages %}
                                <p id="messages" style="color:red; text-align:center; ">{{ message }}</p>   
                            {% endfor %}

                            <form method="POST" action="">
                                {% csrf_token %}
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-button" style="text-align:center;">
                                            <button id="submit" type="submit" class="ibtn">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <div class="page-links" style="text-align:center;"></br>
                            <a href="{% url 'reset_password' %}">Forgot password?</a></br>or</br> 
                            <a href="{% url 'registeruser' %}">Register new account</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<script src="{% static 'js/jquery.min.js' %}"></script>
<script src="{% static 'js/popper.min.js' %}"></script>
<script src="{% static 'js/bootstrap.min.js' %}"></script>
</body>
</html>





