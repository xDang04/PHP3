<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showProduct()
    {
        echo "";
    }

    public function getProduct($id, $name)
    {
        echo $id;
        echo $name;
    }
    public function updateProduct(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }
    public function listProduct()
    {
        $data = [
            [
                'FullName' => '1',
                'name' => 'HoXuanDang'
            ],
            [
                'FullName' => '2',
                'name' => 'HoXuanDang1'
            ]
        ];
        // return view('ListProduct')->with([
        //     'listProduct' => $data

        // ]);
        return view('ListProduct', compact('data'));
        // echo "123";
    }
}
