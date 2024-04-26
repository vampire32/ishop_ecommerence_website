<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('home');
});
Route::get('/contact',function(){
    return view('contact');

});

Route::get('/register',[RegistrationController::class,'create']);
Route::post('/regsiter',[RegistrationController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);

