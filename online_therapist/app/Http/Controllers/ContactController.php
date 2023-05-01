<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Newsfeeds;
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

  
    public function feeds(Request $request){
        $formFileds = $request ->validate([
            
            'email' =>['required' , 'email' ], 
        
        ]);
        Newsfeeds::create($formFileds);
        return back()->with("message" , "Subscribed successfully");

    }

    

   
    
}