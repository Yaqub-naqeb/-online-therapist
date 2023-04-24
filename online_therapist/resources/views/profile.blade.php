
@extends('layout')
@section('content')
<div class="con">

    <link rel="stylesheet" href="{{asset('style/profile.css')}}">

    
    <div >
        <img class="profile-image" src="{{$user->image? asset('storage/' . $user->image) : asset('images/Blogimg.png')}}" alt="">
    </div>
    <div class="profile-text__con">
        <h1 class="profile-title">Profile info</h1>
    <div class="con-text">
        <span>Username</span>
        <h3 class="username">{{$user->name}}</h3>
    </div>
      
    <div class="con-text">
        <span>Email</span>
        <h3 class="email">{{$user->email}}</h3>
    </div>

       
       
    <span>All your blogs</span>
        <div class="blog-card__user">
          
        @foreach ($user_blogs as $blog)
        <x-blog-card :blog='$blog'></x-blog-card>
        @endforeach
         
        </div>
    </div>
    
</div>
    
   
@endsection
  

