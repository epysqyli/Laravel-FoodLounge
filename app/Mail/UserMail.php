<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Order;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(Order $order)
    {
        $this->order = $order;

    }

    public function build()
    {
        $order = $this->order;
        return $this->view('mails.userConfirmation');
    }
}
