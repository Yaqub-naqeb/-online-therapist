
@extends('layout')

@section('content')
<section class="appointment">
    
    <link rel="stylesheet" href="{{asset('style/appointment.css')}}">
    <div>
        <h1>Meet our doctors</h1>
        <p>Important Note: All our doctors avalible from sunday to Thursday
            at the evaning in our location Koya Hospital</p>
     
    </div>

    <div class="doctor-con">
        @foreach ($doctors as $doctor)
            <div class="doctor-card">
                <img class="doctor-img" src="{{Url('images/doctorsvg.svg')}}" alt="">
                <div class="doctor-info">
                    <h1 class="doctor-name">{{$doctor["name"]}}</h1>
                    <p class="doctor-specialty">{{$doctor["specialty"]}}</p>
                    <p class="doctor-bio">{{$doctor["bio"]}}</p>

                    <form class="doctor-form" method="POST" action="/appointment">
                        @csrf
                       
                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                        <input type="hidden" name="doctor_id" value="{{ $doctor['id'] }}">
                        <input class="doctor-input" name="description" placeholder="describe your problem" type="text">
                        <input class="doctor-input" name="appointment_time" placeholder="describe your problem" type="date">
                          @error('appointment_time')
    <p class="error-message">{{ $message }}</p>
@enderror
                        <button class="appoint-btn" type="submit">Appoint</button>
                    </form>
                </div>
               
            </div>
        @endforeach
    </div>

    
   
</section>
@endsection
