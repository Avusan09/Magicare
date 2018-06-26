<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public  function  index()
    {
        $test = DB::table('test')->get();
//        $startdate = "2075/10/25";
//        $enddate = "2075/11/10";
//
//
//
//        $datetime1 = date_create($startdate);
//        $datetime2 = date_create($enddate);
//
//        $interval = (date_diff($datetime2, $datetime1))->format('%a days');
        $test = DB::table('test')->get();
        return view('/test/index', compact('test'));
    }

    public function create()
    {
        return view('/test/create');
    }

    public function store(Request $request)
    {

        $test = new Test;

        $test->start_date = request('start_date');
        $test->end_date = request('end_date');


        $test->save();

        return redirect('/test/index')->with('status', 'Stockist Added');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
