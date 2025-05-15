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

     // middleware:mecanismo para filtrar e inspeccionar solicitudes HTTP para la app.
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Verifica si la cookie de consentimiento esta establecida
        if($request->hasCookie('cookie_consent')){

            // Decodifica la cookie JSON para obtener preferencias del usuario
            $consent = json_decode($request->cookie('cookie_consent'), true);

            // Si el user acepta cookies analiticas configura una cabecera
            if($consent['analiticas'] ?? false){
                $response->headers->set('X-Google-Analytics', 'enabled');
            }

            // Si el user acepta cookies publicitarias configura otra cabecera
            if($consent['publicitarias'] ?? false){
                $response->headers->set('X-Ads', 'enabled');
            }

            // Si el user acepta cookies de personalizacion configura otra cabecera
            if($consent['personalizacion'] ?? false){
                $response->headers->set('X-personalization','enabled');
            }
        }
        return $response;
    }
}
