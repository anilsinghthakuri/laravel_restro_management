<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index()
    {
        $category = $this->categorylist();
        return view('add__product',[
            'categorylist'=>$category,
        ]);
    }

    public function showproduct()
    {
        $product = $this->productlist();
        return view('product__list',[
            'productlist'=>$product,
        ]);
    }

    public function addproduct(Request $request)
    {
        if (isset($request->productname) && isset($request->file)&& isset($request->category_id)) {


            if ($request->hasFile('file')) {

                $file = $request->file('file');
                $destinationPath = 'img/';
                $originalFile = $file->getClientOriginalName();
                $file->move($destinationPath, $originalFile);
                $file  = new Product;
                $file->product_name = $request->productname;
                $file->product_price = $request->productprice;
                $file->category_id = $request->category_id;
                $file->product_image = $originalFile;
                $file->save();
                return redirect('/product')->with('message', 'product upload');

                }
            }
        else{
            return redirect('/product');

        }
    }

    public function deleteproduct($id)
    {
        Product::where('product_id',$id)->delete();
        return redirect('/product')->with('message', 'product deleted');
    }

    public function categorylist()
    {
        $category = Category::all();
        return $category;
    }
    public function productlist()
    {
        $product = Product::all();
        return $product;
    }
}
