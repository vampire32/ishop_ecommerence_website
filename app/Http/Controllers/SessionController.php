<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(){

    $attributes=request()->validate([
    'email'=>['required', 'email'],
    'password'=>['required']

    ]);
    
    if(! Auth::attempt($attributes)){
        
    }

    }

    public function destroy(){
        Auth::logout();
    }
}
