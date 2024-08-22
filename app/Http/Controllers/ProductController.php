<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    // public function showProduct()
    // {
    //     echo "";
    // }

    // public function getProduct($id, $name)
    // {
    //     echo $id;
    //     echo $name;
    // }
    // public function updateProduct(Request $request)
    // {
    //     echo $request->id;
    //     echo $request->name;
    // }
    // public function listProduct()
    // {
    //     $data = [
    //         [
    //             'FullName' => '1',
    //             'name' => 'HoXuanDang'
    //         ],
    //         [
    //             'FullName' => '2',
    //             'name' => 'HoXuanDang1'
    //         ]
    //     ];
    //     // return view('ListProduct')->with([
    //     //     'listProduct' => $data

    //     // ]);
    //     return view('ListProduct', compact('data'));
    //     // echo "123";
    // }



    public function queryBuilder()
    {
        // Lay danh sach toan bo user
        // $result = DB::table('users')->get();

        // $result = DB::table('users')
        //     ->where('id', '=', '4')// find('4')
        //     ->first();
        // $result = DB::table('users')
        // ->where('id', '=', '16')// find('4')
        // ->value('name');
        // $idPhongBan = DB::table('phongban')
        // ->where('ten_donvi', 'like', 'Ban Giam Hieu')
        // ->value('id');

        // $result = DB::table('users')
        // ->where('phongban_id', $idPhongBan)
        // ->pluck('id');
        //Tim user co tuoi lon nhat cty
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users')->max('tuoi'))
        //     ->get();
        //Tim user co tuoi be nhat cty
        // $result = DB::table('users')
        //     ->where('tuoi', DB::table('users')->min('tuoi'))
        //     ->get();
        // dem phong ban ban giam hieu co bao nhieu user
        // $idPhongBan = DB::table('phongban')
        //     ->where('ten_donvi', 'like', 'Ban Giam Hieu')
        //     ->value('id');

        // $result = DB::table('users')
        //     ->where('phongban_id', $idPhongBan)
        //     ->count();

        // lay danh sach tuoi cac user
        // $result = DB::table('users')
        //     ->distinct()
        //     ->pluck('tuoi');

        // tim user ten khai hoac thanh
        // $result = DB::table('users')
        //     ->where('name', 'like', '%khai')
        //     ->orWhere('name', 'like', '%khai')
        //     ->get();
        // Lấy danh sách user ở phòng ban 'Ban đào tạo'
        //  $idPhongBan = DB::table('phongban')
        // ->where('ten_donvi', 'like', 'Ban đào tạo')
        // ->value('id');

        // $result = DB::table('users')
        // ->where('phongban_id', $idPhongBan)
        // ->select('id', 'name','email')
        // ->get();


        // Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')
        //     ->where('tuoi' ,'>=' ,'30')
        //     ->orderBy('tuoi', 'asc')
        //     ->get();
        // $result = DB::table('users')
        //     ->orderBy('tuoi', 'desc')
        //     ->offset(5)->limit(10)
        //     ->get();
        // $data = [
        //     'name' => "Ho Xuan Dang",
        //     'email' => "hodang204@gmail.com",
        //     'phongban_id' => "1",
        //     'songaynghi' => "0",
        //     'tuoi' => "18",
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),

        // ];
        // $idNewUser = DB::table('users')->insertGetId($data);
        // $result = DB::table('users')->find($idNewUser);
        DB::table('users')->where('songaynghhi', '>', '15')
            ->delete();

        // dd($result);
    }





    // public function listProducts()
    // {
    //     // http://127.0.0.1:8000/products/listProducts
           
    //     $data = DB::table('product')
    //         ->orderBy('view', 'desc')
    //         ->join('category', 'product.category_id', '=', 'category.id')
    //         ->select(
    //             'product.name',
    //             'product.price',
    //             'product.view',
    //             'product.id',
    //             'category.id as idCategory',
    //             'category.name as category_name'
    //         )
    //         ->get();

    //     return view('products.listProduct')->with([
    //         'listProducts' => $data
    //     ]);
    // }
    // public function searchProduct(Request $request)
    // {
    //      // Lấy từ khóa tìm kiếm từ request
    //      $search = $request->input('search');
    //     $listProducts = DB::table('product')
    //         ->join('category', 'product.category_id', '=', 'category.id')
    //         ->select(
    //             'product.name',
    //             'product.price',
    //             'product.view',
    //             'product.id',
    //             'category.id as idCategory',
    //             'category.name as category_name'
    //         )
    //         ->where('product.name', 'like', '%' . $search . '%')
    //         ->get();

    //     return view('products.listProduct', compact('listProducts', 'search'));
    // }
    // public function addProduct()
    // // http://127.0.0.1:8000/products/addProduct
    // {
    //     $category = DB::table('category')
    //         ->select('id', 'name')
    //         ->get();

    //     return view('products.addProduct')
    //         ->with([
    //             'category' => $category
    //         ]);
    // }

    // public function addPostproduct(Request $req)
    // {
    //     $data = [
    //         'name' => $req->name,
    //         'price' => $req->price,
    //         'view' => $req->view,
    //         'category_id' => $req->category,
    //         'creat_at' => Carbon::now(),
    //         'update_at' => Carbon::now(),
    //     ];
    //     DB::table('product')->insert($data);

    //     return redirect()->route('products.listProducts');
    // }



    // public function deleteProduct($idProduct)
    // {
    //     DB::table('product')
    //     ->where('id', $idProduct)
    //     ->delete();
    //     return redirect()->route('products.listProducts');
    // }



    // public function editProduct($idProduct)
    // {
    //     $category = DB::table('category')
    //         ->select('id', 'name')
    //         ->get();
    //     $product = DB::table('product')->where('id', $idProduct)
    //         ->first();
    //     return view('products.updateProduct')
    //         ->with([
    //             'product' => $product,
    //             'category' => $category
    //         ]);
    // }
    
    // http://127.0.0.1:8000/products/editProduct/3
    // public function updateProduct(Request $request)
    // {
    //     $data = [
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'category_id' => $request->category,
    //         'view' => $request->view,
    //         // 'creat_at' => Carbon::now(),
    //         'update_at' => Carbon::now(),

    //     ];
    //     DB::table('product')->where('id', $request->idProduct)
    //         ->update($data);

    //     return redirect()->route('products.listProducts');
    // }
    

        
}
