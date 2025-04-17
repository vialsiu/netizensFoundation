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
use Laravel\Socialite\Facades\Socialite;
use \Symfony\Component\HttpFoundation\RedirectResponse as SymfonyRedirectResponse;

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

    /*************************************************
     *              GOOGLE AUTH                      *
     *************************************************/

    /**
     * Redirects to google OAuth page
     *
     * @return SymfonyRedirectResponse|RedirectResponse
     */
    public function redirect(): SymfonyRedirectResponse|RedirectResponse
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google
     *
     * @return RedirectResponse
     */
    public function callback(): RedirectResponse
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Throwable $e) {
            return redirect()->route('auth.login')->with('error', $e->getMessage());
        }

        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            $newUser = User::updateOrCreate([
                'email' => $user->email,
            ], [
                'name' => $user->name,
                'password' => Hash::make($user->email),
                'email_verified_at' => now(),
            ]);
            Auth::login($newUser);
        }
        return redirect()->route('blog.home');
    }
}
