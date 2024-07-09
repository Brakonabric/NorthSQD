<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use DB;

class ProductListController extends Controller
{
    public function index():View {

    }
    public function showall():View {
        $items = DB::table('items')->get();
        return view('products',['items'=>$items]);
    }
    public function fill(): RedirectResponse{
        DB::table('items')->delete();
        Item::create([
            'name' => 'shirt1',
        'description' => 'something',
        'price' => 22.5,

        'category' => 'shirts',
        'in_stock' => true,
        'imageUrl' => 'mmm.com',
        'size' => 'L',
        'weight' => '2.5'
        ]);
        Item::create([
            'name' => 'shirt2',
        'description' => 'something',
        'price' => 22.5,

        'category' => 'shirts',
        'in_stock' => true,
        'imageUrl' => 'mmm.com',
        'size' => 'L',
        'weight' => '2.5'
        ]);
        Item::create([
            'name' => 'shirt3',
        'description' => 'something',
        'price' => 22.5,

        'category' => 'shirts',
        'in_stock' => true,
        'imageUrl' => 'mmm.com',
        'size' => 'L',
        'weight' => '2.5'
        ]);
        return redirect('/products');
    }
    public function getProduct($id){
        try{
        $item = Item::find($id);
        if(empty($item)){
            throw new \Exception('Product not found');
        }
            return view('product',['item'=>$item]);
        }
        catch(\Exception $e){
            
            return redirect('/error');
        }
    }
}