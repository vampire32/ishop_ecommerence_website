<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(){
        $attributes=request()->validate([
            'ProductName'=>'required',
            'ProductDescription'=>'required',
            'BrandName'=>'required',
            'ProductPrice'=>'required',
            'ProductPicture'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Category'=>'required',
        ]);
        $ProductName=request()->get('ProductName');
        $ProductDescription=request()->get('ProductDescription');
        $BrandName=request()->get('BrandName');
        $ProductPrice=request()->get('ProductPrice');
        $Category=request()->get('Category');
        $picturePath = request()->file('ProductPicture')->store('pictures', 'public');

        Product::create([
            'ProductName'=>$ProductName,
            'ProductDescription'=>$ProductDescription,
            'BrandName'=>$BrandName,
            'ProductPrice'=>$ProductPrice,
            'ProductPicture'=>$picturePath,
            'Category'=>$Category,

        ]);

        redirect('/');
    }
}
