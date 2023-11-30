<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;


class UpdatesMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $token;
    public $ip;
    public $url;

    public function __construct($token, $ip, $url)
    {
        $this->token = $token;
        $this->ip = $ip;
        $this->url = $url;
    }

    public function build()
    {
        return $this->subject('iHub Updates')
            ->view('emails.updatesMail')
            ->with([
                'token' => $this->token,
                'ip' => $this->ip,
                'url' => $this->url,
            ]);
    }
}
