<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CategoryController::class,'index']);

Route::get('/category-create', [CategoryController::class,'create_c']);

Route::post('/category-store', [CategoryController::class,'store_c']);

Route::get('/category-edit/{id}', [CategoryController::class,'edit_c']);

Route::put('/category-update/{id}', [CategoryController::class,'update_c']);

Route::delete('/category-delete/{id}', [CategoryController::class,'delete_c']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/product_create', [ProductController::class, 'create']);

Route::post('/product_store', [ProductController::class, 'store']);

Route::get('/product-edit/{id}', [ProductController::class, 'edit']);

Route::put('/product-update/{id}', [ProductController::class, 'update']);

Route::get('/product-delete/{id}', [ProductController::class, 'delete']);