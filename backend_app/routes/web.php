<?php

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
    $id = request('id');
    return view('test',['id'=>$id]);
});


Route::get('posts/{post}', [\App\Http\Controllers\PostController::class,'show']);

Route::get('/register',[RegisterController::class,'create']);

Route::post('/register',[RegisterController::class,'store']);


