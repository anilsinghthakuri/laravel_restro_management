<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use App\Models\Table;
use Livewire\Component;

class Possale extends Component
{
    public $order = [];
    public $table;
    public $tableid = [];
    public $totalprice  = 0;
    public $shipping = 0;
    public $discount =0;
    public $grandprice = 0;
    public $listeners = ['orderadd'];


    public function mount()
    {
        $this->shipping = 0;
        $this->discount = 0;
        $this->tableid = $this->tablenameid();
        $this->table = 0;
        $this->order  = Order::where('table_id',$this->table)->where('bill_status',0)->get();
        $this->totalprice = $this->totalamt();
        $this->grandprice = $this->grandpricecalc();

    }
    public function updatedTable()
    {
        $this->order  = Order::where('table_id',$this->table)->where('bill_status',0)->get();
        $this->totalprice = $this->totalamt();
        $this->grandprice = $this->grandpricecalc();


    }
    public function orderadd($id)
    {
        // dd($id);
        $order = new Order;
        $order->table_id = $this->table;
        $order->product_id = $id;
        $product = Product::Find($id);

        $price = $product['product_price'];

        $order->order_quantity = 1;
        $order->order_subprice = $price;
        $order->save();

        $this->totalprice = $this->totalprice + $price;
        $this->grandprice = $this->grandpricecalc();


        $this->order  = Order::where('table_id',$this->table)->where('bill_status',0)->get();
    }

    public function inc($order_id)
    {
        // dd($order_id);
        $order = [];
        $quant = 0;
        $subprice = 0;
        $price = 0;
        $order = Order::Find($order_id);


        $product_id = $order['product_id'];
        $product = Product::Find($product_id);
        $price = $product['product_price'];


        $quant = $order['order_quantity'];
        $quant ++;
        $subprice = $price*$quant;
        $order['order_quantity'] = $quant;
        $order['order_subprice'] = $subprice;
        $order->save();

        $this->totalprice = $this->totalamt();
        $this->grandprice = $this->grandpricecalc();


        $this->order  = Order::where('table_id',$this->table)->where('bill_status',0)->get();

    }
    public function dec($order_id)
    {
        // dd($order_id);
        $order = [];
        $quant = 0;
        $subprice = 0;
        $price = 0;
       $order = Order::Find($order_id);
        if ($order['order_quantity'] > 1) {
            $product_id = $order['product_id'];
            $product = Product::Find($product_id);
            $price = $product['product_price'];

            $quant = $order['order_quantity'];
            $quant --;
            $subprice = $price*$quant;

            $order['order_quantity'] = $quant;
            $order['order_subprice'] = $subprice;
            $order->save();

            $this->totalprice = $this->totalamt();
            $this->grandprice = $this->grandpricecalc();


            $this->order  = Order::where('table_id',$this->table)->where('bill_status',0)->get();
        }
    }

    public function totalamt()
    {
        $total = [];
        $total_price = 0;

        $order = Order::where('table_id',$this->table)->where('bill_status',0)->get();
        foreach ($order as $key => $value) {
            $total[] = $order[$key]['order_subprice'];
        }

        $total_price = array_sum($total);
        return $total_price;
    }
    public function deleteorder($order_id)
    {
        // dd($order_id);
        $order = Order::Find($order_id);
        $subprice = $order['order_subprice'];
        $this->totalprice = $this->totalprice - $subprice;
        $this->grandprice = $this->grandpricecalc();


        Order::where('order_id',$order_id)->delete();
        $this->order  = Order::where('table_id',$this->table)->where('bill_status',0)->get();
    }
    public function tablenameid()
    {
        $tableid = [];
        $table = Table::all();
        foreach ($table as $key => $value) {
            $tableid[] = $table[$key]['table_id'];
        }
        return $tableid;
    }
    public function grandpricecalc()
    {
        $grandprice = $this->totalprice + $this->shipping - $this->discount;
        return $grandprice;
        $this->emitTo('pos','grandprice',$this->table);
    }



    public function render()
    {
        return view('livewire.possale');
    }
}
