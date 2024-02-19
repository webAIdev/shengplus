<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\News;

// use 

class PublicController extends Controller
{
    //
    public function index()
    {
        $product = new Product;
        $products = $product::all();
        // return view('product.product');
        // var_dump($products);
        return view('public.main', compact('products'));
    }

    public function showCategory($id)
    {
        $product = Product::find($id);
        // var_dump($product); 
        return view('public.product', compact('product'));
    }

    public function showNews(Request $request) 
    {
       $data =  $request['tab'];
        
        var_dump($data);exit;
    // $newss =News::all();
    // // print_r($news);
    // return view('news', compact('newss'));

    }
}