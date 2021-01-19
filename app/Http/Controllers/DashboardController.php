<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $purchesreturn = 0;
        $salereturn = 0;
        $total_revenue = $this->totalrevenuecalc();
        $week_revenue = $this->weekrevenuecalc();
        $today_revenue = $this->todayrevenuecalc();
        return view('dashboard',[
            'total_revenue'=>$total_revenue,
            'week_revenue'=>$week_revenue,
            'today_revenue'=>$today_revenue,
            'salereturn'=>$salereturn,
            'purchesreturn'=>$purchesreturn,
        ]);
    }

    protected function totalrevenuecalc(){
        $total = [];
        $total_revenue = 0;
        $bill = Bill::all();
        foreach ($bill as $key => $value) {
            $total[] = $bill[$key]['bill_total_amount'];
        }

        $total_revenue = array_sum($total);
        return $total_revenue;

    }

    protected function weekrevenuecalc(){
        $total = [];
        $week_revenue = 0;
        $bill = Bill::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        foreach ($bill as $key => $value) {
            $total[] = $bill[$key]['bill_total_amount'];
        }

        $week_revenue = array_sum($total);
        return $week_revenue;

    }

    protected function todayrevenuecalc(){
        $total = [];
        $today_revenue = 0;
        $bill = Bill::whereDate('created_at', Carbon::today())->get();
        foreach ($bill as $key => $value) {
            $total[] = $bill[$key]['bill_total_amount'];
        }

        $today_revenue = array_sum($total);
        return $today_revenue;

    }
}
