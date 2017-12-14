<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Notify extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   

      
        return $this
        ->from(\Auth::user()->email, \Auth::user()->name)
        ->replyTo(\Auth::user()->email, \Auth::user()->name)
        ->subject($this->reservation->user_name . ' Has Entered a Steamboat Reservation!')
        ->markdown('emails.notify');

    }
}
