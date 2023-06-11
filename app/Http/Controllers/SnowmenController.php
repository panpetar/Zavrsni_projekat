<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SnowmenController extends Controller
{
    public function index()
   {
      $products = Product::where('category_id','=',2)->paginate(6);
   
      return view('snowmen.index',[
         'products'=>$products
      ]);
   }

   public function create()
   {
      return view('snowmen.create');
   }

   public function store(Request $request)
   {
      $validated = $request->validate([
         'snowmen_name' => 'required',
         'price' => 'required',
         'product_category' => 'required',
         'product_image_url' => 'required',
      ]);

      $snowmen = new Product();
      $snowmen->name = $request->input('snowmen_name');
      $snowmen->price = $request->input('price');
      $snowmen->image_url = $request->input('product_image_url');
      $snowmen->available = true;
      $snowmen->category_id =  $request->input('product_category');
      $snowmen->save();

      return view('snowmen.index');
   }

   public function show(Product $product)
   {

      return view('snowmen.show', [
         'product' => $product
      ]);
   }

   public function edit(Product $product)
   {

      return view('snowmen.edit', [
         'product' => $product
      ]);
   }

   public function update(Product $product,Request $request)
   {
      
      $validated = $request->validate([
         'snowmen_name' => 'required',
         'price' => 'required',
         'product_category' => 'required',
         'product_image_url' => 'required',
      ]);

      $product->name = $request->input('snowmen_name');
      $product->price = $request->input('price');
      $product->image_url = $request->input('product_image_url');
      $product->available = true;
      $product->category_id =  $request->input('product_category');
      $product->update();
      return view('snowmen.show',['product'=>$product]);
   }


   public function destroy(Product $product)
   {
      $product->delete();
      $products = Product::where('category_id','=',2)->paginate(6);
   
      return view('snowmen.index',[
         'products'=>$products
      ]);
   }
}
