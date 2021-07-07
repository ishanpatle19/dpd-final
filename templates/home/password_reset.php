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
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you used to sign into Dog Park Days</p>
                        <form method = "POST">
                            {% csrf_token %}
                            {{form}}
                            <div class="form-button full-width" style="text-align:center;">
                                <input type="Submit" style="text-align:center;" class=" ibtn form-button">
                            </div>
                        </form>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{% static 'js/jquery.min.js' %}"></script>
<script src="{% static 'js/popper.min.js' %}"></script>
<script src="{% static 'js/bootstrap.min.js' %}"></script>
<script src="{% static 'js/main.js' %}"></script>
</body>
</html>


{% endblock %}