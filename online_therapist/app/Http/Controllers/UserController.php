<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    //
    
    public function create(){
        return view('signUp');

    }

    public function store(Request $request){
        
          $formFileds = $request->validate([
                'name' =>['required'  , 'min:3'],
                'email' =>['required' , 'email' , Rule::unique('users' , 'email')] , 
                'password' =>'required|confirmed|min:6' , 
            ]);

            if($request->hasFile("image")){
                $formFileds["image"] = $request->file("image")->store("images" , "public");
            }
          $formFileds['password'] = bcrypt( $formFileds['password']);
          $user =  User::create($formFileds);
           
          auth()->login($user);
        
            return redirect('/')->with("message" , "Registerd successfully and logged in");
    }

    public function logout(Request $request){
        auth()->logout();
$request->session()->invalidate();
$request->session()->regenerate();
return redirect('/')->with("message" , "User is logout");

    }

    public function login(){
        return view('login');

    }

    public function authenticate(Request $request){
        
        $formFileds = $request->validate([
            'email' =>['required' , 'email' ] , 
            'password' =>'required' , 
        ]);

        if(auth()->attempt($formFileds)){
            $request->session()->regenerate();
            return redirect('/')->with("message" , "You're Logged in");
        } else {
            return back()->withErrors(['email' => "Invalid User"])->onlyInput('email');
        }
    }

  

}