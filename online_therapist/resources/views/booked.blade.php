@extends('layout')

@section('content')
    
<section class="booked-con">
    <link rel="stylesheet" href="{{asset('style/booked.css')}}">
    
        <img class="booked-img" src="{{Url('images/booked.svg')}}" alt="">
    
        <div class="booked-text__con">
            <h1 class="booked-title">You have successfully booked your appointment with {{ $appointment->doctor->name }}</h1>
            <p class="booked-date">Your appointment is scheduled for the evening {{ $appointment->appointment_time}}</p>
        </div>
   
   
</section>
@endsection