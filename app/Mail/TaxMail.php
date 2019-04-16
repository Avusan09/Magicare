<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class TaxMail extends Mailable
{
    use Queueable, SerializesModels;
    public $varrt;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($varrt)
    {
        $this->varrt = $varrt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('tax');
    }
}
