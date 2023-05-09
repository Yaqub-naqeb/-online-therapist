
@extends('layout')
@section('content')
<div class="con">

    <link rel="stylesheet" href="{{asset('style/profile.css')}}">

    {{--  --}}
    <div >
        <img class="profile-image" src="{{$user->image? asset('storage/' . $user->image) : asset('images/Blogimg.png')}}" alt="">
    </div>
    <div class="profile-text__con">
        <h1 class="profile-title">Profile info</h1>
    <div class="con-text">
        <h3 >Username: </h3>
        <span class="username">{{$user->name}}</span>
    </div>
      
    <div class="con-text">
        <h3 >Email: </h3>
        <span class="email">{{$user->email}}</span>
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
  

