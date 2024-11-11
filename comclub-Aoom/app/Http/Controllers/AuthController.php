<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // แสดงฟอร์ม Login
    public function showLoginForm()
    {
        return view('auth.login'); // สร้าง view 'auth.login' สำหรับฟอร์ม Login
    }

    // ดำเนินการ Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // หาก Login สำเร็จ ให้เปลี่ยนเส้นทางไปที่หน้า Dashboard หรือหน้าอื่นๆ
            return redirect()->intended('/home');
        }

        // หาก Login ไม่สำเร็จ
        return back()->withErrors([
            'email' => 'Invalid credentials or account not found.',
        ]);
    }

    // ดำเนินการ Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
