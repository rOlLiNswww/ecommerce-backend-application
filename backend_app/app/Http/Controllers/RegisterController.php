<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function create(){
        return view('Register');
    }

    public function store()
    {

        User::create(request()->validate([
            'name' => 'required|max:255',
            'username'=> 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]));
        return redirect('/');

    }
}
