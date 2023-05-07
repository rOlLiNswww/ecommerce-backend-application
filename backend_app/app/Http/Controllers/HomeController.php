<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create(){
        $Products = \App\Models\Product::query()->latest()->get();
        return view('Home',['Products'=>$Products]);
    }


}
