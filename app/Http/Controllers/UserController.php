<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function remove():View {
        DB::table('users')->delete();
        $users = DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
 
        $username = $request->username;
        $password = $request->password;
        $email= $request->email;
        DB::table('users')->insert(
            array(
                'email'   =>   $email,
                'username'   =>   $username,
                'password'   =>   $password
         )
            );
        $users = DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
}