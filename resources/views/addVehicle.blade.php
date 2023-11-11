@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="fw-bold mb-3">Add Vehicle</h1>

        <form action="/vehiclesubmit" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="vehicle-type">Vehicle Type:</label>
                <select class="form-control" id="vehicle-type" name="tipe"required>
                    <option value="car">Car</option>
                    <option value="motorcycle">Motorcycle</option>
                    <option value="truck">Truck</option>
                </select><br>

            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-model">Vehicle Model:</label>
                <input class="form-control" type="text" name="model" required><br>
            </div>
            <div class="mb-3">
                <label class="form-label" for="vehicle-year">Vehicle Year:</label>
                <input class="form-control" type="number" name="tahun" min="1900" max="2099" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-price">Vehicle Price:</label>
                <input class="form-control" type="number" name="harga" min="0" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-manufacturer">Vehicle Manufacturer:</label>
                <input class="form-control" type="text" name="manufaktur" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-passengers">Vehicle Passengers:</label>
                <input class="form-control" type="number" name="jumlahPenumpang" min="1" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-fuel-type">Vehicle Fuel Type:</label>
                <input class="form-control" type="text"name="tipeBahanBakar"><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-cargo-area">Vehicle Cargo Area:</label>
                <input class="form-control" type="number" name="luasKargo" min="0"><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-baggage-size">Vehicle Baggage Size:</label>
                <input class="form-control" type="number" name="ukuranBagasi" min="0"><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-fuel-capacity">Vehicle Fuel Capacity:</label>
                <input class="form-control" type="number" name="kapasitasBahanBakar" min="0"><br>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </div>
@endsection
