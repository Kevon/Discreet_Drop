<?php

namespace App\Mail;

use App\Charge;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChargeFailed extends Mailable
{
    use Queueable, SerializesModels;
    
    public $charge;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Charge $charge)
    {
        $this->charge = $charge;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.chargeFailed')->subject("Uh-Oh, Discreet Drop Received Your Package, but We Need Updated Payment Info to Send Out Your Discreet Package!");
    }
}