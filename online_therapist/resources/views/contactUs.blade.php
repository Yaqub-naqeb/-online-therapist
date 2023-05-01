@extends('layout')
@section('content')

<div class="bod">
    <link rel="stylesheet" href="{{asset('style/contact.css')}}">

    {{-- header --}}
   <div class="cont">
   <h1 class="h1">SEND US YOUR REQUEST!</h1>
   <p class="p">Do you have a question, concern, idea, feedback, or problem?  If you need assistance, please fill out the form below and we'd be happy to help!</p>
   </div>
   {{-- form --}}
   <form method="POST" action="/contact" class="form">
    @csrf
    <div class="cont_1">
        <p>FullName:</p>
        <input class="inp_1 inpts" type="text" name="name" placeholder="Enter your fullName here...">
    </div>

    <div class="cont_2 ">
        <p>
            Email:
        </p>
        <input class="inp_3 inpts" type="email" name="email" id="" placeholder="Enter your email adress here...">

    </div>
    <div class="cont_2">
        <p>Detail:</p>
        <textarea class="inp_4 " name="desc" id="" cols="30" rows="10" placeholder="Enter your detail here..."></textarea>

    </div>
    <button type="submit" class="btn">
        Submit
    </button>
   </form>
    
</div>
@endsection
