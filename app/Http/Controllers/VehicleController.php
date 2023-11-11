<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('showVehicle',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('addVehicle');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Vehicle::create([
            'tipe' => $request->tipe,
            'model' => $request->model,
            'tahun' => $request->tahun,
            'jumlahPenumpang' => $request->jumlahPenumpang,
            'manufaktur' => $request->manufaktur,
            'harga' => $request->harga,
            'tipeBahanBakar' => $request->tipeBahanBakar,
            'luasKargo' => $request->luasKargo,
            'ukuranBagasi' => $request->ukuranBagasi,
            'kapasitasBahanBakar' => $request->kapasitasBahanBakar
        ]);
        


        return redirect('/vehicles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        // $vehicle = Vehicle::find($vehicle);

        return view('showVehicle');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        $vehicle = Vehicle::find($vehicle);

        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
