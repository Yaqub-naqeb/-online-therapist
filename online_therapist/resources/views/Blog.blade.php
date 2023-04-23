@extends('layout')
@section('content')
    <div class="body">
        <link rel="stylesheet" href="{{asset('style/blog.css')}}">
        <div >
            <img class="image" src="{{$blog->image? asset('storage/' . $blog->image) : asset('images/Blogimg.png')}}" alt="">
          
        </div>
        {{-- writing --}}
        <div class="writing">
    
            <article class="first ">
                <h1 class="h1">{{$blog["title"]}}</h1>
                <p class="p">{{$blog["desc"]}}</p>
            </article>
            <button class="edit-btn" ><a href="/blogs/{{$blog->id}}/edit">Edit Blog</a> </button>
    
        </div>

        <form method="POST" action="/blogs/{{$blog["id"]}}">
            @csrf
            @method('DELETE')
            <button class="delete-btn"  type="submit">Delete</button>
        </form>
    {{-- signup for blog --}}
    <div class="signup">
    <h2 class="h2">Sign up for The Healing blog</h2>
    <p class="p">A weekly, ad-free Blog that helps you stay in the know.</p>
    
  <x-subscribe></x-subscribe>
    
    </div>
    {{-- Recommend section --}}
    <div >
        <h4 class="h4">Latest Blogs Recommended</h4>
        <div class="imgs">
           
                @foreach ($BlogRecent as $blog)
                 
                <x-blog-card :blog='$blog'></x-blog-card>
            @endforeach
           
        </div>
    </div>
    </div>
   



    @endsection
    
   