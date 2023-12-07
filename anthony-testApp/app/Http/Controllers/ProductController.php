<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        $products = ProductController::all();
        return view('product', compact('product'));
    }


    // displays max of 12 products
    public function index()
    {
        $laptops = Product::paginate(12);

        return view('Product_files.products', ['laptops' => $laptops]);
        
    }

    public function show($id)
    {
        $laptop = Product::find($id);
        $laptops = Product::where('product_id', '!=', $id)->take(5)->get();
        return view('Product_files.product', ['product' => $laptop, 'laptops' => $laptops]);
    }

}
    
    
