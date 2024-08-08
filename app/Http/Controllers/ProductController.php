<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index(){
        $product = Product::all();
        return view('products.index', compact('product'));
    }

    public function create(){
        return view('products.create');
    }



    public function store(Request $request){
        $products= new Product;
        $products->name = $request->input('name');
        
         if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/products/', $filename);
            $products->image = $filename;
        } 

        $request->validate([
            'name' => 'required|alpha|max:255',
            'price' => 'required|numeric',
            
        ]);
        
        $products->price = $request->input('price');
        $products->save();
        return redirect()->route('product.index');

    }

       public function show(){
             $product = Product::first();
            return view('products.show', compact('product'));
       }

        public function edit($id){
             $product = Product::find($id);
            return view('products.edit', compact('product'));//ai link folder products
       }

       public function update(Request $request, $id){
            $product = product::find($id);
            $product->name = $request->input('name');
        
         if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $destination = $file->getClientOriginalExtension();
            $filename = time().'.'.$destination;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        } 
        
        $product->price = $request->input('price');

        $product->update();
        return redirect()->route('product.index');

    }

    public function delete($id){
        $product = product::find($id);
        $destination = 'uploads/products/'.$product->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $product->delete();
        return redirect()->route('product.index');

    }

}
