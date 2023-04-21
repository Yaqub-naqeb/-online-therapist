@extends('layout')
@section('content')

<section>
    <link rel="stylesheet" href="{{asset('style/about.css')}}">
    <div class="bd">
      
      
    
        <div class="wrap">
            <h1 class="title">{{$title}}</h1>
            <p class="meet">{{$meet}}</p>
        
          </div>
            <div class="allCards">
        
        {{-- first Card --}}
                <div class="containar">
                    <div class="imcont">
                        <img src="{{asset('images/Yaqwb.JPG')}}" class="image-about" alt="">
                
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
                        <img src="{{asset('images/myimg.JPG')}}" class="image-about" alt="">
                
                    </div>
                {{-- writing --}}
                <div class="bottom ">
                    <p class="name">Abdulbari Qaisar</p>
                    <p class="exp">Software developer</p>
                </div>
                </div>
        
        
        </div>
        
    
    
     </div>
</section>


@endsection