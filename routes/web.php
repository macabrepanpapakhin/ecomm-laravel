<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class,'index']);

Route::post('/login',[UserController::class,'login']);

Route::get('/login',[UserController::class,'show']);

Route::get('/details/{id}',[ProductController::class,'details']);

Route::post('/addtocart',[ProductController::class,'addToCart']);

Route::get('/view_cart',[ProductController::class,'viewCart']);

Route::post('/logout',[UserController::class,'logout']);

Route::get('/remove/{id}',[ProductController::class,'removeItem']);

Route::get("/order_produts",[ProductController::class,'orderNow']);

Route::post("/makeanorder",[ProductController::class,'submitOrder']);

Route::get("/myorders",[ProductController::class,'myOrders']);

Route::get("/register",[UserController::class,'index']);

Route::post("/register",[UserController::class,'register']);