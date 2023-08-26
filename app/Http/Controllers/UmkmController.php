<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAppRequest;
use App\Http\Requests\UpdateAppRequest;

class UmkmController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.umkm.index', compact('products'));

    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('pages.umkm.show', compact('products'));

    }
}
