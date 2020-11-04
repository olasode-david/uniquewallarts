<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LMessage extends Mailable
{
    use Queueable, SerializesModels;

        public $guest;
        public $email;
        public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($guest, $email, $message)
    {
        $this->guest = $guest;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.Lmessage')
                ->subject("Leave a message mail");
    }
}
