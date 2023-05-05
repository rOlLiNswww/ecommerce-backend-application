<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($name){
    $post=DB::table('posts')->where('name',$name)->first();
    if(!$post){
        abort(404);
    }
    return $post;
}

}
