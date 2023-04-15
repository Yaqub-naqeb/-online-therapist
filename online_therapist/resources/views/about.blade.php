<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/about.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body >
 <div class="bd">


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
                <p class="exp">FrontEnd Developer</p>
            </div>
            </div>
    
    
    {{-- Second Card --}}
    
            <div class="containar">
                <div class="imcont">
                    <img src="{{asset('images/Yaqwb.JPG')}}" class="image" alt="">
            
                </div>
            {{-- writing --}}
            <div class="bottom ">
                <p class="name">Yaqwb Naqib </p>
                <p class="exp">FrontEnd Developer</p>
            </div>
            </div>
    
    
    </div>
    


 </div>
</body>
</html>