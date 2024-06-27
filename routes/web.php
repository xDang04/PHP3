<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('test', function(){
//     echo "123";
// });


// Route::get('/', function(){
//     echo "456";
// });


Route::get('product', [ProductController::class, "showProduct"]);


// Slug /getproduct/id/name
Route::get('get-product/{id}/{name?}', [ProductController::class, "getProduct"]);


// Param /getproduct?if=&name=ip
Route::get('update-product{id}', [ProductController::class, "updateProduct"]);

Route::get('list-product', [ProductController::class, "listProduct"]);


Route::get('thongtinsinhvien', [StudentsController::class, "thongTinSV"]);
