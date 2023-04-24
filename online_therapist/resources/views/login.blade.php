
@extends('layout')
@section('content')
<div class="con">
    <link rel="stylesheet" href="{{asset('style/signup.css')}}">
    <div>
        <img src="{{Url('images/loginImage.png')}}" alt="">
    </div>
    <div class="rightPart">

        <h1 class="sign-up-title">Login</h1>

        <form method="POST" action="/login/authenticate" class="form" >
            @csrf
           
               
            <input type="email" class="input" name="email" id="" placeholder="Your Email">
            @error('email')
            <span class="error">{{$message}}</span>
            @enderror
                <input type="password" value="{{old('password')}}" name="password" class="input" id="" placeholder="Password">
            @error('password')
            <span class="error">{{$message}}</span>
            @enderror

          
            <div class="btns">
                <button type="button" name="signup-page" class="login-btn">
                  <a href="/signup">Signup</a>  
                </button>
                <button type="submit" class="sign-up-btn">Login</button>
            </div>


        </form>
    </div>
</div>
@endsection
  



