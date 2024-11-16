<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\View\View;

class AuthController extends Controller
{

    public function login(): View
    {
        return view('auth.login');
    }

    public function register(Request $request): View
    {
        return view('auth.register');
    }

    public function loginUser(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('home');
    }

    public function registerUser(RegisterRequest $request): RedirectResponse
    {

        $request->registration();

        return redirect()->route('home');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }

    public function forgotPassword(Request $request): View
    {
        return view('auth.forgot-password');
    }

    public function resetPassword(Request $request): View
    {
        return view('auth.reset-password');
    }
}
