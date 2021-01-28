<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleReportController extends Controller
{
    public function index_total_sale()
    {
        $total_sale_report = $this->fetch_total_sale_report();
        return view('sale_report.total_sale',[
            'total_sale_report'=>$total_sale_report,
        ]);
    }

    private function fetch_total_sale_report(){
        $total_sale_report = Bill::all();

        return $total_sale_report;
    }
}
