<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/login&Signup.css')}}">
</head>
<body class="Loginbody">
    
{{-- left part --}}
<div>

    <img src="{{Url('images/loginImage.png')}}" alt="">
    </div>
    
    {{-- Right part --}}
    <div class="rightPart">
    
        <h1 class="sign-up-title">{{$title}}</h1>
        
    <form action="" class="loginForm">
      
        
        <input type="email" class="fullInp"  name="" id="" placeholder="Your Email">
        <input type="password" class="fullInp" name="" id="" placeholder="Password">
      
        
        
        {{-- buttons --}}
        <div class="btns">
            <button class="login-btn">Login</button>
            <button class="sign-up-btn">Signup</button>
        </div>
        
        
        </form>
    </div>
    
</body>
</html>
