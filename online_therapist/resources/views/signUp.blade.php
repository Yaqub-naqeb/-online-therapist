
@extends('layout')
@section('content')
<div class="con">
    <link rel="stylesheet" href="{{asset('style/signup.css')}}">
    <div>

        <img class="img" src="{{Url('images/SignupImage.png')}}" alt="">
    </div>
    <div class="rightPart">

        <h1 class="sign-up-title">Sign Up</h1>

        <form method="POST" action="/" class="form" enctype="multipart/form-data">
            @csrf
            {{-- first name and last name  --}}
            
                <input type="text" name="name" id="" class="input" placeholder="Name">
               @error('name')
               <span class="error">{{$message}}</span>
               @enderror
            

            <input type="email" class="input" name="email" id="" placeholder="Your Email">
            @error('email')
            <span class="error">{{$message}}</span>
            @enderror
            {{-- password and confirm password --}}
            <div class="pass-con">
                <input type="password" value="{{old('password')}}" name="password" class="input" id="" placeholder="Password">
               
                <input type="password" name="password_confirmation" class="input" id="" value="{{old('password_confirmation')}}" placeholder="Confirm Password">
               
            </div>
            @error('password')
            <span class="error">{{$message}}</span>
            @enderror
            @error('password-confirmation')
            <span class="error">{{$message}}</span>
            @enderror
            <label  for="">
                <span>Profile picture</span>
                <input type="file" name="image" class="input" id="" >

            </label>
          

            {{-- buttons --}}
            <div class="btns">
                <button type="button" style="transform: scale(0.8)" name="login-page" class="login-btn">
                  <a  href="/login">Login</a>  
                </button>
                <button type="submit" style="transform: scale(1.2)" class="sign-up-btn">Signup</button>
            </div>


        </form>
    </div>
</div>
@endsection
  



