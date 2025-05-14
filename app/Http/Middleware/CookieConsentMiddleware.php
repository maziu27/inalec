<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CookieConsentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->hasCookie('cookie_preferences')) {
            $prefs = json_decode($request->cookie('cookie_preferences'), true);
            // Puedes pasar las preferencias a la vista o al controlador si lo deseas
            view()->share('cookiePreferences', $prefs);
        }

        return $next($request);
    }
}
