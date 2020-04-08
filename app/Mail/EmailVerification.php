<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailVerification extends Mailable
{

    use Queueable, SerializesModels;


    public $user;
    public $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct($url, $user)
    // {
    //     $this->url = $url;  
    //     $this->user = $user;
    // }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->markdown('emails.verify-email');

        

    // }
}
