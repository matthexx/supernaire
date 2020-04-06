<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyUser extends Mailable
{
    use Queueable, SerializesModels;
    private $usertoken;
    private $username ;
    private $useremail;
    public $verifyUrl;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($url, $user)
    {
        $this->verifyUrl = $url;  
        $this->user = $user;
        // $this->username = $username; 
        // $this->useremail = $useremail; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    
    {
        return $this->view('emails.verifyUser');

    }
}
