<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
//use App\Traits\CartLogicTrait;
use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    //use CartLogicTrait;
    public function addToCart(Request $request)
    {
        $id=$request->id;
        $size=$request->size;
        $color=$request->color;
        $cart = session()->get('cart');
        $item = Item::find($id);
        $cart_item_id=session()->get('cart_item_id');
        if(!$cart_item_id){
            $cart_item_id=0;
        }
        if(!$cart) {
            $cart= [
                $cart_item_id => [
                "id" => $item->id,
                "name" => $item->name,
                "quantity" => 1,
                "color"=> $color,
                "size"=> $size,
                "price" => $item->price,
                "imagePath" => $item->imagePath
            ]];
        session()->put('cart', $cart);
        $cart_item_id++;
        session()->put('cart_item_id',$cart_item_id);
        return redirect('saveCart')->with('success', 'Product added to cart successfully!');
                }
            foreach($cart as $key => $cart_item){
                if(($cart_item['id']==$id) && ($size==$cart_item['size'])
                 && ($color==$cart_item['color'])){
                    // $cart_item['quantity']++;
                    $cart[$key]['quantity']++;
                    session()->put('cart', $cart);
                    $cart_item_id++;
                    session()->put('cart_item_id',$cart_item_id);
                    return redirect('saveCart')->with('success', 'Product added to cart successfully!');
                }
            }
            $cart[$cart_item_id]= [
                "id" => $item->id,
                "name" => $item->name,
                "quantity" => 1,
                "color"=> $color,
                "size"=> $size,
                "price" => $item->price,
                "imagePath" => $item->imagePath
            ];
        session()->put('cart', $cart);
        $cart_item_id++;
        session()->put('cart_item_id',$cart_item_id);
        return redirect('saveCart')->with('success', 'Product added to cart successfully!');
    }
public function removeFromCart(Request $request)
    {
        $cart = session()->get('cart');
        foreach($cart as $key => $cart_item){
            if(($cart_item['id']==$request->id && $cart_item['color']==$request->color
            && $cart_item['size']==$request->size)){
                if($cart[$key]['quantity']>1){
                    $cart[$key]['quantity']--;
                    session()->put('cart', $cart);
                    return redirect('saveCart')->with('success', 'Product added to cart successfully!');
                }
                else{
                    unset($cart[$key]);
                    session()->put('cart', $cart);
                    return redirect('saveCart')->with('success', 'Product added to cart successfully!');
                }
                return redirect('saveCart')->with('success', 'Product added to cart successfully!');
            }
        }
    }
}