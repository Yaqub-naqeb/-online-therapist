<?php

use App\Http\Controllers\AppointmentController;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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
    return view('home' , [
        "Blogs" => Blogs::latest()->paginate(4)
    ]);
});
Route::get('/signup',[UserController::class , 'create'])->middleware('guest');
Route::post('/',[UserController::class , 'store'])->middleware('guest');
Route::post('/logout',[UserController::class , 'logout'])->middleware('auth');


// login
Route::get('/login', [UserController::class , 'login'])->name('login')->middleware('guest');
Route::post('/login/authenticate', [UserController::class , 'authenticate'])->middleware('guest');

Route::get('/profile', [BlogsController::class , 'profile'])->middleware('auth');
// blogs
Route::get('/blogs', [BlogsController::class , 'index']);

Route::get('/blogs/{blog}', [BlogsController::class , 'show']);

Route::get('/write', [BlogsController::class , 'create'])->middleware('auth');

Route::post('/blogs', [BlogsController::class , 'store']);

Route::get('/appointment' , [AppointmentController::class , 'show']);
Route::post('/appointment' ,[AppointmentController::class , 'add']);
Route::get('/booked' , [AppointmentController::class , 'booked']);

Route::get('/blogs/{blog}/edit', [BlogsController::class , 'edit'])->middleware('auth');
Route::put('/blogs/{blog}', [BlogsController::class , 'update'])->middleware('auth');
Route::delete('/blogs/{blog}', [BlogsController::class , 'destroy'])->middleware('auth');

Route::get('/check-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Database connection successful! {{}}" ;
    } catch (\Exception $e) {
        return "Database connection failed: " . $e->getMessage();
    }
});
// After signup

// about
Route::get('/about', function () {
    return view('about',[
        'title'=>'WE ARE HEALING, NICE TO MEET YOU!',
        'meet'=>'Meet the Team!'

    ]);
});
// contact us
Route::get('/contact' , [ContactController::class , 'index' ]);
Route::post('/contact' , [ContactController::class , 'store' ]);

Route::post('/feeds' , [ContactController::class , 'feeds']);