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
            'name' => 'shirt4',
        'description' => 'something',
        'price' => 22.5,

        'category' => 'shirts',
        'in_stock' => true,
        'imageUrl' => 'mmm.com',
        'size' => 'L',
        'weight' => '2.5'
        ]);
        DB::table('items')->insert([    
        'name' => 'shirt',
        'description' => 'something',
        'price' => 22.5,
        'category' => 'shirts',
        'in_stock' => true,
        'imageUrl' => 'mmm.com',
        'size' => 'L',
        'weight' => '2.5',
        ]);
        DB::table('items')->insert([    
            'name' => 'shirt2',
            'description' => 'something',
            'price' => 22.5,
            'category' => 'shirts',
            'in_stock' => true,
            'imageUrl' => 'mmm.com',
            'size' => 'L',
            'weight' => '2.5',
        ]);
        DB::table('items')->insert([    
            'name' => 'shirt3',
            'description' => 'something',
            'price' => 22.5,
            'category' => 'shirts',
            'in_stock' => true,
            'imageUrl' => 'mmm.com',
            'size' => 'L',
            'weight' => '2.5',
        ]);
        return redirect('/products');
    }
}