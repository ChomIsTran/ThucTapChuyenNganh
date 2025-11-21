<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // nhớ import User model

class AuthController extends Controller
{
    // Hiển thị form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin'); // login xong tự nhảy vào admin
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng',
        ]);
    }

    // Hiển thị form register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Xử lý register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user); // đăng nhập tự động sau khi register

        return redirect('/admin'); // register xong tự nhảy vào admin
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
