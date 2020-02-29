<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        Product::create($this->validateData());
        return redirect('products')->with('status','Product added!');
    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($this->validateData());
        return redirect('products')->with('status','Product updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('products')->with('status','Product deleted!');
    }

    protected function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'qty' => 'required|numeric|min:0'
        ]);
    }
}
