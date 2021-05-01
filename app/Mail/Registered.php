<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Resa;

class Registered extends Mailable
{
    use Queueable, SerializesModels;

    public $resa;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Resa $resa)
    {
        $this->resa = $resa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->resa->email, $this->resa->name)
                    ->subject('Bienvenue !')
                    ->view('mail.registered', ['user' => auth()->user()]);
    }
}