<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status_id' => 'required',
            'external_id' => 'required',

        ]);
        $newproduct = new Product([
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'status_id' => $request->get('status_id'),
            'external_id' => $request->get('external_id'),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::query()->findOrFail($id);
        return response()->json($product);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::query()->findOrFail($id);
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'status_id' => 'required',
            'external_id' => 'required',

        ]);
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->status_id = $request->get('status_id');
        $product->external_id = $request->get('external_id');

        $product->save();
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
        return response()->json(Product::all());
    }
}
