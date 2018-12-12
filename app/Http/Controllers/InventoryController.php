<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventory = DB::table('vehicles')->get();
        return view('admin.inventory.index', compact('inventory'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventory = new Inventory();

        $inventory->created_date = request('created_date');
        $inventory->product = request('product');
        $inventory->price = request('price');
        $inventory->supplier = request('supplier');
        $inventory->stored_location = request('stored_location');
        $inventory->status = request('status');
        $inventory->used_in = request('used_in');
        $inventory->remarks = request('remarks');

        $inventory->save();

        return redirect('/admin/inventory')->with('status', 'Inventory Information Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::find($id);
        return view('admin.inventory.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventory = Inventory::find($id);
        return view('admin.inventory.edit', compact('inventory'));
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
        $inventory = Inventory::find($id);

        $inventory->created_date = $request->get('created_date');
        $inventory->product = $request->get('product');
        $inventory->price = $request->get('price');
        $inventory->supplier = $request->get('supplier');
        $inventory->stored_location = $request->get('stored_location');
        $inventory->status = $request->get('status');
        $inventory->used_in = $request->get('used_in');
        $inventory->remarks = $request->get('remarks');

        $inventory->save();

        return redirect()->action('InventoryController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        try {
            $inventory->delete();

            return redirect('/admin/inventory')->with('success', 'Inventory Information deleted successfully');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/admin/inventory')->with('warning', '\'Inventory Information can not be deleted. Foreign Constraint Violation.');
        }
    }
}
