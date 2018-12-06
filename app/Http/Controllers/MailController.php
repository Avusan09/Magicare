<?php

namespace App\Http\Controllers;


use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function mail()
    {
        $vehicle = DB::table('vehicles')->get();


//        echo (date_create($vehicle[0]->expiry_date) - date_create($vehicle[0]->servicing_date));
        return view('/mail', compact('vehicle' ));
    }


    public function send()
    {



        Mail::send(new sendMail());



    }
}
