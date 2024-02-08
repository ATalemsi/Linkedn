<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Redirect users based on their role
        if (Auth::user()->role === 'user') {
            return redirect()->intended(RouteServiceProvider::USER_DASHBOARD);
        } elseif (Auth::user()->role === 'admin') {
            return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
        } elseif (Auth::user()->role === 'entreprise') {
            return redirect()->intended(RouteServiceProvider::ENTREPRISE_DASHBOARD);
        } else {
            // Handle other roles or fallback
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
