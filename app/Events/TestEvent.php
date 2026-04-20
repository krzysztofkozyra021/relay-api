<?php

declare(strict_types=1);

namespace Relay\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestEvent
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public function __construct() {}

    public function broadcastOn(): array
    {
        $user_id = auth()->id() ?? "guest";

        return [
            new PrivateChannel("test-channel." . $user_id),
        ];
    }

    public function broadcastWith(): array
    {
        return [
            "message" => "Hello World",
        ];
    }
}
