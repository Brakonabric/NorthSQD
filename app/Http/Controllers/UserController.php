<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use DB;

class UserController extends Controller
{
    public function showall():View {
        $users = DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function fill():View {
        DB::table('users')->insert(
            array(
                   'id'     =>   '1', 
                   'email'   =>   'rain@gmail.com',
                   'username'   =>   'rainheart',
                   'password'   =>   '111'
            )
       );
       DB::table('users')->insert(
        array(
            'id'     =>   '2', 
            'email'   =>   'jang@gmail.com',
            'username'   =>   'janney',
            'password'   =>   '222'
    
     )
   );
        $users = DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
}