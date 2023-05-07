<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function create(){
     return view('Product');
 }

 public function store(){
     $Product = new Product();
     $Product->ProductName = request('ProductName');
     $Product->ProductCode = request('ProductCode');
     $Product->Price = request('Price');
     $Product->Size = request('Size');
     $Product->Colour = request('Colour');
     $Product->ProductDescription = request('ProductDescription');

     $Product->save();
     return redirect('Home');
 }
}
