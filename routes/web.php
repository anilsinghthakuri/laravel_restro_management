<?php

use App\Http\Controllers\billprintcontroller;
use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\companydatacontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
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
    Route::get('/product', [productcontroller::class,'index']);
    Route::get('/add-product', [productcontroller::class,'product']);
    Route::post('/product', [productcontroller::class,'addproduct']);
    Route::get('/product-edit/{id}', [productcontroller::class,'edit_product']);
    Route::post('/product-update', [productcontroller::class,'update_product']);
    Route::get('/product-delete/{id}', [productcontroller::class,'deleteproduct'])->name('product.delete');

    // Route for expense
    Route::get('/expense-list', [ExpenseController::class,'index']);
    Route::get('/expense-category', [ExpenseController::class,'show_expense_category']);
    Route::post('/expense-category', [ExpenseController::class,'add_expense_category']);
    Route::get('/expense-add', [ExpenseController::class,'show_expense_add']);
    Route::post('/expense-add', [ExpenseController::class,'add_expense_list']);



    // route for show total biil and generate bill
    Route::get('billprint/{id}',[billprintcontroller::class,'index'])->name('bill.print');

    // route for table
    Route::get('/table',[TableController::class,'index']);
    Route::get('/table/{id}',[TableController::class,'table_edit']);
    Route::post('/table',[TableController::class,'tableadd']);
    Route::post('/table-update',[TableController::class,'table_update']);
    Route::get('/table-delete/{id}',[TableController::class,'tabledelete']);

    // route for dashboard

    // route for company profile
    Route::get('/companyprofile',[companydatacontroller::class,'index']);
    Route::post('/companyprofile',[companydatacontroller::class,'update_company'])->name('company.update');

    // route for dashboard
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/export-orders',[DashboardController::class,'export']);
    Route::get('/export-orders-pdf',[DashboardController::class,'exportpdf']);

    // route for add user
    Route::get('/adduser',[UserController::class,'index']);
    Route::post('/adduser',[UserController::class,'adduser'])->name('user.add');
    Route::get('/userlist',[UserController::class,'userlist'])->name('user.list');
    Route::get('/user-delete/{id}',[UserController::class,'userdelete'])->name('user.delete');


    // route for logout
    Route::get('/logout',[LoginController::class,'logout']);



});

