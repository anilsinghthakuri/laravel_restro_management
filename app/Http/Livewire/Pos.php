<?php

namespace App\Http\Livewire;

require_once __DIR__ . '../../../../vendor/autoload.php';

use Nilambar\NepaliDate\NepaliDate;

use App\Http\Controllers\billprintcontroller;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\CustomerCredit;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Pos extends Component
{
    public $table;
    public $tablelist = [];
    public $changeamount = 0;
    public $grandprice;
    public $payingamount = 0;
    public $shifting_table = 0;
    public $table_order = [];
    public $customerlist =[];
    public $payment = 1;
    public $customer = 1;
    public $paymentmethodlist = [];
    public $check_bill_status = [];

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

        $table_state = $this->check_table_status($table);

        if ($this->grandprice == 0) {

           dd('refresh page');
        }
        else{
            if ($table_state == 2) {

                        $bill = New Bill;
                        $bill->table_id = $this->table;
                        $bill->bill_total_amount = $this->grandprice;
                        $bill->nepali_date = $this->nepalidate();
                        $bill->save();

                        return redirect()->route('bill.print', [
                            $table,
                            ]);
                    }
            elseif($table_state == 3){
                dd('bill already generated');
            }
            else{
                dd('kot is not done');
            }

            }
    }
    public function kot_bill_print($table)
    {
        if ($this->table == 0) {
            dd('select table ');
        }
        else{

            if ($this->grandprice == 0) {

                dd('table is empty');
            }
            else{
                Table::where('table_id',$table)->update(['table_status'=>2]);
                return redirect()->route('kot.print',[
                    $table,
                ]);

            }


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
        $this->bill_check_status();
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

    public function nepalidate()
    {
        $endate = Carbon::now();
        $year = $endate->year;
        $month = $endate->month;
        $day = $endate->day;

        $obj = new NepaliDate();

        $date = $obj->convertAdToBs($year, $month, $day);

        $current_year = $date['year'];
        $current_month = $date['month'];
        $current_day = $date['day'];

        $current_date = $current_year.'/'.$current_month.'/'.$current_day;

        return $current_date;

    }


    //fun for make bill settle
    public function settle()
    {

        $table_status  = $this->check_table_status($this->table);


        if ($table_status == 3) {

            $bill_num  = $this->bill_number($this->table);

            if ($this->payment == 1) {
                $bill_data = Bill::findorFail($bill_num);
                $bill_data->payment_method_id = 1;
                $bill_data->customer_id = 1;
                $bill_data->save();

                $this->order_bill_status_update($this->table);
                Table::where('table_id',$this->table)->update(['table_amount'=>0,'table_status'=>0]);
                return redirect()->route('table.manage');

            }
            else {

                $check = [];
                    $checkcustomer = CustomerCredit::where('customer_id',$this->customer)->get();
                    foreach ($checkcustomer as $key => $value)
                    {
                    $check[] = $checkcustomer[$key]['customer_id'];
                    }

                    if (in_array($this->customer,$check)) {
                        $amount = CustomerCredit::where('customer_id',$this->customer)->first();
                        $balance_amount = $amount->amount_paid;
                        $total_amount_to_pay = $amount->total_amount_to_pay;
                        $total_amount_to_pay  = $total_amount_to_pay + $this->grandprice;
                        $balance_amount = $total_amount_to_pay - $balance_amount;

                        DB::table('customer_credits')->where('customer_id',$this->customer)->update(['total_amount_to_pay'=>$total_amount_to_pay,'balance_amount'=>$balance_amount]);

                        $bill_data = Bill::findorFail($bill_num);
                        $bill_data->payment_method_id = 2;
                        $bill_data->customer_id = $this->customer;
                        $bill_data->save();

                        $this->order_bill_status_update($this->table);
                        Table::where('table_id',$this->table)->update(['table_amount'=>0,'table_status'=>0]);
                        return redirect()->route('table.manage');

                     }

                     else{

                        $creditcustomer = new CustomerCredit;
                        $creditcustomer->customer_id = $this->customer;
                        $creditcustomer->total_amount_to_pay = $this->grandprice;
                        $creditcustomer->balance_amount = $this->grandprice;
                        $creditcustomer->save();

                        $bill_data = Bill::findorFail($bill_num);
                        $bill_data->payment_method_id = 2;
                        $bill_data->customer_id = $this->customer;
                        $bill_data->save();

                     }
            }
        }
        else {
           dd('bill is not done');
        }


    }


    //for disable the settel button
    public function bill_check_status()
    {
        $this->check_bill_status = DB::table('orders')->where('table_id',$this->table)->where('bill_status',1)->get();
    }


   //check table status
   private function check_table_status($table)
    {
        $check_table_state = DB::table('tables')->where('table_id',$table)->get();
        $data  = $check_table_state[0]->table_status;
        return $data;
    }

    //updata bill number to order


    private function order_bill_status_update($table)
    {
        $bill_num  = $this->bill_number($table);
        Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1,'bill_id'=>$bill_num]);
        Bill::where('bill_id',$bill_num)->update(['bill_settle' => 1]);
    }

    private function bill_number($table){
        $data = DB::table('bills')->where('table_id',$table)->where('bill_settle',0)->get();
        $bill_num = $data[0]->bill_id;
        return $bill_num;
    }

    public function render()
    {
        return view('livewire.pos');
    }
}
