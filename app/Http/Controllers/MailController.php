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

    public function taxExpiry()
    {
        $tax = DB::table('taxes')->get();
        $varrt = array();
        $varret = array();
        $varrp = array();
        $vararrcount = 0;
        $today = date("Y-m-d");
        $count = count($tax);
        for ($i = 0;$i<$count;$i++)
        {
            $exprt = $tax[$i]->rt_expiry_date;
            $expret = $tax[$i]->ret_expiry_date;
            $exprp = $tax[$i]->rp_expiry_date;
            $datetimert1 = date_create($exprt);
            $datetimert2 = date_create($expret);
            $datetimert3 = date_create($exprp);
            $dateToday = date_create($today);


            $intervalrt = date_diff($datetimert1, $dateToday);
            $intervalret = date_diff($datetimert2, $dateToday);
            $intervalrp = date_diff($datetimert3, $dateToday);

            if ($intervalrt->days < 3)
            {
                array_push($varrt,$tax[$i]);
            }

            if ($intervalret->days < 3)
            {
                array_push($varret,$tax[$i]);
            }

            if ($intervalrp->days < 3)
            {
                array_push($varrp,$tax[$i]);
            }
        }
        return view('/tax', compact('varrt','varret','varrp'));

    }


    public function send()
    {
        Mail::send(new sendMail());

    }
}
