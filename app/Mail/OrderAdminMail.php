<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $carts;
    public $address;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($carts, $address)
    {
        $this->carts = $carts;
        $this->address = $address;       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.OrderAdminMail');
    }
}
