<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
//use App\Traits\CartLogicTrait;
use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart(){
        $cart = session()->get('cart');
        // if(!$cart){
        //     return back()->withErrors(['empty' => 'The cart is empty']);
        // }
        return view('cart',['cart'=>$cart]);
    }
    public function saveCart(){
        $user = Auth::user();
        if($user){
        $cart = session()->get('cart');
        $userDBCart = Cart::where('user_id',Auth::user()->id)->first();
        CartItem::where('cart_id',$userDBCart->id)->delete();
        foreach($cart as $id){
            CartItem::create([
                'item_id' => $id['id'],
                'cart_id' => $userDBCart->id,
                // 'size' => $id['size'],
                'quantity' => $id['quantity']
            ]);
            $userDBCart->amount+=$id['price']*$id['quantity'];
        }
        $userDBCart->save();
        return redirect()->back()->with('success', 'Cart items were uploaded to db');
    }
    return redirect()->back()->with('message', 'The user is not logged in');
    }
}