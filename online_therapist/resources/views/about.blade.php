@extends('layout')
@section('content')
<div class="bd">
    <link rel="stylesheet" href="{{asset('style/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <div class="wrap">
        <h1 class="title">{{$title}}</h1>
        <p class="meet">{{$meet}}</p>
    
      </div>
        <div class="allCards">
    
    {{-- first Card --}}
            <div class="containar">
                <div class="imcont">
                    <img src="{{asset('images/Yaqwb.JPG')}}" class="image" alt="">
            
                </div>
            {{-- writing --}}
            <div class="bottom ">
                <p class="name">Yaqwb Naqib </p>
                <p class="exp">Software developer</p>
            </div>
            </div>
    
    
    {{-- Second Card --}}
    
            <div class="containar">
                <div class="imcont">
                    <img src="{{asset('images/myimg.JPG')}}" class="image" alt="">
            
                </div>
            {{-- writing --}}
            <div class="bottom ">
                <p class="name">Abdulbari Qaisar</p>
                <p class="exp">Software developer</p>
            </div>
            </div>
    
    
    </div>
    


 </div>

@endsection
 