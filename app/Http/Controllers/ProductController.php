<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product){
        return view('product', [
            'product' => $product
        ]);
    }

    public function home() {
        return view('home',[
            'products' => Product::all()
        ]);
    }
}
