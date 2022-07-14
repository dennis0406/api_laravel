<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('layouts.create', compact('categories'));
    }
    public function addRoom(ProductRequest $request)
    {
        $newProduct = [
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
        ];

        DB::table('products')->insert($newProduct);
        return redirect(route('show'));
    }

    public function show(){
        $products = Product::all();
        $categories = Category::all();
        $prdCate1 = $products->where('category_id',1);
        $prdCate2 = $products->where('category_id',2);
        $prdCate3 = $products->where('category_id',3);
        $cateName1 = $categories->find(1);
        $cateName2 = $categories->find(2);
        $cateName3 = $categories->find(3);
        return view('layouts.index', compact('prdCate1','prdCate2','prdCate3', 'cateName1', 'cateName2', 'cateName3'));
    }

    public function showDetail($id){
        $products = Product::all();
        $product = $products->find($id);
        return view('layouts.detail', compact('product'));
    }

}
