<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use DB;

class ProductListController extends Controller
{
    public function index():View {

    }
    public function showall():View {
        $items = DB::table('items')->get();
        return view('products',['items'=>$items]);
    }
}