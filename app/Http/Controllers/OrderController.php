<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(){
        $getid= request()->user()->id;


        $carts=Cart::where('user_id', $getid)->get();

        return view('checkout',['order'=>$carts]);

    }

    public function store(){
        $productdetails=$this->show()->order;


        foreach ($productdetails as $products){
            $productget=$products;
        }

        $userid=request()->user()->id;
        $address=request()->get('address');
        $quantity=request()->get('quantity');
        $total=request()->get('total');

        Order::create([
            'ProductName'=>$productget['ProductName'],
            'ProductPrice'=>$total,
            'ProductPicture'=>$productget['ProductPicture'],
            'status'=>'pending',
            'user_id'=>$userid,
            'Address'=>$address,
            'Quantity'=>$quantity
        ]);

        echo "Order Submitted Successfully";



    }

    public function update()
    {

    }
    public function destroy(){

    }
}
