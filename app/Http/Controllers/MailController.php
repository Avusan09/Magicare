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
        $vararr = array();
        $vararrcount = 0;
        $today = date("Y-m-d");
        $count = count($vehicle);
        for ($i = 0;$i<$count;$i++)
        {
            $exp = $vehicle[$i]->expiry_date;
            $datetime1 = date_create($exp);
            $datetime2 = date_create($today);
            $interval = date_diff($datetime1, $datetime2);

            if ($interval->days < 3)
            {
                array_push($vararr,$vehicle[$i]);

            }
        }
        return view('/mail', compact('vararr'));
    }

    public function support()
    {
        $vehicle = DB::table('vehicles')->get();
        $vararr = array();
        $vararrcount = 0;
        $today = date("Y-m-d");
        $count = count($vehicle);
        for ($i = 0;$i<$count;$i++)
        {
            $exp = $vehicle[$i]->expiry_date;
            $datetime1 = date_create($exp);
            $datetime2 = date_create($today);
            $interval = date_diff($datetime1, $datetime2);

            if ($interval->days < 3)
            {
                array_push($vararr,$vehicle[$i]);

            }
        }

        return $vararr;
    }


    public function send()
    {
        Mail::send(new sendMail());
        }
}
