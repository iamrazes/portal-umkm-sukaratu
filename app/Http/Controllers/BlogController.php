<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->limit(4)->get();

        return view('pages.blog', compact('products'));
    }
}
