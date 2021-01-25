<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense_list = $this->pull_expense_list();
        return view('expenselist',[
            'expense_list'=>$expense_list,
        ]);
    }

    public function show_expense_add()
    {
        $expense_category = $this->pull_expense_category();

        return view('add_expense',[
            'expense_category'=>$expense_category,
        ]);
    }

    public function add_expense_list(Request $request)
    {
        if (isset($request->expense_category_id) && isset($request->expensebill) && isset($request->expenseprice) && isset($request->expensevendor) && isset($request->expenseremark) ) {

            $expense = new Expense;
            $expense->expense_category_id = $request->expense_category_id;
            $expense->expense_bill = $request->expensebill;
            $expense->expense_price = $request->expenseprice;
            $expense->expense_vendor = $request->expensevendor;
            $expense->expense_remark = $request->expenseremark;
            $expense->save();

            return redirect('/expense-list')->with('message', 'Expense upload');

        }

        elseif (isset($request->expense_category_id) && isset($request->expensebill) && isset($request->expenseprice) && isset($request->expensevendor)  ) {

            $expense = new Expense;
            $expense->expense_category_id = $request->expense_category_id;
            $expense->expense_bill = $request->expensebill;
            $expense->expense_price = $request->expenseprice;
            $expense->expense_vendor = $request->expensevendor;
            $expense->save();

            return redirect('/expense-list')->with('message', 'Expense upload');

        }
        elseif (isset($request->expense_category_id) && isset($request->expensebill) && isset($request->expenseprice)  ) {

            $expense = new Expense;
            $expense->expense_category_id = $request->expense_category_id;
            $expense->expense_bill = $request->expensebill;
            $expense->expense_price = $request->expenseprice;
            $expense->save();

            return redirect('/expense-list')->with('message', 'Expense upload');

        }
        elseif (isset($request->expense_category_id) && isset($request->expenseprice)  ) {

            $expense = new Expense;
            $expense->expense_category_id = $request->expense_category_id;
            $expense->expense_price = $request->expenseprice;
            $expense->save();

            return redirect('/expense-list')->with('message', 'Expense upload');

        }
        else{
            return redirect('/expense-add')->with('message', 'Add every inputs upload');

        }

    }

    public function show_expense_category()
    {
        $expense_category = $this->pull_expense_category();
        return view('add__expense_category',[
            'expense_category'=>$expense_category,
        ]);
    }

    public function add_expense_category(Request $request)
    {
        if (isset($request->categoryname)) {
            DB::table('categories_expense')->insert([
                'expense_category_name' => $request->categoryname,

            ]);
            return redirect('/expense-category')->with('message', 'Category  upload');

        }

    }

    private function pull_expense_category(){
        $expense_category = DB::table('categories_expense')->get();
        return $expense_category;
    }

    private function pull_expense_list(){
        $expense_list = Expense::all();
        return $expense_list;
    }
}
