<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class billprintcontroller extends Controller
{
    public function index($table)
    {
        $total = [];
        $orderdata = Order::where('table_id',$table)->where('bill_status',0)->with('product')->get();
        foreach ($orderdata as $key => $value)
         {
         $total[] = $orderdata[$key]['order_subprice'];
         }

        if($total == null){

        }
        else{
            $total_price = array_sum($total);
            Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1]);


        return view('billprint');
    }
    }
}
