<?php

namespace App\Http\Controllers\API;
use App\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function getList(Request $request){
        $shops = Shop::all();
        dd($shops);
        return response()->json($shops);
    }
}
