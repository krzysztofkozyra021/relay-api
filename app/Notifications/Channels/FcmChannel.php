<?php

declare(strict_types=1);

namespace Relay\Notifications\Channels;

use Exception;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;

class FcmChannel
{
    public function __construct(
        protected Messaging $messaging,
    ) {}

    public function send(mixed $notifiable, Notification $notification): void
    {
        if (empty($notifiable->fcm_token)) {
            return;
        }

        if (!method_exists($notification, "toFcm")) {
            return;
        }

        $messageData = $notification->toFcm($notifiable);

        if (empty($messageData)) {
            return;
        }

        try {
            $message = CloudMessage::fromArray(array_merge([
                "token" => $notifiable->fcm_token,
            ], $messageData));

            $this->messaging->send($message);
            Log::info("Powiadomienie Push wysłane pomyślnie do użytkownika ID: {$notifiable->id}");
        } catch (Exception $e) {
            Log::error("Błąd wysyłania powiadomienia Push przez Firebase SDK: " . $e->getMessage());
        }
    }
}
