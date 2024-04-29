<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {

        $products=Product::paginate(8);
        return view('products',['products'=>$products,'condition'=>false]);

    }

    public function filter(){
        $brandname=request()->get('brandname');
        $products=Product::where(['BrandName'=>$brandname])->get();


      if ($products->isEmpty()){
          $notdisplay=false;
          abort(404);

      }
      else{
          $notdisplay=true;
          return view('products',['products'=>$products,'condition'=>$notdisplay]);
      }

    }
}
