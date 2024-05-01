<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderlistingController extends Controller
{
    public function show()
    {
         $orders=DB::table('users')->join('orders','users.id','=','orders.user_id')->get();
        return view('orderlisting',['orders'=>$orders]);

    }

    public function update(){
        $orderid=request()->get('orderid');
        $order=Order::find($orderid);
        $status=request()->get('status');
        $order->update([
            'status'=>$status

        ]);

        redirect('/admin/orders');
    }
}
