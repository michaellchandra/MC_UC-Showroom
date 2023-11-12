@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Order</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kendaraan</th>
                                    <th>Customer</th>
                                    <th>Jumlah Kendaraan</th>
                                    <th>Total Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->vehicle->model }}</td>
                                        <td>{{ $order->customer->nama }}</td>
                                        <td>{{ $order->jumlahKendaraan }}</td>
                                        <td>{{ $order->totalBiaya }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection