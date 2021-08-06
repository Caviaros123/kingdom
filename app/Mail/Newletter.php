<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Newsletter;

class Newletter extends Mailable
{
    use Queueable, SerializesModels;


    public $newsletter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.newsletter');
        // return $this->from('royaume.emerkhammaat@gmail.com', 'Emerkhammaat.com')
        //         ->view('emails.newsletter');
    }
}
