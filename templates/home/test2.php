{% block content %} 
{% load static %}	

{{ shipping.customer }}
{{ shipping.order }}
{{ shipping.address }}
{{ shipping.city }}
{{ shipping.state }}
{{ shipping.zipcode }}
{{ shipping.date_added }}

{% endblock %}