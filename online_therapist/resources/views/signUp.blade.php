<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/cssFiles.css')}}">
</head>

<body>
    @include('navbar')
    @yield('content')
    {{-- left part --}}

    <div class="con">
        <div>

            <img src="{{Url('images/SignupImage.png')}}" alt="">
        </div>
        <div class="rightPart">

            <h1 class="sign-up-title">{{$title}}</h1>

            <form action="" class="form">
                {{-- first name and last name  --}}
                <div class="firstName__LastName_input">
                    <input type="text" name="" id="" class="inp" placeholder="First Name">
                    <input type="text" name="" id="" class="inp" placeholder="Last Name">
                </div>

                <input type="email" class="fullInp" name="" id="" placeholder="Your Email">
                <input type="email" class="fullInp" name="" id="" placeholder="Confirm Email">
                {{-- password and confirm password --}}
                <div class="firstName__LastName_input">
                    <input type="password" name="" class="inp" id="" placeholder="Password">
                    <input type="password" name="" class="inp" id="" placeholder="Confirm Password">
                </div>


                {{-- buttons --}}
                <div class="btns">
                    <button class="login-btn">Login</button>
                    <button class="sign-up-btn">Signup</button>
                </div>


            </form>
        </div>
    </div>

    {{-- Right part --}}


</body>

</html>