<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $products = Product::latest()->get();
        return view('home',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('product.index')->with('status','Product suessfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $product = Product::find($id);
         return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect()->route('product.index')->with('status','Product suessfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product = Product::find($id);
         $product->delete();
         return back()->with('status','Product suessfully deleted');
    }
}
