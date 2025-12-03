<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;   // ✅ ĐÚNG
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function __construct()
    {
       

     
    }

    public function index()
    {
        $categories =Category::where('status','1')->get();
        $products =Product::where('status','1')->get();
        return view('layout.home',compact('categories','products'));
        
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');   // ✅ nhớ return
    }
}
