<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrdersExport;


class DashboardController extends Controller
{
    public function index()
    {
        $today_order_list =$this->order_table_data_of_today();
        $week_order_list =$this->order_table_data_of_week();
        $total_order_list =$this->order_table_data_of_total();

        $total_revenue = $this->totalrevenuecalc();
        $week_revenue = $this->weekrevenuecalc();
        $today_revenue = $this->todayrevenuecalc();
        return view('dashboard',[
            'total_revenue'=>$total_revenue,
            'week_revenue'=>$week_revenue,
            'today_revenue'=>$today_revenue,


            'today_order_list'=>$today_order_list,
            'week_order_list'=>$week_order_list,
            'total_order_list'=>$total_order_list,
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

    protected function order_table_data_of_today(){
        // $total = [];
        // $today_revenue = 0;
        $today_order = Order::where('bill_status',1)->whereDate('created_at', Carbon::today())->get();
        // foreach ($today_order as $key => $value) {
        //     $total[] = $today_order[$key]['bill_total_amount'];
        // }

        // $today_sum_of_sale = array_sum($total);

        return   $today_order;

    }

    protected function order_table_data_of_week(){
        // $total = [];
        // $today_revenue = 0;
        $week_order_list = Order::where('bill_status',1)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        // foreach ($today_order as $key => $value) {
        //     $total[] = $today_order[$key]['bill_total_amount'];
        // }

        // $today_sum_of_sale = array_sum($total);

        return   $week_order_list;

    }

    protected function order_table_data_of_total(){
        // $total = [];
        // $today_revenue = 0;
        $total_order_list = Order::where('bill_status',1)->get();

        // foreach ($today_order as $key => $value) {
        //     $total[] = $today_order[$key]['bill_total_amount'];
        // }

        // $today_sum_of_sale = array_sum($total);

        return   $total_order_list;

    }

    public function export()
    {
        return Excel::download(new OrdersExport, 'orders.xlsx');
    }
    public function exportpdf()

    {
        return (new OrdersExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::MPDF);
    }
}
