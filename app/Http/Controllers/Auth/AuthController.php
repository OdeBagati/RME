<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function registerSave(RegisterRequest $request) {
        $creds = $request->validated();
        User::create($creds);
        return redirect()->route("auth.login.page");
    }

    public function authenticate(LoginRequest $request) {
        $creds = $request->validated();
        if (Auth::attempt($creds)) {
            return redirect()->intended(route("user.dashboard"));
        }
        return back()->withErrors([
            'username' => 'Username atau password salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login.page');
    }
}
