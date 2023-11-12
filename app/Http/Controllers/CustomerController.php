<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\VehicleController;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return view('showCustomer', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers =Customer::all();
        return view('addCustomer')->with('customers',$customers);
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
    public function show(Customer $customers)
    {
        // $customers = Customer::show($customer);

        return view('showCustomer', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $id)
    {
        $customers = Customer::find($id);

        return view('editCustomer', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $id)
    {
        $customers = Customer::find($id);
        $customers->nama = $request->nama;
        $customers->alamat = $request->alamat;
        $customers->telp = $request->telp;
        $customers->idcard = $request->idcard;
        $customers->save();

        return redirect('/customers', compact('customers'))->with('success', 'Customer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $customers = Customer::findOrFail($id);

        //  Storage::delete('public/vehicles/' . $vehicle->image);

        // Delete customer
        $customers->delete();

        // Redirect to index
        return redirect('/customers',compact('customers') )->with(['success' => 'Data Berhasil Dihapus']);
    }
}
