<?php

use App\Http\Controllers\billprintcontroller;
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

Route::view('/categories', 'add__categories');
Route::view('/product', 'add__product');

Route::get('/billprint/{$table}',[billprintcontroller::class,'index'])->name('bill.print');
Route::get('billprint/{id}', function ($table) {
    $total = [];
    $orderdata = Order::where('table_id',$table)->where('bill_status',0)->with('product')->get();
    foreach ($orderdata as $key => $value) {
        $total[] = $orderdata[$key]['order_subprice'];
    }

    if($total == null){

    }
    else{
        $total_price = array_sum($total);
        Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1]);


        return view('billprint',[
            'orderdata'=>$orderdata,
            'grandprice'=>$total_price,
        ]);
    }


});

