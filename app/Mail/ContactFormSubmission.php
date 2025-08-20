<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject($this->data['subject'])
                    ->from('avohouprince@gmail.com', 'JMPI Contact')
                    ->to('habibchabi11@gmail.com') // Remplacez par l'adresse e-mail de destination
                    ->view('emails.contact')
                    ->with(['data' => $this->data]);
    }
}