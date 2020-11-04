<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

        public $name;
        public $subject;
        public $message;
        public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, string $subject, $message,$email)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->message = $message;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contactus')
            ->subject($this->subject);
    }
}
