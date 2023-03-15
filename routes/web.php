<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
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

Route::get('/post/{id?}', [DetailController::class, 'detailPost']);

Route::get('/forgot-password', [UserController::class, 'sendMail']);

Route::post('/login', [UserController::class, 'login']);


Route::get('/login', function ()
{
    return view('login/login');
});

Route::post('/signup', [UserController::class, 'signup'])->name('signup');

Route::get('/signup', function ()
{
    return view('signup/signup');
});


Route::get('/test', [UserController::class, 'test']);
Route::get('/test1', [UserController::class, 'test1']);


Route::get('/', [HomeController::class, 'index'])->name('home');
