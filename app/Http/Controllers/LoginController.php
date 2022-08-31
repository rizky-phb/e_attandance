<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) 
        {
            return redirect('home');
        }
        else
        {
            return view('index');
        }
    }

    public function loginaksi(Request $request)
    {
        $data = [
            'nip' => $request->input('nip'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) 
        {
            return redirect('home');
        }
        else
        {
            Session::flash('error', 'NIP atau Password Salah');
            return redirect('/');
        }
    }

    public function logoutaksi()
    {
        Auth::logout();
        return redirect('/');
    }
}