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
                    <h1 class="name">Yaqwb Naqib </h1>
                    <p class="exp">Software developer</p>
                    <div class="projects-con">
                        <span class="span">Other Projects</span> 
                        <a class="projects" href="https://link-plus.vercel.app/" target="_blank">Link Plus,</a> 
                        <a class="projects" href="https://avibooks.vercel.app/" target="_blank">Avi Books,</a> 

                        
                    </div>
                    <div class="btns">

                  <a class="link" href="https://yaqwb-dev.netlify.app/" target="_blank">Portfolio</a>
                  <a class="link" href="https://github.com/Yaqub-naqeb" target="_blank">Github</a>
                </div>
                </div>

                </div>
        
        
        {{-- Second Card --}}
        
                <div class="containar">
                    <div class="imcont">
                        <img src="{{asset('images/myimgnew.JPG')}}" class="image-about" alt="">
                
                    </div>
                {{-- writing --}}
                <div class="bottom ">
                    <h1 class="name">Abdulbari Qaisar</h1>
                    <p class="exp">Software developer</p>
                    <div class="projects-con">
                        <span class="span">Other Projects</span> 
                        <a target="_blank" class="projects" href="https://hitex.tech/">Hitex 2023,</a> 
                        <a target="_blank" class="projects" href="https://refubook-org.netlify.app/">Refubook ,</a> 
                        <a target="_blank" class="projects" href="https://wonder-booksss.netlify.app/book/:Sxss1kQxfP0C">Wonder Books ,</a> 
                    </div>
                   <div class="btns">
                    <a class="link" href="https://abdulbari.vercel.app/" target="_blank">Portfolio</a>
                    <a class="link" href="https://github.com/Abdulbariii" target="_blank">Github</a>
                   </div>
                </div>
                </div>
        
        
        </div>
        
    
    
     </div>
</section>


@endsection