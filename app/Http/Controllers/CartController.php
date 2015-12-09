<?php

namespace Alyya\Http\Controllers;

use Alyya\Models\AlyyaProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use Alyya\Http\Requests;
use Alyya\Http\Controllers\Controller;

class CartController extends Controller
{

    public function add(Request $request,$product_id = 1){
        //Cart::destroy();
        $this->validate($request,[
            'quantityToAdd'=>'required',
            'product_id'=>'required',
        ]);
//        So, what if the incoming request parameters do not pass the given validation rules? As mentioned previously, Laravel will automatically redirect the user back to their previous location. In addition, all of the validation errors will automatically be flashed to the session.
        $quantityToAdd = $request->quantityToAdd;
        $product = AlyyaProduct::where('sku',$request->product_id)->first();
        $res = Cart::associate('AlyyaProduct','Alyya\Models')->add($product->sku, $product->name , $quantityToAdd ,$product->price, array('size' => 'large'));
        if($request->ajax()){
            return response()->json(Cart::content());
        }
        return response()->json(Cart::content());//hen the response helper is called without arguments, an implementation of the Illuminate\Contracts\Routing\ResponseFactory contract is returned.
    }


}