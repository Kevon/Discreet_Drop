<?php

namespace App\Mail;

use App\Order;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;
    
    public $order;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Order $order)
    {
        $this->order = $order;
        $this->user = $user;
        $order->load('Incoming_Package');
        $order->load('Shipment.Latest_Charge');
        $order->load('Shipment.Latest_Outgoing_Package');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orderShipped')->subject("Your Discreet Drop Plain-Box Package Is On Its Way!");
    }
}
