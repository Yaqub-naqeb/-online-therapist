<?php


use App\Models\Blogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

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
Route::get('/blogs', [BlogsController::class , 'index']);

Route::get('/blog/{id}', [BlogsController::class , 'show' 
]);

Route::get('/write', [BlogsController::class , 'create']);

Route::post('/blogs', [BlogsController::class , 'store']);


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
// about
Route::get('/about', function () {
    return view('about',[
        'title'=>'WE ARE HEALING, NICE TO MEET YOU!',
        'meet'=>'Meet the Team!'

    ]);
});