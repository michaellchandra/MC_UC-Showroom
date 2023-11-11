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
        return view('addOrder');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $vehicles = Vehicle::all();

        return view('orders.create', compact('customers', 'vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order([
            'ID Customer' => $request->get('customer_id'),
            'ID Vehicle' => $request->get('vehicle_id'),
            'Jumlah' => $request->get('quantity'),
            'Total Harga' => $request->get('total_price')
        ]);

        $order->save();

        return redirect('/orders')->with('success', 'Order ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order = Order::find($order);

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $order = Order::find($order);
        $customers = Customer::all();
        $vehicles = Vehicle::all();

        return view('orders.edit', compact('order', 'customers', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order = Order::find($order);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order = Order::find($order);
        $order->delete();

        return redirect('/orders')->with('success', 'Order berhasil dihapus');
    }
}
