<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
    public function show()
    {
        $getid= request()->user()->id;


        $carts=Cart::where('user_id', $getid)->get();


        $notdisplay = count($carts) > 0;






       return view('shoppingcart',['order'=>$carts,'condition'=>$notdisplay]);
    }

    public function store(){
        $productname=request()->get('productname');
        $productprice=request()->get('productprice');
        $productpicture=request()->get('productpicture');

        $userid=request()->user()->id;
        Cart::create([
            'ProductName'=>$productname,
            'ProductPrice'=>$productprice,
            'ProductPicture'=>$productpicture,
            'user_id'=>$userid
        ]);
        redirect('/cart');
    }
}
