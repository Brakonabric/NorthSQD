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
use App\Controllers\CartController;
use Illuminate\Support\Facades\Log;
use App\Traits\CartLogicTrait;
use App\Models\CartItem;
use DB;

class UserController extends Controller
{
    use CartLogicTrait;
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
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Cart::create([
            'amount' => 0,
            'user_id' => $user->id
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
            $userCart = Cart::where('user_id',Auth::user()->id)->first();
            if($userCart){
                $cart = session()->get('cart');
                $products=CartItem::where('cart_id',$userCart->id)->get();
                foreach($products as $product){
                    $id = $product->item_id;
                    $item = Item::find($id);
            if(!$cart) {
                $cart= [
                    $id => [
                    "id" => $item->id,
                    "name" => $item->name,
                    "quantity" => $product->quantity,
                    "price" => $item->price,
                    "imagePath" => $item->imagePath
                ]];
            
            }
            else {
                $cart[$id] = [
                    "id" => $item->id,
                    "name" => $item->name,
                    "quantity" => $product->quantity,
                    "price" => $item->price,
                    "imagePath" => $item->imagePath
                ];
            }
                    }
                    session()->put('cart', $cart);
                }
                return redirect('/users');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
    }
    public function logout(Request $request) : RedirectResponse{
        Auth::logout();
        session()->flush();
        return redirect('/login');
    } 
}