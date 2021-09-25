<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $product = Product::query()->limit(1000);
        if (isset($request->limit)) {
            $product->limit($request->limit);
        }
        if (isset($request->skip)) {
            $product->skip($request->skip);
        }
        if (isset($request->status_id)) {
            $product->whereIn('status_id', [$request->status_id]);
        } else {
            $product->whereIn('status_id', [1]);
        }
        if (isset($request->price_start) && isset($request->price_end)) {
            $product->whereBetween('price', [($request->price_start), ($request->price_end)]);
        }
        if (isset($request->date_from)) {
            $product->whereDate('created_at', '>=', $request->date_from);
        }
        if (isset($request->date_to)) {
            $product->whereDate('created_at', '<=', $request->date_to);
        } else {
            $date = date('Y-m-d');
            $product->whereDate('created_at', '<=', $date);
        }
        return ['data' => $product->get(), 'metadata' => ['total' => $product->count()]];
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|filled',
            'price' => 'required|filled|numeric',
            'status_id' => 'required|filled|regex:/^[0-3]{1}$/',
            'external_id' => 'required|filled',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $newproduct = new Product;
        $newproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->status_id = $request->status_id;
        $newproduct->external_id = $request->external_id;
        $newproduct->save();
        return ['success' => true, 'data' => $newproduct];
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
        $product->deleted_at = date('Y-m-d');
        $product->save();
        return ['data' => $product, 'metadata' => ['deleted' => $product->deleted_at]];
    }

    public function filter(Request $request)
    {
        $product = Product::query()->where('status_id', '=', $request->status_id)->get();
        return response()->json($product);
    }
}
