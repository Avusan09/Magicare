<?php

namespace App\Http\Controllers;

use App\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tax = DB::table('taxes')->get();
        return view('admin.tax.index', compact('tax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tax = new Tax();

        $rt_expiry_date  = request('rt_expiry_date');
        $ret_expiry_date  = request('ret_expiry_date');
        $rp_expiry_date  = request('rp_expiry_date');

        $expiry_rt = date('Y-m-d', strtotime($rt_expiry_date. ' + 365 days'));
        $expiry_ret = date('Y-m-d', strtotime($ret_expiry_date. ' + 365 days'));
        $expiry_rp = date('Y-m-d', strtotime($rp_expiry_date. ' + 365 days'));



        $tax->date = request('date');
        $tax->vehicle_prefix = request('vehicle_prefix');
        $tax->vehicle_number = request('vehicle_number');
        $tax->vehicle_type = request('vehicle_type');
        $tax->chasis = request('chasis');
        $tax->engine = request('engine');
        $tax->rt_date = request('rt_date');
        $tax->rt_bill = request('rt_bill');
        $tax->rt_fiscal = request('rt_fiscal');
        $tax->rt_amount = request('rt_amount');
        $tax->ret_date = request('ret_date');
        $tax->ret_bill = request('ret_bill');
        $tax->ret_fiscal = request('ret_fiscal');
        $tax->ret_amount = request('ret_amount');
        $tax->rp_date = request('rp_date');
        $tax->rp_bill = request('rp_bill');
        $tax->rp_fiscal = request('rp_fiscal');
        $tax->rp_amount = request('rp_amount');
        $tax->insurance_start = request('insurance_start');
        $tax->insurance_end = request('insurance_end');
        $tax->insurance_company = request('insurance_company');
        $tax->policy = request('policy');
        $tax->insured_amount = request('insured_amount');
        $tax->rt_expiry_date = $expiry_rt;
        $tax->ret_expiry_date =$expiry_ret;
        $tax->rp_expiry_date = $expiry_rp;
        $tax->remarks = request('remarks');




        $tax->save();

        return redirect('/admin/tax')->with('status', 'Tax Permit and Insurance Information Added');
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
        $stks = Tax::find($id);

        return view('admin.tax.edit', compact('stks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tax= Tax::find($id);

        $tax->date =$request->get('date');
        $tax->vehicle_prefix = $request->get('vehicle_prefix');
        $tax->vehicle_number = $request->get('vehicle_number');
        $tax->vehicle_type = $request->get('vehicle_type');
        $tax->chasis = $request->get('chasis');
        $tax->engine = $request->get('engine');
        $tax->rt_date = $request->get('rt_date');
        $tax->rt_bill = $request->get('rt_bill');
        $tax->rt_fiscal = $request->get('rt_fiscal');
        $tax->rt_amount = $request->get('rt_amount');
        $tax->ret_date = $request->get('ret_date');
        $tax->ret_bill = $request->get('ret_bill');
        $tax->ret_fiscal = $request->get('ret_fiscal');
        $tax->ret_amount = $request->get('ret_amount');
        $tax->rp_date = $request->get('rp_date');
        $tax->rp_bill = $request->get('rp_bill');
        $tax->rp_fiscal = $request->get('rp_fiscal');
        $tax->rp_amount = $request->get('rp_amount');
        $tax->insurance_start = $request->get('insurance_start');
        $tax->insurance_end = $request->get('insurance_end');
        $tax->policy = $request->get('policy');
        $tax->insured_amount = $request->get('insured_amount');
        $tax->remarks = $request->get('remarks');
        $tax->insurance_company = $request->get('insurance_company');




        $tax->save();
        return redirect()->action('TaxController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Tax::find($id);
        $share->delete();

        return redirect()->action('TaxController@index')->with('success', 'Tax has been deleted Successfully');

    }
}
