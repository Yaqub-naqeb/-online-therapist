@extends('layout')
   
@section('content')
<section class="container">
    <link rel="stylesheet" href="{{asset('style/home.css')}}">
    
    <div class="text-container">
        <h3>WE ARE HERE TO </h3>
        <h1>HELP</h1>
        <button><a href="/signup"> SIGN UP</a></button>
    </div>

    <div>
        <img src="{{Url('images/homesvg.svg')}}" alt="">
    </div>
</section>

<section class="home-section__text">

    <h2>Professional, licensed, and vetted therapists that you can trust</h2>
    <p>Tap into the world's largest network of licensed, accredited, and experienced therapists who can help you
        with a range of issues including depression, anxiety, relationships, trauma, grief, and more. with our
        therapists, you get the same professionalism and quality you would expect from an in-office therapist, but
        with the ability to communicate whenever and however you want.</p>

    <button><a href="/write"> ASK A Question</a></button>
</section>

<section class="home-section__blog">

    <h2>Recent BLOGs</h2>

    <div class="blog-container">
        <img class="img-blog" src="{{Url('images/test.png')}}" alt="">
        <img class="img-blog" src="{{Url('images/test.png')}}" alt="">
        <img class="img-blog" src="{{Url('images/test.png')}}" alt="">
        <img class="img-blog" src="{{Url('images/test.png')}}" alt="">
        <img class="img-blog" src="{{Url('images/test.png')}}" alt="">
    </div>
</section>
@endsection
    
