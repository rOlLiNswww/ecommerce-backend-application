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
public function edit($id){
    $Product = \App\Models\Product::findOrFail($id);

    return view('edit',['Product'=>$Product]);
}

 public function update($id){
     $Product = Product::findOrFail($id);
     $Product->ProductName = request('ProductName');
     $Product->ProductCode = request('ProductCode');
     $Product->Price = request('Price');
     $Product->Size = request('Size');
     $Product->Colour = request('Colour');
     $Product->ProductDescription = request('ProductDescription');
     $Product->save();
     return redirect('/Home/'.$Product->id);

 }

 public function destroy($id){
     $Product = Product::findOrFail($id);
     $Product->delete();
     return redirect('/Home');
 }

}
