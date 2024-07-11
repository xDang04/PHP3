<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;


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







// Bai2

Route::get('query-builder', [ProductController::class, "queryBuilder"]);







/// CRUD table user
//BASE_URL

// List-user
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    //http://127.0.0.1:8000/list-user
    Route::get('list-user', [UserController::class, 'listUser'])
        ->name('listUser');

    Route::get('add-user', [UserController::class, 'addUser'])
        ->name('addUser');

    Route::post('add-user', [UserController::class, 'addPostUser'])
        ->name('addPostUser');

    Route::get('delete-user/{idUser}', [UserController::class, 'deleteUser'])
        ->name('deleteUser');

    Route::get('edit-user/{idUser}', [UserController::class, 'editUser'])
        ->name('editUser');

    Route::post('update-user', [UserController::class, 'updateUser'])
        ->name('updateUser');
});



Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
    Route::get('listProducts', [ProductController::class, 'listProducts'])
        ->name('listProducts');

    Route::get('addProduct', [ProductController::class, 'addProduct'])
        ->name('addProduct');

    Route::post('addPostProduct', [ProductController::class, 'addPostProduct'])
        ->name('addPostProduct');

    Route::get('deleteProduct/{idProduct}', [ProductController::class, 'deleteProduct'])
        ->name('deleteProduct');

    Route::get('editProduct/{idProduct}', [ProductController::class, 'editProduct'])
        ->name('editProduct');

    Route::post('updateProduct', [ProductController::class, 'updateProduct'])
        ->name('updateProduct');

    Route::get('searchProduct', [ProductController::class, 'searchProduct'])
        ->name('searchProduct');
});
