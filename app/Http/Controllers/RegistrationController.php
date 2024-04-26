<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create(){
         return view('register');
    }
    public function store(){

        $attributes=request()->validate([
            'name'=>['required'],
            'email'=>['required'],
            'password'=>['required','email'],
            'Address'=>['required'],
            'Number'=>['required'],

        ]);
       $users= User::create($attributes);

        Auth::login($users);

        redirect('/');

    }
}
