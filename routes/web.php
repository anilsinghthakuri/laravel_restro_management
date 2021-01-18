<?php

use App\Http\Controllers\billprintcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productcontroller;
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

Route::view('/table', 'table');

<<<<<<< HEAD
// Route::view('/product', 'add__product');
// Route::view('/product__list', 'product__list');



Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');
Route::view('/pos', 'pos');
=======
>>>>>>> 4f94d09bf960c5676de04e13fc2d0116d973769c

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);


Route::middleware(['auth'])->group(function () {
<<<<<<< HEAD
=======

    // route to sall product
    Route::view('/pos', 'pos');
>>>>>>> 4f94d09bf960c5676de04e13fc2d0116d973769c

    // Route to add and delete category livewire done here
    Route::get('/categories',[categorycontroller::class,'index']);

    // Route for product add and delete and show
    Route::get('/product', [productcontroller::class,'showproduct']);
    Route::get('/add-product', [productcontroller::class,'index']);
    Route::post('/product', [productcontroller::class,'addproduct']);
    Route::get('/product-delete/{id}', [productcontroller::class,'deleteproduct'])->name('product.delete');

    // route for show total biil and generate bill
    Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');


    // route for add user
    Route::get('/adduser',[UserController::class,'index']);
    Route::post('/adduser',[UserController::class,'adduser'])->name('user.add');

});

