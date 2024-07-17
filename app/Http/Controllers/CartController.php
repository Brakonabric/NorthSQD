<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
//use App\Traits\CartLogicTrait;
use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function showCart(){
        $cart = session()->get('cart');
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
                'size' => $id['size'],
                'color' => $id['color'],
                'quantity' => $id['quantity']
            ]);
            $userDBCart->amount+=$id['price']*$id['quantity'];
        }
        $userDBCart->save();
        return redirect()->back()->with('success', 'Cart items were uploaded to db');
    }
    return redirect()->back()->with('message', 'The user is not logged in');
    }
    public function showCheckout(){
        $cart = session()->get('cart');
        $user = Auth::user();
        $order=[
            'cart'=>$cart,
            'user'=>$user
        ];
        return view('checkout',['order'=>$order]);
    }
    public function checkout(Request $request){
        $checkoutData = $request->validate([
            'pacomat' => ['required'],
            'terminal' => ['required'],
            'email' =>['email','nullable'],
            'name' => ['required'],
            'surname' => ['required'],
            'phone' => ['required','digits:8'],
            'payment' => ['required'],
            'policyAccept' => ['accepted'],
            'termsAccept' => ['accepted'],
            'cost' => ['required']
        ]);
        $order = Order::create([
            'delivery' => $request->pacomat,
            'terminal' => $request->terminal,
            'name' => $request->name,
            'surname' => $request->surname,
            'phone' => $request->phone,
            'email' =>$request->email,
            'payment' => $request->payment,
            'cost' => ((double)$request->cost+((double)($request->pacomat=='latvijasPasts' ? 2.99 : 1.99)))
        ]);
        $cart = session()->get('cart');
        if(!$cart){
            return redirect('/error');
        }
        foreach($cart as $id){
            OrderItem::create([
                'item_id' => $id['id'],
                'color' => $id['color'],
                'size' => $id['size'],
                'order_id' => $order->id
            ]);
        }
        $successOrder= [
            'cart'=>$cart,
            'checkoutData'=>$checkoutData,
            'email'=>$request->email
            ];
        $cart=[];
        session()->put('cart', $cart);
        return view('success',['order'=>$successOrder]);
    }
}