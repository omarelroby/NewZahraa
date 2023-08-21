<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomersMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function envelope(): Envelope
    {
        return new Envelope(
             subject: $this->data['subject'],
        );
    }

  public function content(): Content
{
    return new Content(
        view: 'mails.customer',
        with: [
            'data' => $this->data,
         ],
    );
}
}
