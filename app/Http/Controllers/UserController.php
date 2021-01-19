<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('adduser');
    }

    public function adduser(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $hashedpassword = Hash::make($request->password);
        $user->password = $hashedpassword;
        $user->save();
    }

    public function userlist()
    {   $userlist = $this->userlistfetch();
        return view('userlist',[
            'userlist'=>$userlist,
        ]);
    }
    protected function userlistfetch(){
        $userlist = User::all();
        return $userlist;
    }
}
