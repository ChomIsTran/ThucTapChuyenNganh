<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =========================
// TRANG NGƯỜI DÙNG (CLIENT)
// =========================

// Trang chủ
Route::view('/', 'layout.home')->name('home');

// Các trang tĩnh
Route::view('/about', 'about')->name('about');
Route::view('/menu', 'menu')->name('menu');
Route::view('/team', 'team')->name('team');
Route::view('/service', 'service')->name('service');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/contact', 'contact')->name('contact');

// Trang sau khi login (nếu bạn cần)
Route::get('/home', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('user.home');

// =========================
// AUTH
// =========================

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =========================
// ADMIN
// =========================

// Trang giao diện chính của admin
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

// Nhóm route /admin/*
Route::group(['prefix'=> 'admin','as'=> 'admin.'], function() {

    // Dashboard
    Route::resource('dashboard', LoginController::class);

    // Category
    Route::resource('category', CategoryController::class);

    // Product
    Route::resource('product', ProductController::class);

    
});
