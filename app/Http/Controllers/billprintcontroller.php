<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class billprintcontroller extends Controller
{
    public function index($table)
    {
        // $orderdata = Order::where('table_id',$table)->where('bill_status',0)->get();
        // Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1]);


        // return view('billprint',[
        //     'orderdata'=>$orderdata,
        // ]);
        return view('billprint');
    }
}
