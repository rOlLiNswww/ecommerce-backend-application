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
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username'=> 'required|min:3|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/Home');

    }
}
