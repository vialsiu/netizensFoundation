<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthBlogController extends Controller
{
    public function login(): View|Application|Factory
    {
        return view('blog-content.login');
    }

    public function loginAction(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $user->update(['last_login' => now()]);

            return redirect()->route('blog.home');
        }

        return back()->withErrors(['email' => 'Email or password are incorrect.']);
    }

    public function register(): View|Application|Factory
    {
        return view('blog-content.register');
    }

    public function registerAction(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.login')->with('success', 'You have been registered successfully. Please login.');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('blog.home');
    }
}
