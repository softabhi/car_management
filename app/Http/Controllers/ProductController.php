<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(1);
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'stock' => 'required|string|max:255',
           
        ]);
        Product::create($request->all());
        
        return redirect('/products')->with('status','category created succesfully');
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
    public function edit(string $product)
    {
        return view('products.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'descriptions' => 'required|string|max:255',
            'status' => 'nullable',
        ]);
        echo "abhi";
        $category = Product::findOrFail($id);

       
        $category->update([
            'name' => $request->input('name'),          // Get name from the request
            'descriptions' => $request->input('descriptions'),  // Get descriptions from the request
            'status' => $request->input('status', $category->status),  // Default to current status if not provided
        ]);
    
        
        return redirect('/products')->with('status','category updated succesfully');
    }

    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
