<?php

declare(strict_types=1);

namespace Relay\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        Broadcast::routes(["middleware" => ["auth:sanctum"], "prefix" => "api"]);
        require base_path("routes/channels.php");
    }
}
