<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehicleRequest $request)
    {
        $vehicle = new Vehicle([
            'tipe' => $request->get('tipe'),
            'model' => $request->get('model'),
            'tahun' => $request->get('tahun'),
            'jumlahPenumpang' => $request->get('jumlahPenumpang'),
            'manufaktur' => $request->get('manufaktur'),
            'harga' => $request->get('harga'),
            'tipeBahanBakar' => $request->get('tipeBahanBakar'),
            'luasKargo' => $request->get('luasKargo'),
            'ukuranBagasi' => $request->get('ukuranBagasi'),
            'kapasitasBahanBakar' => $request->get('kapasitasBahanBakar')
        ]);

        $vehicle->save();

        return redirect('/vehicles')->with('success', 'Kendaraan berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        $vehicle = Vehicle::find($vehicle);

        return view('vehicles.show', compact('vehicle'));
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
    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
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
