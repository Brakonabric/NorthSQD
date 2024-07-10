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
                "imageUrl" => $item->imageUrl
            ]];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        else if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        else {
            $cart[$id]= [
                "id" => $item->id,
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
                "imageUrl" => $item->imageUrl
            ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
}