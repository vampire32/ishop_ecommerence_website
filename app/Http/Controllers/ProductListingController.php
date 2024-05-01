<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListingController extends Controller
{
    public function show(){
        $products=Product::all();
        return view('productlisting',['products'=>$products]);
    }

    public function destroy()
    {
        $productid=request()->get('productid');
        $products=Product::find($productid);
        $products->delete();

        redirect('/aadmin/products');

    }

    public function update()
    {
        $productid=request()->get('productid');
        $ProductName=request()->get('ProductName');
        $ProductPrice=request()->get('ProductPrice');
        $ProductDescription=request()->get('ProductDescription');
        $Category=request()->get('Category');
        $products=Product::find($productid);
        $products->update([
            'ProductName'=>$ProductName,
            'ProductPrice'=>$ProductPrice,
            'ProductDescription'=>$ProductDescription,
            'Category'=>$Category

        ]);

        redirect('/admin/products');

    }
}
