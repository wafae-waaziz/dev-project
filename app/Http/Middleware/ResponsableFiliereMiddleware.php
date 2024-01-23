<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class ResponsableFiliereMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has the 'Professeur' role
        if (auth()->check() && auth()->user()->role != User::ROLE_RESPONSABLE_FILIERE) {
            
        }

        return $next($request);
    }
}
