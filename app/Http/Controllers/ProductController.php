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
    public function index(Request $request)
    {
        if ($request->status_id && !$request->date_from) {
            $product = Product::query()->where('status_id', '=', $request->status_id)->get();
            return response()->json($product);
        } elseif ($request->status_id && $request->date_from) {
            $product = Product::query()->where('status_id', '=', $request->status_id)->where('created_at', '<=', $request->date_from);
        } else {
            $product = Product::all();
            return response()->json($product);
        }

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

        $newproduct = new Product;
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->status_id = $request->status_id;
        $newproduct->external_id = $request->external_id;
        $newproduct->save();
        return response()->json($newproduct);
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
        $product->name = $request->name;
        $product->price = $request->price;
        $product->status_id = $request->status_id;
        $product->external_id = $request->external_id;
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

    public function filter(Request $request)
    {
        $product = Product::query()->where('status_id', '=', $request->status_id)->get();
        return response()->json($product);
    }
}
