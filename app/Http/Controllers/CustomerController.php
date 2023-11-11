<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return view('showCustomer',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'idcard' => $request->idcard


            
        ]);

        // dd($customer);
        // $customer ->save();
        // $newCustomer = Customer::create($customer);


        return redirect('/customers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        // $customers = Customer::show($customer);

        return view('showCustomer');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customer = Customer::find($customer);

        return view('editCustomer', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::find($customer);
        $customer->nama = $request->get('nama');
        $customer->alamat = $request->get('alamat');
        $customer->telp = $request->get('telp');
        $customer->idcard = $request->get('idcard');
        $customer->save();

        return redirect('/customers')->with('success', 'Customer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
