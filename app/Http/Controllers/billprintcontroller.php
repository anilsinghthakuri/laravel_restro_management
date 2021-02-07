<?php

namespace App\Http\Controllers;

require __DIR__ . '/../../../vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;


use App\Models\Bill;
use App\Models\Companydata;
use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class billprintcontroller extends Controller
{
    public function test($table)
    {
        dd($table);
    }

     public function index($table)
     {
         $companydata = $this->pull_company_data();
         $bill_num  = $this->bill_number();
         $bill_data = $this->pull_bill_data($bill_num);
         $table_name = $bill_data->table->table_name;
         $customer = $bill_data->customer->customer_username;
         $datentime = $bill_data->created_at;
          dd($customer);

         $total = [];
         $orderdata = Order::where('table_id',$table)->where('bill_status',0)->with('product')->get();
         foreach ($orderdata as $key => $value)
          {
          $total[] = $orderdata[$key]['order_subprice'];
          }

         if($total == null){

         }
         else{
             $total_price = array_sum($total);
             Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1,'bill_id'=>$bill_num]);


         return view('billprint',[
             'total_price'=>$total_price,
             'orderdata'=>$orderdata,
             'table_name'=>$table_name,
             'customer'=>$customer,
             'companydata'=>$companydata,
             'datentime'=>$datentime,
         ]);
        }
    }
}

//      public function index($table)
//      {
//           $table = 1;
//          dd($table);
//          $companydata = $this->pull_company_data();
//          $bill_num  = $this->bill_number();
//          $bill_data = $this->pull_bill_data($bill_num);
//          $table_name = $bill_data->table->table_name;
//          $customer = $bill_data->customer->customer_username;
//          $datentime = $bill_data->created_at;

//          $total = [];
//          $orderdata = Order::where('table_id',$table)->where('bill_status',0)->with('product')->get();
//          foreach ($orderdata as $key => $value)
//           {
//           $total[] = $orderdata[$key]['order_subprice'];
//           }

//          if($total == null){

//          }
//          else{
//              $total_price = array_sum($total);
//              Order::where('table_id',$table)->where('bill_status',0)->update(['bill_status' => 1,'bill_id'=>$bill_num]);



//          try {
//              $connector = new WindowsPrintConnector("pos");

//              $printer = new Printer($connector);

//               fake data
//              $items = [];  Or array()

//               while($fetch = mysqli_fetch_assoc($dd)){
//                   $items[] = new item($fetch['item'], $fetch['price']);
//               }


//              header of bill
//              $printer->setJustification(Printer::JUSTIFY_CENTER);
//              $printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH);
//              $printer->text("Dotsoft Ltd.\n");
//              $printer->selectPrintMode();
//              $printer->text("Dhangadhi,Kailali.\n");
//              $printer->feed();

//              Bill type
//              $printer->setEmphasis(true);
//              $printer->text("SALES INVOICE\n");
//              $printer->setEmphasis(false);

//              bill body
//              $printer->setJustification(Printer::JUSTIFY_LEFT);


//               foreach ($items as $item) {
//                   $printer->text($item->getAsString(32));  for 58mm Font A
//               }


//              footer
//              $printer->feed(2);
//              $printer->setJustification(Printer::JUSTIFY_CENTER);
//              $printer->text("Thank you for shopping\n");
//              $printer->text("at Dotsoft\n");
//              $printer->text("For trading hours,\n");
//              $printer->text("please visit example.com\n");
//              $printer->feed(2);

//              close and cut paper
//              $printer->cut();
//              $printer->pulse();


//          }
//          catch (Exception $e) {
//              echo $e->getMessage();
//          } finally {
//              $printer->close();
//          }
//      }

//      }

//     private function pull_bill_data($id){
//         $bill_data = Bill::find($id);
//         return $bill_data;
//     }
//     private function bill_number(){
//         $bill_num = Bill::max('bill_id');
//        return $bill_num;
//     }

//     private function pull_company_data()
//     {
//         $companydata = DB::table('companydatas')->first();
//         return $companydata;
//     }
// }

// class item
// {
//     private $name;
//     private $price;
//     private $dollarSign;

//     public function __construct($name = '', $price = '', $dollarSign = false)
//     {
//         $this->name = $name;
//         $this->price = $price;
//         $this->dollarSign = $dollarSign;
//     }

//     public function getAsString($width = 48)
//     {
//         $rightCols = 10;
//         $leftCols = $width - $rightCols;
//         if ($this->dollarSign) {
//             $leftCols = $leftCols / 2 - $rightCols / 2;
//         }
//         $left = str_pad($this->name, $leftCols);

//         $sign = ($this->dollarSign ? '$ ' : '');
//         $right = str_pad($sign . $this->price, $rightCols, ' ', STR_PAD_LEFT);
//         return "$left$right\n";
//     }

//     public function __toString()
//     {
//         return $this->getAsString();
//     }

// }
