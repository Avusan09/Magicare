<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function index()
    {
        $sales = DB::table('sales')->get();
        return view('/admin/sales/index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('/admin/stockist/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $sales = new Sales;


        $sales->product_code = request("product_code");
        $sales->product_name = request("product_name");
        $sales->pack = request("pack");
        $sales->opening_stock = request("opening_stock");
        $sales->purchased_stock = request("purchased_stock");
        $sales->total_stock = request("total_stock");
        $sales->sales = request("sales");
        $sales->clear_stock = request("clear_stock");
        $sales->l_rate = request("l_rate");
        $sales->st_value = request("st_value");




        $sales->save();

        return redirect('/admin/sales')->with('status', 'Sales created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Stockist $stockists
     * @return \Illuminate\Http\Response
     * @internal param Stockist $stock
     * @internal param int $id
     */
    public function edit($id)
    {

        $stks = Stockist::find($id);

        // show the edit form and pass the nerd
        return view('admin.stockist.edit', compact('stks'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Sales $sales
     * @return \Illuminate\Http\Response
     * @internal param Stockist $stockist
     * @internal param int $id
     */
    public function update(Request $request, Sales $sales)
    {
        $input = $request->all();

        $sales->fill($input)->save();

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales = Sales::find($id);
        try {
            $sales->delete();

            return redirect('/admin/sales')->with('success', 'Stockist deleted successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/sales')->with('warning', 'Stockist  can not be deleted. Foreign Constraint Violation.');
        }
    }
}
