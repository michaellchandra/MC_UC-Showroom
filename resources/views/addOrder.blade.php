@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tambah Order</div>

                    <div class="card-body">
                        <form method="POST" action="/orders">
                            @csrf

                            <div class="form-group row">
                                <label for="id_kendaraan" class="col-md-4 col-form-label text-md-right">ID Kendaraan</label>

                                <div class="col-md-6">
                                    <select id="id_kendaraan" class="form-control" name="id_kendaraan">
                                        @foreach ($vehicles as $vehicle)
                                            <option value="{{ $vehicle->id }}">{{ $vehicle->model }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_customer" class="col-md-4 col-form-label text-md-right">ID Customer</label>

                                <div class="col-md-6">
                                    <select id="id_customer" class="form-control" name="id_customer">
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah_kendaraan" class="col-md-4 col-form-label text-md-right">Jumlah Kendaraan</label>

                                <div class="col-md-6">
                                    <input id="jumlah_kendaraan" type="number" class="form-control" name="jumlah_kendaraan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="total_biaya" class="col-md-4 col-form-label text-md-right">Total Biaya</label>

                                <div class="col-md-6">
                                    <input id="total_biaya" type="number" class="form-control" name="total_biaya" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
