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
        $inventory = DB::table('inventory')->get();
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


        $inventory->product = request('product');
        $inventory->price = request('price');
        $inventory->supplier = request('supplier');
        $inventory->stored_location = request('stored_location');
        $inventory->status = request('status');
        $inventory->used_in = request('used_in');
        $inventory->remarks = request('remarks');
        $inventory->date = request('date');

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

        $inventory->date = $request->get('date');
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
        $share = Inventory::find($id);
        $share->delete();

        return redirect()->action('InventoryController@index')->with('success', 'Inventory has been deleted Successfully');;
    }

//    public function product()
//    {
//
//        $product = DB::table('inventory')->pluck('product');
////        print_r($inventory);
//
//        return response()->json([
//            'product' => $product
//        ]);
//    }


}
