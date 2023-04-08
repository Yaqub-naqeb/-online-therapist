<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/signup', function () {
//     return view('signup',[
//         'title'=>'signup Now'
//     ]);
// });
// // login
// Route::get('/login', function () {
//     return view('login',[
//         'title'=>'Login'
//     ]);
// });
// // blogs
// Route::get('/blogs', function () {
//     return view('blogs',[
        
//     ]);
// });
// // After signup
// Route::get('/aftersignup', function () {
//     return view('aftersignup',[
        
//     ]);
// });