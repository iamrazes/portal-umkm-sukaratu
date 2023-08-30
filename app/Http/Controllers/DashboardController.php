<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $users = User::all();

        return view('admin.index', compact('products', 'users'));
    }
}
