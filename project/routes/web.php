<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\MymyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Trang chủ (home page)
Route::view('/', 'admin.index')->name('home');
Route::view('/home', 'layout.home')->name('index');

// Các trang tĩnh
Route::view('/about', 'about')->name('about');
Route::view('/menu', 'menu')->name('menu');
Route::view('/team', 'team')->name('team');
Route::view('/service', 'service')->name('service');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');

// Login / Register / Logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin
Route::middleware('auth')->group(function () {

    // Dashboard admin → resources/views/admin/index.blade.php
    Route::view('/admin', 'admin')->name('admin');

    // Category
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');

    // Product
    Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
    //Mymy
    Route::get('/admin/mymy', [MymyController::class, 'index'])->name('mymy');
});

// Trang sau khi login
Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');

