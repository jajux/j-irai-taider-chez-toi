<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services(){
        $produits= Product::get();
        return view('pages.services')->with('produits', $produits);
    }
}