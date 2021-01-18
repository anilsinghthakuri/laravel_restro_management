<?php

namespace App\Http\Controllers;

use App\Models\Companydata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class companydatacontroller extends Controller
{
    public function index()
    {
        $companyinfo=DB::table('companydatas')->first();
        return view('companyprofile',[
            'companyinfo'=>$companyinfo,
        ]);
    }

    public function update_company(Request $request)
    {
        $id = $request->company_id;
        $company = Companydata::find($id);
        $company->company_name  = $request->companyname;
        $company->company_address  = $request->companyaddress;
        $company->company_number = $request->companynumber;
        $company->company_logo = $request->companyimage;
        $company->company_currency = $request->companycurrency;
        $company->save();
        return redirect()->back();
    }


}
