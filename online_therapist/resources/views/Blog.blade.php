@extends('layout')



@section('content')
    <div class="body">
        <link rel="stylesheet" href="{{asset('style/blog.css')}}">
        <div >
            <img class="image" src="{{Url('images/Rectangle 45.png')}}" alt="">
        </div>
        {{-- writing --}}
        <div class="writing">
    
            <article class="first ">
                <h1 class="h1">{{$blog["title"]}}</h1>
                <p class="p">{{$blog["title"]}}</p>
            </article>
           
    
        </div>
    {{-- signup for blog --}}
    <div class="signup">
    <h2 class="h2">Sign up for The Healing blog</h2>
    <p class="p">A weekly, ad-free Blog that helps you stay in the know.</p>
    
    <div class="inpImg">
    
        <input class="inp" type="text" name="" id="" placeholder="Enter your e-mail">
    
        <img class="send" src="{{Url('images/Send.png')}}" alt="">
    
    </div>
    
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
    
   