<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
    	$product = Product::all();
    	$arr = Array('product'=>$product);
    	return view('product',$arr);
    }

    public function getOnePrd(Request $request, $slug)
    {
    	$product = Product::where('slug',$slug)->firstOrFail();
    	return view('productDetail',compact('product'));
    }
}
