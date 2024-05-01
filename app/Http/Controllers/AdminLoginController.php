<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    public function show(){
        return view('adminlogin');
    }
    public function login()
    {
        $username = request()->get('username');
        $password = request()->get('password');

        // Retrieve the user by username
        $admin = Admin::where('username', $username)->first();


        // Check if the admin exists and verify the password
        if ($admin && $this->verifyPassword($password, $admin->password)) {
            // Authentication passed
            // Login the admin
            Auth::login($admin);

            request()->session()->put('role', 'admin');
            return redirect('/dashboard');
        }


        return back()->withErrors([
             dd(['username' => 'The provided credentials do not match our records.']),
        ]);
    }

    private function verifyPassword($plainPassword, $hashedPassword)
    {

        return Hash::check($plainPassword, $hashedPassword);


    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/');
    }

}
