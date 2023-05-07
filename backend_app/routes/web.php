<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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
    return view('/test');
});

Route::get('posts/{post}', [\App\Http\Controllers\PostController::class,'show']);

Route::get('/register',[RegisterController::class,'create'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

Route::post('/logout',[LoginController::class,'destroy']);

Route::get('login',[LoginController::class,'create']);

Route::post('/login',[LoginController::class,'store']);

Route::get('/Product',[ProductController::class,'create']);

Route::post('/Product',[ProductController::class,'store']);

Route::get('/Home',[HomeController::class,'create']);




