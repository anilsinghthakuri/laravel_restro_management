<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerCreditController extends Controller
{
    public function index()
    {
        return view('credit');
    }

    public function single_credit_show()
    {
        return view('single_credits');
    }

    public function search_customer(Request $request)
    {
        $customer  = $this->find_customer($request->customername);
        dd($customer);
    }

    private function find_customer($name)
    {
        $searchterm = "%".$name."%";
        $customer = Customer::where('customer_username','LIKE',$searchterm)->get();
        return $customer;
    }
}
