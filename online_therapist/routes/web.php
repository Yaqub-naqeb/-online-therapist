<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/signup', function () {
    return view('signup',[
        'title'=>'signup Now'
    ]);
});
// login
Route::get('/login', function () {
    return view('login',[
        'title'=>'Login'
    ]);
});
// blogs
Route::get('/blogs', function () {
    return view('blogs',[
        
    ]);
});
// After signup
Route::get('/aftersignup', function () {
    return view('aftersignup',[
        
    ]);
});
// about
Route::get('/about', function () {
    return view('about',[
        'title'=>'WE ARE HEALING, NICE TO MEET YOU!',
        'meet'=>'Meet the Team!'

    ]);
});


