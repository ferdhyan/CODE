<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiControler extends Controller
{
    function index()
    {
        return view("login");
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);
    }
}
