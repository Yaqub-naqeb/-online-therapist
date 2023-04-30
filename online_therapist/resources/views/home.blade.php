@extends('layout')
   
@section('content')
<section class="container">
    <link rel="stylesheet" href="{{asset('style/home.css')}}">
    
    <div class="text-container">
        <h3>WE ARE HERE TO </h3>
        <h1>HELP</h1>
        @auth
        <p>Live well and healthy with us</p>
        @else
        <button><a href="/signup"> SIGN UP</a></button>
        @endauth
       
    </div>

    <div>
        <img class="im" src="{{Url('images/homesvg.svg')}}" alt="">
    </div>
</section>

<section class="home-section__text">

    <h2 class="h2">Professional, licensed, and vetted therapists that you can trust</h2>
    <p class="p">Tap into the world's largest network of licensed, accredited, and experienced therapists who can help you
        with a range of issues including depression, anxiety, relationships, trauma, grief, and more. with our
        therapists, you get the same professionalism and quality you would expect from an in-office therapist, but
        with the ability to communicate whenever and however you want.</p>

    <button><a href="/write" class="ask"> ASK A Question</a></button>
</section>

<section class="home-section__blog">

    <h2 class="recent">Recent BLOGs</h2>

    <div class="blog-container">
        @foreach ($Blogs as $blog) 
        <x-blog-card :blog='$blog'></x-blog-card>
    @endforeach
    </div>
</section>
@endsection
    
