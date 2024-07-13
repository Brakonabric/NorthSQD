<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
//use App\Traits\CartLogicTrait;
use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    //use CartLogicTrait;
    public function addToCart($id)
    {
        $cart = session()->get('cart');
        $item = Item::find($id);
        if(!$cart) {
            $cart= [
                $id => [
                "id" => $item->id,
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
                "imagePath" => $item->imagePath
            ]];
        session()->put('cart', $cart);
        return redirect('saveCart')->with('success', 'Product added to cart successfully!');
        }
        else if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect('saveCart')->with('success', 'Product added to cart successfully!');
        }
        else {
            $cart[$id]= [
                "id" => $item->id,
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
                "imagePath" => $item->imagePath
            ];
        session()->put('cart', $cart);
        return redirect('saveCart')->with('success', 'Product added to cart successfully!');
    }
}
public function removeFromCart($id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            if($cart[$id]['quantity']>1){
                $cart[$id]['quantity']--;
                session()->put('cart', $cart);
                return redirect('saveCart')->with('success', 'Product added to cart successfully!');
            }
            else{
                $cart = array_splice($cart,$id,1);
                session()->put('cart', $cart);
                return redirect('saveCart')->with('success', 'Product added to cart successfully!');
            }
            return redirect('saveCart')->with('success', 'Product added to cart successfully!');
        }
        return redirect('saveCart')->with('success', 'Product added to cart successfully!');
    }
}