<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class EtudiantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            // Check if the user has the 'Etudiant' role
            if (auth()->user()->role != User::ROLE_ETUDIANT) {
                // Redirect to the welcome page with an error message
                return redirect('/')->with('error', 'You do not have permission to access this page.');
            }
        } else {
            // User is not authenticated, handle accordingly (redirect to login, for example)
            return redirect('/login');
        }

        return $next($request);
    }
}
