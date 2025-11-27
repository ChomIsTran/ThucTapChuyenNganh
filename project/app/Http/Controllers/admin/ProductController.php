<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $products = Product::orderBy('id', 'desc')->get();
        view()->share(['products' => $products]);
    }

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.product.product-list', compact('products'));
    }
    public function create () {
        return view('admin.product.add');
    }
    public function store(Request $request){

        $products = Product::create(
            [
                'name'=>$request->name,
            ]
            );
        if($products)
            return redirect()->route('admin.product.index');
        else{
            return back();
        }
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $products = Product::find($id);
        $products->update([
            'name'=>$request->name,
        ]);
        if($products)
            return redirect()->route('admin.product.index');
        else
            return back();
    }
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        if($products)
            return redirect()->route('admin.product.index');
        else
            return back();
    }
}
