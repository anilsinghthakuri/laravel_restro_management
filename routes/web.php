<?php

use App\Http\Controllers\billprintcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\companydatacontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\TableController;
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
// for test route





// route for login
Route::get('/login',[LoginController::class,'index']);
Route::get('/',[LoginController::class,'index'])->name('login');
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);


// route for auth for user

Route::middleware(['auth'])->group(function () {

    // route to sall product
    Route::view('/pos', 'pos');

    // Route to add and delete category livewire done here
    Route::get('/categories',[categorycontroller::class,'index']);

    // Route for product add and delete and show
    Route::get('/product', [productcontroller::class,'showproduct']);
    Route::get('/add-product', [productcontroller::class,'index']);
    Route::post('/product', [productcontroller::class,'addproduct']);
    Route::get('/product-delete/{id}', [productcontroller::class,'deleteproduct'])->name('product.delete');

    // route for show total biil and generate bill
    Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');

    // route for table
    Route::get('/table',[TableController::class,'index']);
    Route::post('/table',[TableController::class,'tableadd']);
    Route::get('/table-delete/{id}',[TableController::class,'tabledelete']);

    // route for dashboard

    // route for company profile
    Route::get('/companyprofile',[companydatacontroller::class,'index']);
    Route::post('/companyprofile',[companydatacontroller::class,'update_company'])->name('company.update');

    Route::get('/dashboard',[DashboardController::class,'index']);

    // route for add user
    Route::get('/adduser',[UserController::class,'index']);
    Route::post('/adduser',[UserController::class,'adduser'])->name('user.add');

});

