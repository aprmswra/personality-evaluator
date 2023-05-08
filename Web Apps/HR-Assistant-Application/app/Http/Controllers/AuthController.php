<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Sesuaikan dengan nama field di model Anda
        if (Auth::guard('mongodb')->attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('/'); // Sesuaikan dengan URL redirect setelah login
        } else {
            // Jika login gagal
            return redirect()->back()->withErrors(['login_failed' => 'Email atau password salah.']); // Sesuaikan pesan error jika login gagal
        }
    }

    // public function login2(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('/');
    //     }

    //     return redirect()->back()->withErrors('Invalid credentials');
    // }

    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        Auth::login($user);

        return redirect()->intended('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
