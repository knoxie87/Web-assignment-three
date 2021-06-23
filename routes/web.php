<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValconoeController;
use App\Http\Controllers\UserController;
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
Route::resource('users', UserController::class);
Route::Post('loginuser', [UserAuth::class, 'userLogin']);
Route::Post('register', [UserAuth::class, 'userRegister']);

Route::view("register",'register');

Route::get('login',function() {
    if(session()->has('user')){
        return redirect('/users');
    }else{
        return view('/login');
    }
 
});

Route::get('/logout',function() {
    if(session()->has('user'))
    {
        session()->pull('user');
        return redirect('/login');
    }else{
        return redirect('/login');
    }
});