<?php

namespace App\Http\Controllers;

use App\Vehicles;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = DB::table('vehicles')->get();

        return view('admin.vehicle.index', compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vehicles = new Vehicles();


        $vehicles->servicing_date = request('servicing_date');
        $vehicles->vehical_prefix = request('vehical_prefix');
        $vehicles->vehical_number = request('vehical_number');
        $vehicles->type = request('type');
        $vehicles->worked_hours = request('worked_hours');
        $vehicles->mobil = request('mobil');
        $vehicles->transmission_oil = request('transmission_oil');
        $vehicles->hydrolic = request('hydrolic');
        $vehicles->mobil_filter = request('mobil_filter');
        $vehicles->diesel_filter = request('diesel_filter');
        $vehicles->hydrolic_filter = request('hydrolic_filter');
        $vehicles->coolent_water = request('coolent_water');
        $vehicles->coolent_filter = request('coolent_filter');
        $vehicles->air_filter = request('air_filter');
        $vehicles->pilot_filter = request('pilot_filter');
        $vehicles->transmission_filter = request('transmission_filter');
        $vehicles->water_safety = request('water_safety');
        $vehicles->breather = request('breather');
        $vehicles->tyres = request('tyres');
        $vehicles->tubes = request('tubes');
        $vehicles->spare_parts = request('spare_parts');
        $vehicles->engine_repair = request('engine_repair');
        $vehicles->total_cost = request('total_cost');
        $vehicles->expiry_date = request('expiry_date');
        $vehicles->remarks = request('remarks');





        $vehicles->save();

        return redirect('/admin/vehicle')->with('status', 'Vehicle Information Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stks = Vehicles::find($id);

        return view('admin.vehicle.edit', compact('stks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $vehicles= Vehicles::find($id);
        $vehicles->servicing_date =$request->get('servicing_date');
        $vehicles->vehical_prefix = $request->get('vehical_prefix');
        $vehicles->vehical_number = $request->get('vehical_number');
        $vehicles->type = $request->get('type');
        $vehicles->worked_hours = $request->get('worked_hours');
        $vehicles->mobil = $request->get('mobil');
        $vehicles->transmission_oil = $request->get('transmission_oil');
        $vehicles->hydrolic = $request->get('hydrolic');
        $vehicles->mobil_filter = $request->get('mobil_filter');
        $vehicles->diesel_filter = $request->get('diesel_filter');
        $vehicles->hydrolic_filter = $request->get('hydrolic_filter');
        $vehicles->coolent_filter = $request->get('coolent_filter');
        $vehicles->coolent_water = $request->get('coolent_water');
        $vehicles->air_filter = $request->get('air_filter');
        $vehicles->pilot_filter = $request->get('pilot_filter');
        $vehicles->transmission_filter = $request->get('transmission_filter');
        $vehicles->water_safety = $request->get('water_safety');
        $vehicles->breather = $request->get('breather');
        $vehicles->tyres = $request->get('tyres');
        $vehicles->tubes = $request->get('tubes');
        $vehicles->spare_parts = $request->get('spare_parts');
        $vehicles->engine_repair = $request->get('engine_repair');
        $vehicles->total_cost = $request->get('total_cost');
        $vehicles->expiry_date = $request->get('expiry_date');
        $vehicles->remarks = $request->get('remarks');
        $vehicles->save();
        return redirect()->action('VehiclesController@index');
    }

    public function userVehical()
    {
        $vehicle = DB::table('vehicles')->get();
        return view('admin.vehicle.index', compact('vehicle'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicles = Vehicles::find($id);
        try {
            $vehicles->delete();

            return redirect('/admin/vehicle')->with('success', 'Vehicle Information deleted successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/vehicle')->with('warning', '\'Vehicle Information can not be deleted. Foreign Constraint Violation.');
        }
    }
}
