<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\LewaCoffee;
use App\Http\Requests\CoffeeRequest;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = LewaCoffee::all();

        return response()->json(['orders' => $orders], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoffeeRequest $request)
    {
        $order = LewaCoffee::create($request->all());

        return response()->json(['message' => 'Data berhasil ditambahkan', 'order' => $order], 201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = LewaCoffee::find($id);
        $order->update($request->all());

        return response()->json(['message' => 'Data berhasil diperbarui', 'order' => $order], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = LewaCoffee::find($id);
        $orders->delete();

        return response()->json(['message' => 'Order deleted'], 200);
    }
}
