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
            return Product::all();
        }
        $result = DB::table('products')
                ->where('price', '<=',$request->price)
                ->orderByDesc('price')
                ->get();
        return $result;
    }
}
