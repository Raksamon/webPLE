<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function userReg(request $request){
        $Name = $request->input('name');
        $mail = $request->input('email');
        $Pass = $request->input('pass');

        DB::table('users')->insert(
            ['name' =>$Name,
            'email' => $mail,
            'password' => Hash::make($Pass)]);

        return redirect('/login')->with('success','Please fill all required field.');
    }
  

}