<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $tablename = $this->tablelist();
        return view('table',[
            'tablename'=>$tablename,
        ]);
    }

    public function tableadd(Request $request)
    {
        $table = new Table;
        $table->table_name = $request->tablename;
        $table->save();
        return redirect('/table')->with('message', 'Table inserted');
    }

    protected function tablelist(){
        $tablelist = Table::all();
        return $tablelist;
    }
    public function tabledelete($id)
    {
        Table::where('table_id',$id)->delete();
        return redirect('/table')->with('message', 'Table deleted');
    }
}
