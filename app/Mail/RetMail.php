<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;

class RetMail extends Mailable
{
    use Queueable, SerializesModels;
    public $varret;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($varret)
    {
        $this->varret = $varret;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('ret');
    }
}
//->to('carefreeav09@gmail.com')->from('carefreeav09@gmail.com','CarefreeAV')->subject('Vehicle Expiry Notification');
//
//send(['text'=>'mail'],['name','Abhushan'],function($message){
//    $message->to('asmitasubedi0346@gmail.com','asmita')->subject('Vehicle Expiry Notification');
//    $message->to('carefreeav09@gmail.com','Abhushan')->subject('Vehicle Expiry Notification');
//    $message->from('carefreeav09@gmail.com','Aabhushan Gautam');