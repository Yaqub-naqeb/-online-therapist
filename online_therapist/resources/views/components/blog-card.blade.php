@props(['blog'])

<div class="card">
  <link rel="stylesheet" href="{{asset('style/blogs.css')}}">
  <img  class="card-img" src="{{$blog->image? asset('storage/' . $blog->image) : asset('images/Blogimg.png')}}" alt="" srcset="">
<div class="card-con-text">
    <h1 class="card-title">{{$blog["title"]}}</h1>
    <a class="card-read" href="/blog/{{$blog["id"]}}">Read</a>
</div>
       
</div>