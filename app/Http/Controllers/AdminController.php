<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    //user -admin

    public function userIndex(){
        return view('Admin.User.index');
    }

    public function userCreate(){
        return view('Admin.User.create');
    }

    // 
    public function userStore(Request $request){

        User::create([
            // 1st name in "" is the one in the migration schema and colunm name in the db, while the 2nd one in no quotes is the name = 'bla bla blah' that i have previously writen in my view for each input box
            "firstname" => $request -> firstname,
            "lastname" => $request -> lastname,
            "email" => $request -> email,
            "password" => Hash::make($request -> get('password'))
        ]);
        return view('Admin.User.index');
    }

    public function userEdit(){
        return view('Admin.User.edit');
    }


}
 