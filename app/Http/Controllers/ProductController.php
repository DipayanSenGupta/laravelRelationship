<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
	public function show(Product $product){
		return view('many-to-many.product.show',compact('product'));
	}
}
