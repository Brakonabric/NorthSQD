<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Item;
use App\Models\ItemColor;
use App\Models\ItemSize;
use DB;

class ProductListController extends Controller
{
    public function showall():View {
        $items = DB::table('items')->get();
        return view('plp',['items'=>$items]);
    }
    public function showall2():View {
        $items = DB::table('items')->get();
        return view('home',['items'=>$items]);
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
    }
        catch(\Exception $e){

            return redirect('/error');
        }
            $size=null;
            $color = ItemColor::where('item_id', $id)->first();
            if($color){
            $size = ItemSize::where('color_id', $color->id)->first();
            }

                $items=[
                    'item'=>$item,
                    'color'=>$color,
                    'size'=>$size
                ];  
            return view('product',['items'=>$items]);
        
    }
    public function addProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'imageUrl' => 'required',
            'size' => 'required',
            'weight' => 'required'
        ]);
        
        $item = Item::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'category' => $request->category,
        #'in_stock' => $request->has('in_stock'),
        'imageUrl' => $request->imageUrl,
        'weight' => $request->weight,
        'discount' => $request->discount
        ]);
        // foreach($request->colors as $color){
        //     if(array_key_exists("name",$color)){
        //     $color = ItemColor::create([
        //        'in_stock' =>array_key_exists("instock",$color),
        //        'color' =>$color["name"],
        //        'item_id' =>$item->id
        //     ]);
        //     $sizes=explode(";",$color["sizes"]);
        //     foreach($sizes as $size){
        //         $sizeElements=explode(",",$size);
        //         $instock;
        //         $sizeEl;
        //         foreach($sizeElements as $sizeElement){
        //             if($sizeElement === 1 || $sizeElement === 0){
        //                 $instock=$sizeElement; 
        //              }
        //              else{
        //                  $sizeEl=$sizeElement;
        //              }
        //         }
        //         ItemSize::create([
        //            'in_stock' =>$instock,
        //            'size' =>$sizeEl,
        //            'color_id' =>$color->id
        //         ]);
        //     }
        // }
        // }
        
        return redirect('products');
    }
    public function showAddProductForm()
    {
        return view('addProduct');
    }
}