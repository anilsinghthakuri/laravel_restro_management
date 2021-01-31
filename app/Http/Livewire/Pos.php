<?php

namespace App\Http\Livewire;

use App\Http\Controllers\billprintcontroller;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Table;
use Livewire\Component;

class Pos extends Component
{
    public $table  = 0;
    public $tablelist = [];
    public $changeamount = 0;
    public $grandprice;
    public $payingamount = 0;
    public $shifting_table = 0;
    public $table_order = [];
    public $customerlist =[];
    public $payment = 0;
    public $customer = 1;
    public $paymentmethodlist = [];

    protected $listeners = ['changecalc'];

    public function mount()
    {
        $this->payingamount = 0;
        $this->tablelist = $this->table_list();
        $this->table_order = $this->table_order_data();
        $this->customerlist = $this->customer_list();
        $this->paymentmethodlist = $this->payment_method_list();
    }

    public function updatedPayingamount()
    {
        if($this->payingamount == null){
        }
        else{
            $this->changeamount = $this->payingamount - $this->grandprice;

        }
    }

    public function changecalc($table,$grandprice)
    {
        $this->table = $table;
        $this->grandprice = $grandprice;
        $this->payingamount = 0;
        $this->changeamount = 0;


    }
    public function checkout($table)
    {
        if ($this->grandprice == null) {
            session()->flash('message', 'Table is Empty ');

        }
        else{
            if ($this->payment == 0) {

                session()->flash('message', 'Choose Payment Method');

            }
            else{

                if ($this->payment == 1) {
                    $orderdata = [];
                    $bill = New Bill;
                    $bill->table_id = $this->table;
                    $bill->bill_total_amount = $this->grandprice;
                    $bill->payment_method_id = $this->payment;
                    $bill->customer_id = $this->customer;
                    $bill->save();
                }
                else{
                    if ($this->customer == 1) {
                        session()->flash('message', 'Choose Customer ');

                    }
                    else{
                        $orderdata = [];
                        $bill = New Bill;
                        $bill->table_id = $this->table;
                        $bill->bill_total_amount = $this->grandprice;
                        $bill->payment_method_id = $this->payment;
                        $bill->customer_id = $this->customer;
                        $bill->save();
                        return redirect()->route('bill.print', [
                            $table,

                            ]);

                    }

                }

            }



            // Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1]);

            // $this->emit('billdata',$orderdata);

            // $this->emit('refreshaftersell');
            // dd($table);

        }

    }

    public function table_list()
    {
        $tablelist = Table::all();
        return $tablelist;
    }

    public function table_order_data()
    {
        $table_order = Order::where('table_id',$this->table)->where('bill_status',0)->get();
        return $table_order;
    }

     public function table_change()
     {
        if ($this->table == 0) {
            session()->flash('message', 'Choose table to Change table!');
        }
        else{
            // dd($this->shifting_table);
            $check = [];
            $checktable = Order::where('table_id',$this->shifting_table)->where('bill_status',0)->get();
            // dd($checktable);
            foreach ($checktable as $key => $value) {
                $check[] = $checktable[$key]['table_id'];
            }

            if ( in_array($this->shifting_table,$check) ) {

                session()->flash('message', 'Shifting table have already data!');
             }
             else{
                Order::where('table_id',$this->table)->where('bill_status',0)->update(['table_id' => $this->shifting_table]);
                $this->emit('refreshaftersell');
                session()->flash('message', 'Table Transfer Done');
             }

        }
     }

    public function customer_list()
    {
        $customerlist = Customer::all();
        return $customerlist;
    }
    public function payment_method_list()
    {
        $paymentmethodlist = PaymentMethod::all();
        return $paymentmethodlist;
    }

    public function render()
    {
        return view('livewire.pos');
    }
}
