<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValconoeController;
use App\Http\Controllers\UserAuth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/valconoes');
});

Route::resource('valconoes', ValconoeController::class);

Route::post('user',[UserAuth::class,'userLogin']);

Route::post('register',[UserAuth::class,'userregister']);


Route::view("login",'login');

Route::view("register",'register');