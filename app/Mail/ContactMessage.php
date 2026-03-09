<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public ?string $phone;
    public string $messageText;

    public function __construct(string $name, string $email, ?string $phone, string $messageText)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->messageText = $messageText;
    }

    public function build(): self
    {
        return $this->subject('Nowa wiadomość z formularza kontaktowego')
            ->replyTo($this->email, $this->name)
            ->view('emails.contact');
    }
}

