<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // pastikan Anda mengimpor model User

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Cek kredensial
        $credentials = $request->only('username', 'password');

        // Lakukan login
        if (Auth::attempt($credentials)) {
            // Redirect ke halaman beranda setelah login berhasil
            return redirect()->intended('home'); // Sesuaikan dengan rute yang Anda inginkan
        }

        // Jika login gagal, kembali ke form dengan error
        return back()->withErrors([
            'username' => 'Username atau password tidak cocok.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Sesuaikan dengan rute login Anda
    }
}
