<?php

declare(strict_types=1);

namespace Relay\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnforceTwoFactor
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user("api");

        if ($user && $user->is_admin) {
            if ($user->two_factor_secret === null) {
                return new JsonResponse([
                    "message" => "Two-Factor Authentication is actively enforced for your role. Please complete 2FA setup.",
                    "action_required" => "setup_2fa",
                ], 403);
            }
        }

        return $next($request);
    }
}
