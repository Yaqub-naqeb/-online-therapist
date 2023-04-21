@extends('layout')
@section('content')
    <div class="body">
        <link rel="stylesheet" href="{{asset('style/blog.css')}}">
        <div >
            <img class="image" src="{{Url('images/Blogimg.png')}}" alt="">
        </div>
        {{-- writing --}}
        <div class="writing">
    
            <article class="first ">
                <h1 class="h1">{{$blog["title"]}}</h1>
                <p class="p">{{$blog["desc"]}}</p>
            </article>
           
    
        </div>
    {{-- signup for blog --}}
    <div class="signup">
    <h2 class="h2">Sign up for The Healing blog</h2>
    <p class="p">A weekly, ad-free Blog that helps you stay in the know.</p>
    
  <x-subscribe></x-subscribe>
    
    </div>
    {{-- Recommend section --}}
    <div >
        <h4 class="h4">Recommended for you</h4>
        <div class="imgs">
            <img class="" src="{{Url('images/Group 126.png')}}" alt="">
            <img class="" src="{{Url('images/Group 128.png')}}" alt="">
    
        </div>
    </div>
    </div>
   



    @endsection
    
   