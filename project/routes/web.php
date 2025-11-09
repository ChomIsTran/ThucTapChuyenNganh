<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/admin/category', function () {
    return view('admin/category/category-list');
})->name('category');
Route::get('/admin/product', function () {
    return view('admin/product/product-list');
})->name('product');
?>