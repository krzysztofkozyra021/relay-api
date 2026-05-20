<?php

declare(strict_types=1);

namespace Relay\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;
use Kreait\Firebase\Contract\Messaging;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification as FirebaseNotification;
use Relay\Models\Device;
use Relay\Models\FaultReport;

class FaultReportedNotification extends Notification
{
    use Queueable;

    public function __construct(
        private readonly FaultReport $faultReport,
        private readonly Device $device,
    ) {}

    public function via(mixed $notifiable): array
    {
        $channels = ["mail"];

        if (!empty($notifiable->fcm_token)) {
            try {
                /** @var Messaging $messaging */
                $messaging = app(Messaging::class);

                $message = CloudMessage::fromArray([
                    'token' => $notifiable->fcm_token,
                    'notification' => [
                        'title' => 'Nowe zgłoszenie usterki!',
                        'body' => "Urządzenie: {$this->device->name}\nUsterka: {$this->faultReport->title}",
                    ],
                    'data' => [
                        'fault_id' => (string) $this->faultReport->id,
                        'device_uuid' => (string) $this->device->uuid,
                    ],
                ]);

                $messaging->send($message);
                Log::info("Powiadomienie Push wysłane pomyślnie do użytkownika ID: {$notifiable->id}");
            } catch (\Exception $e) {
                Log::error("Błąd wysyłania powiadomienia Push przez Firebase SDK: " . $e->getMessage());
            }
        }

        return $channels;
    }

    public function toMail(mixed $notifiable): MailMessage
    {
        return (new MailMessage())
            ->subject("Nowe zgłoszenie usterki: {$this->device->name}")
            ->greeting("Nowe zgłoszenie usterki")
            ->line("Urządzenie: **{$this->device->name}**")
            ->line("Lokalizacja: {$this->device->location}")
            ->line("Typ: {$this->device->type}")
            ->line("---")
            ->line("Tytuł: {$this->faultReport->title}")
            ->when($this->faultReport->description, fn(MailMessage $m) => $m->line("Opis: {$this->faultReport->description}"))
            ->when($this->faultReport->reported_by, fn(MailMessage $m) => $m->line("Zgłaszający: {$this->faultReport->reported_by}"))
            ->when($this->faultReport->contact, fn(MailMessage $m) => $m->line("Kontakt: {$this->faultReport->contact}"))
            ->salutation("Relay — system zarządzania urządzeniami");
    }
}