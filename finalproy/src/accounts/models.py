from __future__ import unicode_literals

from django.db import models

# Create your models here.

from django.conf import settings


class UserProfile(models.Model):

    user = models.OneToOneField(settings.AUTH_USER_MODEL)
    photo = models.ImageField(upload_to='profiles', blank=True, null=True)

    def __unicode__(self):
    	return self.user.username