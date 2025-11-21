<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;   // ✅ ĐÚNG
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect('/');   // ✅ nhớ return
    }
}
