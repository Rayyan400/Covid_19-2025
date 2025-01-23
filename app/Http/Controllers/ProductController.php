<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Product.view' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // For image Handling
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        // $filename = $file->getClientOriginalExtension();
        // $filename = $file->getClientMimeType();

        $imagefile = $file->storeAs('productimages', $filename , 'public');

        $request->validate([
            'name'=>'required|string',
            'price'=>'required|integer',
            'description'=>'required|string|max:1000',
            'file'=>'required'
        ]);
        Product::insert([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$imagefile
        ]);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);
        return view('Product.edit',['product' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);  // Retrieve the patient by ID

    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'description' => 'nullable',
    ]);

    $product->update($request->all());

    return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = DB::table('products')->where('id' , $id)->delete();
        return redirect()->route('product.index');
    }
}
