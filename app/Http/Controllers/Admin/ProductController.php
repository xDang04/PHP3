<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function listProducts(){
        $listProducts = Product::all();
        return view('products.listProduct')->with([
            'listProducts' => $listProducts
        ]);
    }

    public function addProduct(){
        return view('products.addProduct');
    }

    public function addPostProduct(Request $request){
        $linkImage = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newName = time() . '.' .$image->getClientOriginalExtension();
            $linkStorage ="/imageProduct";
            $image->move(public_path($linkStorage), $newName);
            $linkImage = $linkStorage.$newName;
        }
        $data = [
        'name' => $request-> name,
        'price' => $request-> price,
        'image' =>$linkImage,
        ];
        product::create($data);
        return redirect()->route('admin.product.listProducts');
    }
}
