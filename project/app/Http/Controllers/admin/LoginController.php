<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');  
        // tương ứng: resources/views/admin/index.blade.php
    }

    public function category()
    {
        return view('admin.category.category-list');
        // tương ứng: resources/views/admin/category/category-list.blade.php
    }

    public function product()
    {
        return view('admin.product.product-list');
        // tương ứng: resources/views/admin/product/product-list.blade.php
    }
}