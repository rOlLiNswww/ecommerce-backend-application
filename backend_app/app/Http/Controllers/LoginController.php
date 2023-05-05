<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function create(){
        return view('Login');
    }

    public function store(Request $request){

        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|min:6'
        ]);

        if (DB::table('users')->where($credentials)->exists()) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => "error in email",
            'password' => 'error in password'
        ]);
    }



}
