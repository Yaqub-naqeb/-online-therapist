<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
 
    public function index()
    {
        
        return view('contactUs');
    }

   
    
    public function store(Request $request)
    {
        $formFileds = $request ->validate([
            'name' =>'required' ,
            'email' =>['required' , 'email' ], 
            'desc'=> 'required'
        
        ]);

        Contact::create($formFileds);
        return redirect('/')->with("message" , "Email is sent successfully");

        


        
    }

  
    public function show(string $id)
    {

    }

   
    
}