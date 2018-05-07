<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Stockist;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class StockistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockists = DB::table('stockists')->get();
        return view('/admin/stockist/index', compact('stockists'));
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


        $stockist = new Stockist;

        $stockist->product_name = request('product_name');
        $stockist->customer_name = request('customer_name');
        $stockist->quantity_sold = request('quantity_sold');

        $stockist->save();

        return redirect('/admin/stockist')->with('status', 'Stockist Added');

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
     * @param Stockist $stockist
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Stockist $stockist)
    {
        $input = $request->all();

        $stockist->fill($input)->save();

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
        $stockist = Stockist::find($id);
        try {
            $stockist->delete();

            return redirect('/admin/stockist')->with('success', 'Stockist deleted successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/stockist')->with('warning', 'Stockist  can not be deleted. Foreign Constraint Violation.');
        }
    }

}
