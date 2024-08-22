<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserController;
// use App\Models\Product;
use App\Http\Controllers\Api\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products', [ProductController::class, 'getListProducts']);
Route::get('product/{idProduct}', [ProductController::class, 'getProduct']);
Route::get('add-product', [ProductController::class, 'addProduct']);





// Route::middleware('auth:sanctum')->group(function () {  
// });


// Api
//  http://127.0.0.1:8000/api/register
Route::post('register', [UserController::class, 'register']);
//  http://127.0.0.1:8000/api/login
Route::post('login', [UserController::class, 'login']);
Route::group(['middleware' => 'auth:sanctum'], function(){

    //  http://127.0.0.1:8000/api/listUsers
    Route::get('listUsers', [UserController::class, 'listUsers']);

    //   http://127.0.0.1:8000/api/user/{id}
    Route::get('user/{id}', [UserController::class, 'showUser']);

    //   http://127.0.0.1:8000/api/user/{{ID}}/password
    Route::patch('/user/{id}/password', [UserController::class, 'updatePassword']);

    //   http://127.0.0.1:8000/api/user?user_id=35
    Route::delete('user', [UserController::class, 'deleteUser']);
    
});
 