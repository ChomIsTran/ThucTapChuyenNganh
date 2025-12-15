<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // LIST
    public function index()
    {
        $products = Product::with('category')->orderBy('id', 'desc')->get();
        return view('admin.product.product-list', compact('products'));
    }

    // CREATE
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.add', compact('categories'));
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'tittle'      => 'required',
            'idCategory'  => 'required|exists:categories,id',
        ]);

        Product::create([
            'tittle'     => $request->tittle,
            'idCategory' => $request->idCategory,
            'decription' => $request->decription,
            'content'    => $request->content,
            'price'      => $request->price,
            'image'      => $request->image,
            'status'     => $request->status ?? 0,
        ]);

        return redirect()->route('admin.product.index');
    }

    // EDIT
    public function edit($id)
    {
        $product    = Product::find($id);
        $categories = Category::all();

        return view('admin.product.edit', compact('product', 'categories'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'tittle'      => 'required',
            'idCategory'  => 'required|exists:categories,id',
        ]);

        $product = Product::find($id);

        $product->update([
            'tittle'     => $request->tittle,
            'idCategory' => $request->idCategory,
            'decription' => $request->decription,
            'content'    => $request->content,
            'price'      => $request->price,
            'image'      => $request->image,
            'status'     => $request->status ?? 0,
        ]);

        return redirect()->route('admin.product.index');
    }

    // DELETE
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.product.index');
    }
}
