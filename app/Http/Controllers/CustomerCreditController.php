<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customer;
use App\Models\CustomerCredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerCreditController extends Controller
{
    public function index()
    {
        $creditlist  = $this->show_credit_list();
        return view('credit',[
            'creditlist'=>$creditlist,
        ]);
    }

    public function update_credit(Request $request)
    {
        $id = $request->id;

    }

    public function single_credit_show($id)
    {
        $billlist = $this->show_bill_list($id);
        $customer_info = $this->customer_info($id);
        return view('single_credits',[
            'customer_info'=>$customer_info,
            'billlist'=>$billlist,
            ]);
    }

    private function show_bill_list($id)
    {
        $billlist = Bill::where('customer_id',$id)->get();
        return $billlist;
    }

    private function customer_info($id)
    {
        $customer_info = DB::table('customers')->where('customer_id',$id)->first();
        return $customer_info;
    }


    public function search_customer(Request $request)
    {
        $customer  = $this->find_customer($request->customername);
        dd($customer);
    }

    private function show_credit_list(){
        $creditlist = CustomerCredit::all();
        return $creditlist;
    }

    private function show_one_credit_list($id){
        $creditlist = CustomerCredit::Find($id);
        return $creditlist;
    }

    private function find_customer($name)
    {
        $searchterm = "%".$name."%";
        $customer = Customer::where('customer_username','LIKE',$searchterm)->get();
        return $customer;
    }
}
