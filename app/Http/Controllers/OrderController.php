<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $orders = Order::all();
        return view('showOrder', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addOrder');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order([
            'id_kendaraan' => $request->get('id_kendaraan'),
            'id_customer' => $request->get('id_customer'),
            'jumlah_kendaraan' => $request->get('jumlah_kendaraan'),
            'total_biaya' => $request->get('total_biaya')
        ]);
        $order->save();
        return redirect('/orders')->with('success', 'Order has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('showOrder', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $order = Order::find($id);
        $order->id_kendaraan = $request->get('id_kendaraan');
        $order->id_customer = $request->get('id_customer');
        $order->jumlahKendaraan = $request->get('jumlahKendaraan');
        $order->total_biaya = $request->get('totalBiaya');
        $order->save();
        return redirect('/orders')->with('success', 'Order has been updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect('/orders')->with('success', 'Order has been deleted Successfully');
    }
}
