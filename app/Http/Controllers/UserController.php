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
use DB;

class UserController extends Controller
{
    public function showall():View {
        $users = DB::table('users')->get();
        return view('users',['users'=>$users]);
    }
    public function remove(): RedirectResponse{
        DB::table('users')->delete();
        return redirect('/users');
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
         User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/users');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request) : RedirectResponse
    {
        $loginData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if (Auth::attempt($loginData)){
            $request->session()->regenerate();
            return redirect('/users');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
}