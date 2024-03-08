<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();

        return view('products.index', ['products' => $products]);
        
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable',

        ]);

        $newProduct = Product::create($attributes);

        return redirect()->route('product.index')->with(
            'status', 'The Product has been successfully saved'
        );
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);

    }

    public function update(Product $product, Request $request){
            $attributes = $request->validate([
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
                'description' => 'nullable',

            ]);

            $product -> update($attributes);

            return redirect()->route('product.index')->with('success', 'Product Updated Successfully');
    }

    public function destroy(Product $product){
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product Deleted Successfully');

    }
}
