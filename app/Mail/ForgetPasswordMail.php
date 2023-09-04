<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMail extends Mailable
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
             subject: 'ResetPassword'.$this->data['name'],
        );
    }

  public function content(): Content
{
    return new Content(
        view: 'mails.forgetPassword',
        with: [
            'data' => $this->data,
         ],
    );
}
}
