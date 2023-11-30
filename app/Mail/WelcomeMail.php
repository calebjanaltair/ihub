<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;


class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $email;
    public $password;
    public $url;

    public function __construct($email, $password, $url)
    {
        $this->email = $email;
        $this->password = $password;
        $this->url = $url;
    }

    public function build()
    {
        return $this->subject('Welcome to iHub Administration')
            ->view('emails.welcomeMail')
            ->with([
                'email' => $this->email,
                'password' => $this->password,
                'url' => $this->url,
            ]);
    }
}
