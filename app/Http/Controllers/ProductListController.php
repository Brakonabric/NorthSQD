<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use App\Models\Item;
use App\Models\ItemColor;
use App\Models\ItemImage;
use App\Models\ItemSize;
use DB;

class ProductListController extends Controller
{
    public function showall():View {
        $itemCount = Item::get() -> count();
        $items = Item::inRandomOrder() -> paginate(12);
        return view('plp',['items'=>$items,'itemCount' => $itemCount,'title' => 'SHOP ALL']);
    }
    public function search(Request $request):View {
//        if($request->category){
//            $word = $request->category;
//            $items = Item::where('category',$word)->paginate(10);
//            return view('plp',['items'=>$items]);
//        }
        $word=$request->input('q');
        $items = Item::where('name','like',"%{$word}%")->paginate(10);
        return view('plp',['items'=>$items]);
    }

    public function category(Request $request):View {
        $word=$request->category;
        $itemCount = Item::where('category',$word) -> count();
        $items = Item::where('category',$word)->paginate(10);
        return view('plp',['items'=>$items, 'itemCount' => $itemCount, 'title' => $word ]);
    }

    public function collection(Request $request):View {
        $word = $request->collection;
        $itemCount = Item::where('category',$word) -> count();
        $items = Item::where('collection',$word)->paginate(10);
        return view('plp',['items'=>$items, 'itemCount' => $itemCount, 'title' => $word ]);
    }

    public function sales():View {
        $items = Item::whereNotNull('discount')->paginate(10);
        $itemCount = Item::whereNotNull('discount') -> count();
        return view('plp', ['items' => $items,  'itemCount' => $itemCount, 'title' => 'SALE' ]);
    }


    public function homeSlider():View {
        $items = Item::inRandomOrder()->take(8)->get();
        return view('home',['items'=>$items]);
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
            $images = ItemImage::where('color_id', $id)->get();
            $colors = ItemColor::where('item_id', $id)->get();
            $sizes=[];
            foreach ($colors as $color) {
                $gottenSizes = ItemSize::where('color_id', $color->id)->get();
                
                if($gottenSizes){
                $colorSize = [
                    'color' => $color->color,
                    'sizes' => $gottenSizes,
                ];
                $sizes[$color->color]=$gottenSizes;
            }
            }


                $items=[
                    'item'=>$item,
                    'colors'=>$colors,
                    'sizes'=>$sizes,
                    'images'=>$images
                ];  
            return view('product',['items'=>$items]);
        
    }
    public function addProduct(Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'imagePreview' => 'required',
            'size' => 'required',
            'weight' => 'required'
        ]);
        
        $item = Item::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'category' => $request->category,
        #'in_stock' => $request->has('in_stock'),
        'imagePreview' => $request->imagePreview,
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