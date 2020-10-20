<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = Product::orderBy('id','DESC')->paginate();
    	/*retorna la vista que esta en la carpeta "products" y el  archivo se llama 'index'*/
    	return view('products.index', compact('products'));
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function show($id)
    {
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    }
}
