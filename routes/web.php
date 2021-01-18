<?php

use App\Http\Controllers\billprintcontroller;
use App\Http\Controllers\LoginController;
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
Route::get('/adduser',[UserController::class,'index']);


Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'authenticate']);


Route::view('/categories', 'add__categories');
Route::view('/product', 'add__product');
Route::view('/product__list', 'product__list');



Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');
Route::view('/pos', 'pos');



Route::middleware(['auth'])->group(function () {


    // userrout
    Route::post('/adduser',[UserController::class,'adduser'])->name('user.add');

});
