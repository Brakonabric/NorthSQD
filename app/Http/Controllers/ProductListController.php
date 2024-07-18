<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Item;
use App\Models\ItemColor;
use App\Models\ItemImage;
use App\Models\ItemSize;

class ProductListController extends Controller
{
    public function showall():View {
        $itemCount = Item::get() -> count();
        $items = Item::inRandomOrder() -> get();
        return view('plp',['items'=>$items,'itemCount' => $itemCount,'title' => 'SHOP ALL']);
    }

    // routes/web.php
    public function search(Request $request)
    {
        $query = $request->get('query', '');

        if ($query) {
            $items = Item::where('name', 'LIKE', '%' . $query . '%')
                ->orWhere('collection', 'LIKE', '%' . $query . '%')
                ->orWhere('category', 'LIKE', '%' . $query . '%')
                ->get();
        } else {
            $items = collect(); // Empty collection if no query
        }

        return response()->json($items);
    }

    public function searchRedirect(Request $request):View {
        $word=$request-> search;
        $items = Item::where('name', 'LIKE', '%' . $word . '%')
            ->orWhere('collection', 'LIKE', '%' . $word . '%')
            ->orWhere('category', 'LIKE', '%' . $word . '%')
            ->paginate(12);
        $itemCount = $items -> count();
        return view('plp',['items'=>$items, 'title' => 'Similar to: ' . $word, 'itemCount' => $itemCount]);
    }



    public function category(Request $request):View {
        $word=$request->category;
        $itemCount = Item::where('category',$word) -> count();
        $items = Item::where('category',$word)->paginate(12);
        return view('plp',['items'=>$items, 'itemCount' => $itemCount, 'title' => $word ]);
    }

    public function collection(Request $request):View {
        $word = $request->collection;
        $itemCount = Item::where('collection',$word) -> count();
        $items = Item::where('collection',$word)->paginate(12);
        return view('plp',['items'=>$items, 'itemCount' => $itemCount, 'title' => $word ]);
    }

    public function sales():View {
        $items = Item::whereNotNull('discount')->paginate(12);
        $itemCount = Item::whereNotNull('discount') -> count();
        return view('plp', ['items' => $items,  'itemCount' => $itemCount, 'title' => 'SALE' ]);
    }


    public function homeSlider():View {
        $items = Item::inRandomOrder()->take(8)->get();
        return view('home',['items'=>$items]);
    }

    public function getProduct($id){
        $items = Item::inRandomOrder() -> paginate(5);
        try{
        $item = Item::find($id);
        if(empty($item)){
            throw new \Exception('Product not found');
        }
    }
        catch(\Exception $e){
            return redirect('/error');
        }
            $colors = ItemColor::where('item_id', $id)->get();
            // reset($colors);
            // dd($colors[0]->id);
      
            $sizes=[];
            $images=[];
            foreach ($colors as $color) {
                $gottenSizes = ItemSize::where('color_id', $color->id)->get();
                $gottenImages = ItemImage::where('color_id', $color->id)->get();

                if($gottenSizes){
                $sizes[$color->color]=$gottenSizes;
                }
                if($gottenImages){
                    $images[$color->color]=$gottenImages;
                }
            }


                $products=[
                    'item'=>$item,
                    'colors'=>$colors,
                    'sizes'=>$sizes,
                    'images'=>$images
                ];  
            return view('product',['products'=>$products],['items'=>$items]);
        
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