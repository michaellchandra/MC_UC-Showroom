@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="mb-5">Daftar Kendaraan</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped" >
                <thead>
                    <th>ID</th>
                    <th>Tipe</th>
                    <th>Model</th>
                    <th>Tahun</th>
                    <th>Jumlah Penumpang</th>
                    <th>Manufaktur</th>
                    <th>Harga</th>
                    <th>Tipe Bahan Bakar</th>
                    <th>Luas Kargo</th>
                    <th>Ukuran Bagasi</th>
                    <th>Kapasitas Bahan Bakar</th>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle )
                    <tr>
                        
                        <td>{{ $vehicle->id }}</td>
                        <td>{{ $vehicle->tipe }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->tahun }}</td>
                        <td>{{ $vehicle->jumlahPenumpang }}</td>
                        <td>{{ $vehicle->manufaktur }}</td>
                        <td>{{ $vehicle->harga }}</td>
                        <td>{{ $vehicle->tipeBahanBakar }}</td>
                        <td>{{ $vehicle->luasKargo }}</td>
                        <td>{{ $vehicle->ukuranBagasi }}</td>
                        <td>{{ $vehicle->kapasitasBahanBakar }}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection