<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardInformationController extends Controller
{
    public function index()
    {
        $vehicles = DB::table('vehicles')->count();
        $taxes = DB::table('taxes')->count();
        $inventoryCount = Db::table('inventory')->count();

        $vehicle = DB::table('vehicles')->get();
        $varArr = array();
        $today = date("Y-m-d");
        $count = count($vehicle);
        for ($i = 0; $i < $count; $i++) {
            $exp = $vehicle[$i]->expiry_date;
            $datetime1 = date_create($exp);
            $datetime2 = date_create($today);
            $interval = date_diff($datetime1, $datetime2);

            if ($interval->days < 30) {
                array_push($varArr, $vehicle[$i]);

            }
        }
        if (count($varArr) > 5) {
            $chunkedArray = array_chunk($varArr, 5);
            $vehiclesArray = $chunkedArray[0];
        } else {
            $vehiclesArray = $varArr;
        }

        $tax = DB::table('taxes')->get();
        $varrt = array();
        $varret = array();
        $varrp = array();
        $today = date("Y-m-d");
        $count = count($tax);
        for ($i = 0; $i < $count; $i++) {
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

            if ($intervalrt->days < 3) {
                array_push($varrt, $tax[$i]);
            }

            if ($intervalret->days < 3) {
                array_push($varret, $tax[$i]);
            }

            if ($intervalrp->days < 3) {
                array_push($varrp, $tax[$i]);
            }
        }

        if (count($varrt) > 5) {
            $chunkedArray = array_chunk($varrt, 5);
            $rtArray = $chunkedArray[0];
        } else {
            $rtArray = $varrt;
        }

        if (count($varret) > 5) {
            $chunkedArray = array_chunk($varret, 5);
            $retArray = $chunkedArray[0];
        } else {
            $retArray = $varret;
        }

        if (count($varrp) > 5) {
            $chunkedArray = array_chunk($varrp, 5);
            $rpArray = $chunkedArray[0];
        } else {
            $rpArray = $varrp;
        }

        return view('admin.dashboard', compact('vehicles', 'taxes', 'inventoryCount', 'vehiclesArray', 'retArray', 'rpArray', 'rtArray'));
    }

}
