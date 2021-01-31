<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Order;
use Illuminate\Http\Request;

class billprintcontroller extends Controller
{
    public function index($table)
    {
        $bill_num  = $this->bill_number();
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
            Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1,'bill_id'=>$bill_num]);


        return view('billprint');
    }
    }
    private function bill_number(){
        $bill_num = Bill::max('bill_id');
       return $bill_num;
    }
}
