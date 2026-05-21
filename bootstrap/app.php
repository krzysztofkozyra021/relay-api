<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Relay\Http\Middleware\EnforceTwoFactor;
use Relay\Http\Middleware\SecurityHeaders;
use Sentry\Laravel\Integration;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        api: __DIR__ . "/../routes/api.php",
        commands: __DIR__ . "/../routes/console.php",
        health: "/up",
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trustProxies(at: "*");
        $middleware->api(append: [
            ThrottleRequests::class . ":api",
        ]);
        $middleware->prepend(SecurityHeaders::class);
        $middleware->alias([
            "enforce.2fa" => EnforceTwoFactor::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        Integration::handles($exceptions);
    })->create();
