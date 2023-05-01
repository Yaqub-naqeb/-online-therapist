<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

use App\Models\Appointment;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
    //
  
    public function show(){
        $doctors = Doctor::all();

       

        $appointment = Appointment::where('user_id', auth()->id())->first();

        if ($appointment) {
            // User has an appointment, redirect to booked view
            return view('booked', ['appointment' => $appointment]);
        } else {
            // User doesn't have an appointment, show appointment form
            return view('appointment', ['doctors' => $doctors]);
        }
    }

    public function add(Request $request){
         
      
      
        $formFileds = $request ->validate([
           
            
            'appointment_time' =>'required|date|after_or_equal:today'
            
        ]);
        $formFileds['user_id'] = auth()->id();
       
        $formFileds['doctor_id'] = $request->input('doctor_id');
        $formFileds['description'] = $request->input('description');

        
        Appointment::create($formFileds);
    
        return redirect('/booked')->with("message" , "Appointment booked successfully!");


    }

    public function booked(){
        $user = auth()->user();
        $appointment = Appointment::where('user_id', $user->id)
        ->whereHas('doctor', function ($query) {
            $query->select('id', 'name');
        })
        ->with(['doctor' => function ($query) {
            $query->select('id', 'name');
        }])
        ->first();
        
                return view('booked' , ['appointment' => $appointment] );
    }
}