<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Bắt buộc đăng nhập mới được vào admin
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Trang chính admin
    public function index()
    {
        return view('admin.index');  
        // tương ứng: resources/views/admin/index.blade.php
    }

    // Trang danh mục
    public function category()
    {
        return view('admin.category.category-list');
        // tương ứng: resources/views/admin/category/category-list.blade.php
    }

    // Trang sản phẩm
    public function product()
    {
        return view('admin.product.product-list');
        // tương ứng: resources/views/admin/product/product-list.blade.php
    }
}
