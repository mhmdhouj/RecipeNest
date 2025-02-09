<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
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
        // Validate the request
    $request->validate([
        'email' => ['required', 'string', 'email'],
        'password' => ['required', 'string'],
    ]);

    // Attempt to authenticate as a regular user
    if (Auth::guard('web')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->intended(route('home', absolute: false));
    }

    // Attempt to authenticate as an admin
    if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    // If authentication fails for both guards
        return back()->withErrors([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
