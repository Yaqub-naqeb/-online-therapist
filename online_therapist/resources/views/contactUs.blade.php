@extends('layout')
@section('content')

<div class="bod">
    <link rel="stylesheet" href="{{asset('style/contact.css')}}">

    {{-- header --}}
   <div class="cont">
   <h1 class="h1">{{$title}}</h1>
   <p class="p">{{$p}}</p>
   </div>
   {{-- form --}}
   <form action="" class="form">
    <div class="cont_1">
        <p>FullName:</p>
        <input class="inp_1 inpts" type="text" placeholder="Enter your fullName here...">
    </div>

    <div class="cont_2 ">
        <p>
            Email:
        </p>
        <input class="inp_3 inpts" type="email" name="" id="" placeholder="Enter your email adress here...">

    </div>
    <div class="cont_2">
        <p>Detail:</p>
        <textarea class="inp_4 " name="" id="" cols="30" rows="10" placeholder="Enter your detail here..."></textarea>

    </div>
    <button class="btn">
        Submit
    </button>
   </form>
    
</div>
@endsection
