<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Item;
use App\Models\Cart;
use App\Models\Admin;
use App\Models\Order;
use App\Controllers\CartController;
use Illuminate\Support\Facades\Log;
use App\Traits\CartLogicTrait;
use App\Models\CartItem;
use DB;

class AdminController extends Controller
{
    public function getLogin(){
        // Admin::create([
        //     'email' => "admin@gmail.com",
        //     'password' => Hash::make("admin")
        // ]);
        return view('auth.adminLogin');
    }
    public function showDashboard(){
        $orders=Order::get();
        return view('adminDashboard',['orders'=>$orders]);
    }
    public function tryLogin(Request $request){
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('admin')->attempt($loginData)){
            return redirect(route('adminDash'));
    }
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

}