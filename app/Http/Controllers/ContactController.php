<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {

    }

    public function store(){
        $userid=request()->user()->id;
        $email=request()->get('email');
        $subject=request()->get('message');

        Contact::create([
            'email'=>$email,
            'message'=>$subject,
            'user_id'=>$userid
        ]);
        redirect('/');
    }
}
