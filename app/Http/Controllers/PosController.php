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



}
