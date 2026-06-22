<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function loginsave(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            }
            if (Auth::user()->user_type == 2) {
                return redirect('index');
            }
        }
    }

    //-----------register----------
    public function register()
    {
        return view('register');
    }
    public function registersave(Request $req)
    {
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'password' => $req->password,
        ]);
        return redirect('login');
    }

    //---------logout----------
    public function logout()
    {
        Auth::logout();
        return redirect('login');
        
    }
}
