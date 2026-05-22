<?php

declare(strict_types=1);

namespace Relay\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Relay\Models\User;
use Relay\Policies\UserPolicy;
use Symfony\Component\Mailer\Bridge\Brevo\Transport\BrevoTransportFactory;
use Symfony\Component\Mailer\Transport\Dsn;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        Gate::policy(User::class, UserPolicy::class);

        RateLimiter::for("api", fn(Request $request) => Limit::perMinute(60)->by($request->user()?->id ?: $request->ip()));

        Mail::extend("brevo", fn(array $config) => (new BrevoTransportFactory())->create(
            new Dsn(
                scheme: "brevo+api",
                host: "default",
                password: $config["key"] ?? config("services.brevo.key"),
            ),
        ));
    }
}
