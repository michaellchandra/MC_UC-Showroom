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

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        return view ('addVehicle', compact('vehicles'))->with('vehicles', $vehicles);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $vehicle = new Vehicle([
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
        return redirect('/vehicles',compact('vehicle'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $vehicle = Vehicle::find($vehicle);
        $vehicle = Vehicle::find($id);
        return view('showVehicle', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->tipe = $request->tipe;
        $vehicle->model = $request->model;
        $vehicle->tahun = $request->tahun;
            $vehicle->jumlahPenumpang = $request->jumlahPenumpang;
            $vehicle->manufaktur = $request->manufaktur;
            $vehicle->harga = $request->harga;
            $vehicle->tipeBahanBakar = $request->tipeBahanBakar;
            $vehicle->luasKargo = $request->luasKargo;
            $vehicle->ukuranBagasi = $request->ukuranBagasi;
            $vehicle->kapasitasBahanBakar = $request->kapasitasBahanBakar;

            $vehicle->save();
            return redirect('/vehicles', compact('vehicle'))->with('success', 'Vehicle has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect('/vehicles',compact('vehicle'));

    }
}
