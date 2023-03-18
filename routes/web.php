<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/post/{id?}', [DetailController::class, 'detailPost']);

Route::get('/forgot-password', [UserController::class, 'sendMail']);



Route::post('login', [UserController::class, 'login']);


Route::get('login', function ()
{
    $user = Auth::check();
    if($user){
        return  redirect()->back();
    }else{
        return view('login/login');
    }
})->name('login');

Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::get('/signup', function ()
{
    if(Auth::user()){
        return  redirect()->back();
    }else{
        return view('signup/signup');
    }
});


Route::get('/logout', [UserController::class, 'logout']);


Route::get('/', [HomeController::class, 'index'])->name('home');
