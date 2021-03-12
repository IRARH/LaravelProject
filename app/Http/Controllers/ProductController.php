<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index')->with([
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        //$product = Product::create([
        //  'title' => request()->title,
        //'description' => request()->description,
        //'price' => request()->price,
        //'stock' => request()->stock,
        //'status' => request()->status, 
        //]);
        
        $product = Product::create(request()->all());        

        return $product;
    }

    public function show($product)
    {
        $product = Product::findOrFail($product);

        return view('products.show')->with([
            'product' => $product,
            'html' => "<h2>hola</h2>",
        ]);
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
