<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'description' => ['required'],
            'price' => ['required'],
            'owner' => ['required'],
            'address' => ['required'],
            'whatsapp' => ['required']
        ]);

        $randomString = Str::random(10);
        $imgName = $randomString . str_replace(' ', '-', $request->file('image')->getClientOriginalName());
        $dir = 'public/productsImages';
        //   dd($imgName);

        $request->file('image')->storeAs($dir, $imgName);
        //  $request->file('image')->move(public_path('storage/image'), $imgName);

        Product::create([
            'name' => $request->name,
            'image'=> $imgName,
            'description' => $request->description,
            'price' => $request->price,
            'owner' => $request->owner,
            'address' => $request->address,
            'whatsapp' => $request->whatsapp,
            'others' => $request->others,
            ]);


            return redirect()->route('products.index')->with('success', 'Data has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.products.show', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            // 'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'description' => ['required'],
            'price' => ['required'],
            'owner' => ['required'],
            'address' => ['required'],
            'whatsapp' => ['required']
        ]);

        $products = Product::findOrFail($id);

        $products->update([
            'name' => $request->name,
            // 'image'=> $imgName,
            'description' => $request->description,
            'price' => $request->price,
            'owner' => $request->owner,
            'address' => $request->address,
            'whatsapp' => $request->whatsapp,
            'others' => $request->others,
        ]);

        return redirect()->route('products.index')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $products = Product::findOrFail($id);

        // if (Storage::disk('local')->exists('public/productsImages/' . $products->image)) {
        //     Storage::disk('local')->delete('public/productsImages/' . $products->image);
        // }
        unlink(storage_path('app/public/productsImages/'.$products->image));
        $products->delete();

        return redirect()->route('products.index')->with('status', 'Data has been removed!');
    }
}
