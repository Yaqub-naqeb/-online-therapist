<?php

use App\Models\Blogs;
use Illuminate\Support\Facades\DB;
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
        "Blogs" => Blogs::all()
    ]);
});

Route::get('/blog/{id}', function ($id) {
    $blog =  Blogs::find($id);
    if($blog) {
        return view('blog',[
            "blog" =>$blog
        ]);
    } else{
        abort("404");
    }
   
});

Route::get('/check-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Database connection successful! {{}}" ;
    } catch (\Exception $e) {
        return "Database connection failed: " . $e->getMessage();
    }
});
// After signup
Route::get('/aftersignup', function () {
    return view('aftersignup',[
        
    ]);
});