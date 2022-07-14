<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function index(){
        $result = DB::table('products')
                ->orderByDesc('id')
                ->get();
        return $result;
    }
    public function detail(Product $product){
        return $product;
    }
    public function create(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }

    public function searchByName(Request $request)
    {
        if($request->keyword == null)
        {
            return Product::all();
        }
        $result = DB::table('products')
                ->where('name', 'like', "%$request->keyword%")
                ->orderByDesc('id')
                ->get();
        return $result;
    }

    public function searchByPrice(Request $request)
    {
        if($request->price == null)
        {
            return DB::all();
        }
        $result = DB::table('products')
                ->where('price', '<=',$request->price)
                ->orderByDesc('price')
                ->get();
        return $result;
    }
}
