<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function index() 
    // {
    //     $products = Product::all()->get('name','description');
    //     return view('services')->with('products', $products);
    // }
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return view('services', compact('products'));
    }
}