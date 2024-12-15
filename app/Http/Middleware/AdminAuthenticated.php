<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        // Check if admin is logged in by checking session
        if (!session()->has('admin_id')) {
            // If not logged in, redirect to login page
            return redirect()->route('loginpage')->with('error', 'You must be logged in as an admin to access this page.');
        }

        return $next($request);
    }
}