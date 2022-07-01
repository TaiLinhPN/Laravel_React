<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;


class APIController extends Controller
{
    public function getProducts(){
        $products=Product::all();
        return response()->json($products);
    }
}
