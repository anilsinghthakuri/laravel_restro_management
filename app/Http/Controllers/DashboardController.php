<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $purchesreturn = 0;
        $salereturn = 0;
        $total_revenue = $this->revenuecalc();
        return view('dashboard',[
            'total_revenue'=>$total_revenue,
            'salereturn'=>$salereturn,
            'purchesreturn'=>$purchesreturn,
        ]);
    }

    protected function revenuecalc(){
        $total = [];
        $total_revenue = 0;
        $bill = Bill::all();
        foreach ($bill as $key => $value) {
            $total[] = $bill[$key]['bill_total_amount'];
        }

        $total_revenue = array_sum($total);
        return $total_revenue;

    }
}
