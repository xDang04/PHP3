<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //
    public function getListProducts(){
        $listProducts = Product::select(
            'product_id', 'name', 'price', 'image'
        )->get();
    return response()->json([
        'data' => $listProducts,

    ], 200);
    }

    public function getProduct($idProduct){
        $listProducts = Product::select('product_id', 'name', 'price', 'image')->find($idProduct);
        return response()->json([
            'data' => $listProducts,
    
        ], 200);
    }

    public function addProduct(Request $request){
        $data = json_decode($request->getContent());
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            // 'image' => $request->image,
        ];
        $product = Product::create($data);

        return response()->json([
            'data' => $product,
        //    'message' => 'Product added successfully'
        ]);
    }
}
