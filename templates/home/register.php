{% block content %} 
{% load static %}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{% static 'images/cropped-big_favicon-32x32.png' %}" />
    <title>Dog Park Days </title>
    <link rel="stylesheet" type="text/css" href="{% static 'css/bootstrap.min.css' %}">
    <link rel="stylesheet" type="text/css" href="{% static 'css/iofrm-style.css' %}">
    <link rel="stylesheet" type="text/css" href="{% static 'css/iofrm-theme16.css' %}">
</head>`
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
                        <h3 style="text-align:center;">Register new account</h3></br>
                            <form method="POST" action="">
                                {% csrf_token %}
                                {{form.username}}
                                {{form.email}}
                                {{form.password1}}
                                {{form.password2}}

                                {{form.errors}}
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" type="text" name="username" placeholder="Username" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" type="email" name="email" placeholder="Email" required>                                     
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" type="password" name="password1" placeholder="Password" required>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" type="password" name="password2" placeholder="Confirm Password" required>
                                </div> -->
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-button" style="text-align:center;">
                                        <button id="submit" type="submit" class="ibtn">Register</button>
                                    </div>
                                </div>
                            </form>
                        </br>
                        <div class="page-links" style="text-align:center;" >
                            <a href="{% url 'loginuser' %}">Login to account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{% static 'js/jquery.min.js' %}"></script>
<script src="{% static 'js/popper.min.js' %}"></script>
<script src="{% static 'js/bootstrap.min.js' %}"></script>
<script>
    var form_fields = document.getElementsByTagName('input')
    form_fields[1].placeholder='Username';
    form_fields[2].placeholder='Email';
    form_fields[3].placeholder='Enter password';
    form_fields[4].placeholder='Re-enter Password';


    for (var field in form_fields){	
        form_fields[field].className += 'form-control'
    }
</script>
</body>
</html>


{% endblock %}