<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Allow unauthenticated users to access login and register routes
        if ($request->is('login') || $request->is('register')) {
            return $next($request);
        }

        // Check if the user is authenticated
        if (!$user) {
            return redirect('/login');
        }

        if ($user->approved && $user->role === 'Admin') {
            return $next($request);
        }

        // Check if the user is approved
        if (!$user->approved) {
            return redirect('/unauthorized');
        }

        // Redirect to unauthorized page for non-admin users
        return redirect('/unauthorized');
    }
}