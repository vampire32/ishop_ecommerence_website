<?php

use App\Http\Controllers\OrderlistingController;
use App\Http\Controllers\ProductListingController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $product= Product::all();
    return view('home',['products'=>$product]);
});
Route::get('/contact',function(){
    return view('contact');

});

Route::get('/register',[RegistrationController::class,'create'])->middleware('guest');
Route::post('/regsiter',[RegistrationController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);
Route::delete('/logout',[SessionController::class,'destroy'])->middleware('auth');
Route::get('/product/{id}',function (){
   $getid= request()->id;
    $product=Product::find($getid);
    $ratings=DB::table('users')->join('contacts','users.id','=','contacts.user_id')->get();

  return view('singleproduct',['product'=>$product,'ratings'=>$ratings]);

});

Route::get('/cart', [CartController::class,'show']);
Route::post('/cart',[CartController::class,'store'])->middleware('auth');
Route::get('/checkout',[OrderController::class,'show'])->middleware('auth');
Route::post('/checkout',[OrderController::class,'store'])->middleware('auth');
Route::get('/product',[ProductController::class,'show']);
Route::post('/product',[ProductController::class,'store'])->middleware('admin');
Route::post('/filters',[ProductController::class,'filter']);
Route::get('/admin',[AdminLoginController::class,'show'])->middleware('auth');
Route::get('/dashboard',function (){
    return view('admin');
})->name('adminDashboard')->middleware('admin');
Route::post('/admin/login',[AdminLoginController::class,'login']);
Route::get('/userprofile',[UserController::class,'show'])->name('dashboard')->middleware('auth');
Route::post('/rating',[ContactController::class,'store']);
Route::get('/admin/orders',[OrderlistingController::class,'show'])->middleware('admin');
Route::post('/admin/orders',[OrderlistingController::class,'update'])->middleware('admin');
Route::get('/admin/products',[ProductListingController::class,'show'])->middleware('admin');
Route::post('/admin/products',[ProductListingController::class,'destroy'])->middleware('admin');
Route::post('/admin/products/update',[ProductListingController::class,'update'])->middleware('admin');
