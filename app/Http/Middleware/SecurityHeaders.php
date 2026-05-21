<?php

declare(strict_types=1);

namespace Relay\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->set("X-Frame-Options", "DENY");

        $response->headers->set("X-Content-Type-Options", "nosniff");

        $response->headers->set("X-XSS-Protection", "1; mode=block");

        $response->headers->set("Referrer-Policy", "no-referrer-when-downgrade");

        $response->headers->set("Content-Security-Policy", "default-src 'none'; frame-ancestors 'none'; sandbox");

        if ($request->secure() || env("APP_ENV") === "production") {
            $response->headers->set("Strict-Transport-Security", "max-age=31536000; includeSubDomains; preload");
        }

        $response->headers->set("Permissions-Policy", "geolocation=(), microphone=(), camera=(), interest-cohort=()");

        $response->headers->remove("X-Powered-By");

        return $response;
    }
}
