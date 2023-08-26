<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAppRequest;
use App\Http\Requests\UpdateAppRequest;

class IndexController extends Controller
{
    public function index ()
    {
        $products = Product::inRandomOrder()->limit(6)->get();
        return view('index', compact('products'));
    }
}
