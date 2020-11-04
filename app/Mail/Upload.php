<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Upload extends Mailable
{
    use Queueable, SerializesModels;
        
    public $image;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($image, $email)
    {
        $this->image = $image;
        $this->email = $email;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.upload')
        ->subject("Latest deals on board");
    }
}
