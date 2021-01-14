<?php

use App\Http\Controllers\billprintcontroller;
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

Route::view('/pos', 'pos');
Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');

// userrout

Route::get('/adduser',[UserController::class,'index']);
Route::post('/adduser',[UserController::class,'adduser'])->name('user.add');
