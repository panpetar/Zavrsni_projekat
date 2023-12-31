<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HouseController extends Controller
{
   public function index()
   {
      $products = Product::where('category_id','=',1)->paginate(6);
   
      return view('houses.index',[
         'products'=>$products
      ]);
   }

   public function create()
   {
      return view('houses.create');
   }

   public function store(Request $request)
   {
      $validated = $request->validate([
         'house_name' => 'required',
         'price' => 'required',
         'product_category' => 'required',
         'product_image_url' => 'required',
      ]);

      $house = new Product();
      $house->name = $request->input('house_name');
      $house->price = $request->input('price');
      $house->image_url = $request->input('product_image_url');
      $house->available = true;
      $house->category_id =  $request->input('product_category');
      $house->save();

      return view('houses.index');
   }

   public function show(Product $product)
   {

      return view('houses.show', [
         'product' => $product
      ]);
   }

   public function edit(Product $product)
   {

      return view('houses.edit', [
         'product' => $product
      ]);
   }

   public function update(Product $product,Request $request)
   {
      
      $validated = $request->validate([
         'house_name' => 'required',
         'price' => 'required',
         'product_category' => 'required',
         'product_image_url' => 'required',
      ]);

      $product->name = $request->input('house_name');
      $product->price = $request->input('price');
      $product->image_url = $request->input('product_image_url');
      $product->available = true;
      $product->category_id =  $request->input('product_category');
      $product->update();
      return view('houses.show',['product'=>$product]);
   }


   public function destroy(Product $product)
   {
      $product->delete();
      $products = Product::where('category_id','=',1)->paginate(6);
   
      return view('houses.index',[
         'products'=>$products
      ]);
   }
}
