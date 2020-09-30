from django.shortcuts import render,redirect,get_object_or_404

from .models import Post, PostImage

from django.contrib import messages


from django.http import HttpResponse,request

from django_filters import filters



from django.db.models import Q








def search(request):
    query=request.GET.get('q')
    posts=Post.objects.filter(title__icontains=query)
    context={'posts': posts}
    return render(request,'search.html',context)


def gen_view(request):
    posts = Post.objects.all()
    return render(request, 'blog.html', {'posts': posts})


def house_view(request, id):
    post = get_object_or_404(Post, id=id)
    photos = PostImage.objects.filter(post=post)
    return render(request, 'detail.html', {
        'post': post,
        'photos': photos
    })

# Create your views here.
