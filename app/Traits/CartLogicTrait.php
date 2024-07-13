<?php
namespace App\Traits;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use DB;
trait CartLogicTrait {
    public function addToCart($id) {
        $cart = session()->get('cart');
        $item = Item::find($id);
        $this->info('Display this on the screen');
        echo('ddd');
        if(!$cart) {
            $cart= [
                $id => [
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
                "imagePath" => $item->imagePath
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
                "name" => $item->name,
                "quantity" => 1,
                "price" => $item->price,
                "imagePath" => $item->imagePath
            ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
}