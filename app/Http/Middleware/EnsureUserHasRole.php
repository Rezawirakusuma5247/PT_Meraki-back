<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            abort(404); // Return 404 for unauthenticated users
        }

        // Check if the user has the required role
        if (!Auth::user()->hasRole($role)) {
            abort(404); // Return 404 for unauthorized users
        }

        return $next($request);
    }
}
