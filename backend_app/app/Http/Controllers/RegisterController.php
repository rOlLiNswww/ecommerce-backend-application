<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{
    public function create(){
        return view('homePage');
    }
}
