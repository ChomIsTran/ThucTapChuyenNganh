<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/menu', function () {
    return view('menu');
})->name('menu');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');