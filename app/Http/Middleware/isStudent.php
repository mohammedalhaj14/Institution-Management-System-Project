<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (!Auth::check()) {
            return redirect('/register')->with('error', 'You must be logged in to access this page.');
        }

        // Check if the user's role is 'student'
        if (Auth::user()->role !== 'student') {
            return redirect('/')->with('error', 'Access denied. Only students can access this page.');
        }

        return $next($request);
    }
}
