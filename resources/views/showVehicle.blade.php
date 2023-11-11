@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="mb-5">Daftar Kendaraan</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped" >
                <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kendaraan</th>
                    <th>Telepon</th>
                    <th>ID Card</th>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle )
                    <tr>
                        
                        <td>{{ $vehicle->id }}</td>
                        <td>{{ $vehicle->nama }}</td>
                        <td>{{ $vehicle->alamat }}</td>
                        <td>{{ $vehicle->telp }}</td>
                        <td>{{ $vehicle->idcard }}</td>
                        

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection