<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function show()
  {
    return view('products', ['productData' => Product::all()]);
  }
}
