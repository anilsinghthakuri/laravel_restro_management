<?php

use App\Http\Controllers\billprintcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\UserController;
use App\Models\Order;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bill', function () {
    return view('billprint');
});

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);



// Route::view('/product', 'add__product');
// Route::view('/product__list', 'product__list');



Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');
Route::view('/pos', 'pos');



Route::middleware(['auth'])->group(function () {

    Route::get('/categories',[categorycontroller::class,'index']);

    Route::get('/product', [productcontroller::class,'showproduct']);
    Route::get('/add-product', [productcontroller::class,'index']);
    Route::post('/product', [productcontroller::class,'addproduct']);
    Route::get('/product-delete/{id}', [productcontroller::class,'deleteproduct'])->name('product.delete');



    // userrout
    Route::get('/adduser',[UserController::class,'index']);
    Route::post('/adduser',[UserController::class,'adduser'])->name('user.add');

});

