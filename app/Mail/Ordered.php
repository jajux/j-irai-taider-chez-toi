<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\{ Order, Resa, page };

class Ordered extends Mailable
{
    use Queueable, SerializesModels;

    public $resa;
    public $order;
    public $page;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Resa $resa, Order $order, Page $page)
    {
        $this->resa = $resa;
        $this->order = $order;
        $this->page = $page;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->resa->email, $this->resa->name)
                    ->subject('Confirmation de demande de réservation')
                    ->view('mail.ordered', ['user' => auth()->user()]);
    }
}