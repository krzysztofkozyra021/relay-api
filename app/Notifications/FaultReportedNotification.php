<?php

declare(strict_types=1);

namespace Relay\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
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
        return ["mail"];
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
