<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Companydata;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class billprintcontroller extends Controller
{
    public function index($table)
    {
        $companydata = $this->pull_company_data();
        $bill_num  = $this->bill_number();
        $bill_data = $this->pull_bill_data($bill_num);
        $table_name = $bill_data->table->table_name;
        $customer = $bill_data->customer->customer_username;
        $datentime = $bill_data->created_at;
        // dd($customer);

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


        return view('billprint',[
            'total_price'=>$total_price,
            'orderdata'=>$orderdata,
            'table_name'=>$table_name,
            'customer'=>$customer,
            'companydata'=>$companydata,
            'datentime'=>$datentime,
        ]);
    }
    }

    private function pull_bill_data($id){
        $bill_data = Bill::find($id);
        return $bill_data;
    }
    private function bill_number(){
        $bill_num = Bill::max('bill_id');
       return $bill_num;
    }

    private function pull_company_data()
    {
        $companydata = DB::table('companydatas')->first();
        return $companydata;
    }
}
