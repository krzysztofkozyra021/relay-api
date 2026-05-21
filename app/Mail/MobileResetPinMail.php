<?php

declare(strict_types=1);

namespace Relay\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MobileResetPinMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public readonly string $pin,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Kod PIN do resetu hasła",
        );
    }

    public function content(): Content
    {
        return new Content(
            htmlString: "<h1>Twój kod resetu hasła</h1><p>Twój jednorazowy 6-cyfrowy kod PIN to: <strong>{$this->pin}</strong></p><p>Kod jest ważny przez 15 minut.</p>",
        );
    }
}
