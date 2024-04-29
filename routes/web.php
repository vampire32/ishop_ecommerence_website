<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    $product= Product::all();
    return view('home',['products'=>$product]);
});
Route::get('/contact',function(){
    return view('contact');

});

Route::get('/register',[RegistrationController::class,'create']);
Route::post('/regsiter',[RegistrationController::class,'store']);

Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::delete('/logout',[SessionController::class,'destroy']);
Route::get('/product/{id}',function (){
   $getid= request()->id;
    $product=Product::find($getid);
  return view('singleproduct',['product'=>$product]);

});

Route::get('/cart', [CartController::class,'show']);
Route::post('/cart',[CartController::class,'store']);
Route::get('/checkout',[OrderController::class,'show']);
Route::post('/checkout',[OrderController::class,'store']);
Route::get('/product',[ProductController::class,'show']);
Route::post('/filters',[ProductController::class,'filter']);
Route::get('/admin',function (){
    return view('admin');
});
