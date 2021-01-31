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



    public function single_credit_show($id)
    {
        $credit_info = $this->show_one_credit_list($id);
        // dd($credit_info);
        $billlist = $this->show_bill_list($id);
        $customer_info = $this->customer_info($id);
        return view('single_credits',[
            'customer_info'=>$customer_info,
            'billlist'=>$billlist,
            'credit_info'=>$credit_info,
            ]);
    }

    public function single_credit_update(Request $request)
    {
        $id = $request->id;
        $creditlist = $this->show_one_credit_list($id);
        $oldamount = $creditlist->total_amount_to_pay;

        $newamount = $oldamount - $request->amount;

        CustomerCredit::where('customer_id',$id)->update(['total_amount_to_pay'=>$newamount]);

        return back()->with('message','Amount Updated');


        // dd($oldamount);

        // $credit  = CustomerCredit::where('cre')

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
        $creditlist = DB::table('customer_credits')->where('customer_id',$id)->first();
        return $creditlist;
    }

    private function find_customer($name)
    {
        $searchterm = "%".$name."%";
        $customer = Customer::where('customer_username','LIKE',$searchterm)->get();
        return $customer;
    }
}
