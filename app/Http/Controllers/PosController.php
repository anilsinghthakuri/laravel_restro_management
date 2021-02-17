<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Table;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $table_data  = Table::find($id);
        $grandprice = $table_data->table_total_amount;

        return view('cashierpos',[
            'table'=>$id,
            'grandprice'=>$grandprice,
        ]);

    }



}
