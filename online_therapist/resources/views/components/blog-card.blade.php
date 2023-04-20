@props(['blog'])

<div class="card">
  <img  class="card-img" src="{{asset('images/Blogimg.png')}}" alt="" srcset="">
<div class="card-con-text">
    <h1 class="card-title">{{$blog["title"]}}</h1>
    <a class="card-read" href="/blog/{{$blog["id"]}}">Read</a>
</div>
       
</div>