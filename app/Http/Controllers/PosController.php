<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index($id)
    {
        // dd($id);

        return view('pos',[
            'table'=>$id
        ]);
    }
    public function waiter_index()
    {
        // dd($id);
        $id = 0;
        return view('pos',[
            'table'=>$id
        ]);
    }


}
