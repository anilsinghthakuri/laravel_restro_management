<?php

namespace App\Http\Livewire;

use App\Http\Controllers\billprintcontroller;
use App\Models\Bill;
use App\Models\Order;
use Livewire\Component;

class Pos extends Component
{
    public $table  = 0;
    public $changeamount = 0;
    public $grandprice;
    public $payingamount = 0;

    protected $listeners = ['changecalc'];

    public function mount()
    {
        $this->payingamount = 0;
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

        }
        else{
            $orderdata = [];
            $bill = New Bill;
            $bill->table_id = $this->table;
            $bill->bill_total_amount = $this->grandprice;
            $bill->save();
            // Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1]);

            // $this->emit('billdata',$orderdata);

            // $this->emit('refreshaftersell');
            // dd($table);
            return redirect()->route('bill.print', [
                $table,

                ]);
        }

    }

    public function render()
    {
        return view('livewire.pos');
    }
}
