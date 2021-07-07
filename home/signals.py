from django.db.models.signals import post_save, pre_delete
from django.contrib.auth.models import User
from django.contrib.auth.models import Group
from django.dispatch import receiver

from .models import Customer


@receiver(post_save, sender=User) 
def customer_profile(sender, instance, created, **kwargs):
    if created:

        Customer.objects.create(
            user=instance,
            name=instance.username,
            email=instance.email,
            )
 

post_save.connect(customer_profile, sender=User)

@receiver(post_save, sender=User) 
def customer_save(sender, instance, **kwargs):
        instance.customer.save()
        post_save.connect(customer_profile, sender=User)
