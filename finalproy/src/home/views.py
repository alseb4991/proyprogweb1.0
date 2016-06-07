from django.shortcuts import render

# Create your views here.

from django.utils import timezone


def index_view(request):
	context = {
	'ahora': timezone.now()
	}
	return render(request, 'home/index.html', context)