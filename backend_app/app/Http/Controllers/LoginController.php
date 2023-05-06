<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function create(){
        return view('Login');
    }


    public function store(){


         $credentials = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success','welcome');
        }


        return back()->withErrors([
            'email' => "error in email",
            'password' => 'error in password'
        ]);
    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','logout');
    }

}
