<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SystemSendMail extends Mailable
{
    use Queueable, SerializesModels;

     public $mail_data;
    public function __construct($mail_data)
    {
        
      $this->mail_data = $mail_data;
    }


    public function build()
    {
        return $this->subject('Mail from ItSolutionStuff.com')
                    ->view('SystemSendMail');
    }
}
