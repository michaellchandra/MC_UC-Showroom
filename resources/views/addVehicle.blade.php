@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="fw-bold mb-3">Add Customer</h1>

        <form action="/submit" method="post">
            <div class="mb-3">
                <label class="form-label" for="vehicle-type">Vehicle Type:</label>
                <select class="form-control" id="vehicle-type" required>
                    <option value="car">Car</option>
                    <option value="motorcycle">Motorcycle</option>
                    <option value="truck">Truck</option>
                </select><br>

            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-model">Vehicle Model:</label>
                <input class="form-control" type="text" id="vehicle-model" required><br>
            </div>
            <div class="mb-3">
                <label class="form-label" for="vehicle-year">Vehicle Year:</label>
                <input class="form-control" type="number" id="vehicle-year" min="1900" max="2099" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-price">Vehicle Price:</label>
                <input class="form-control" type="number" id="vehicle-price" min="0" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-manufacturer">Vehicle Manufacturer:</label>
                <input class="form-control" type="text" id="vehicle-manufacturer" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-passengers">Vehicle Passengers:</label>
                <input class="form-control" type="number" id="vehicle-passengers" min="1" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-fuel-type">Vehicle Fuel Type:</label>
                <input class="form-control" type="text" id="vehicle-fuel-type"><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-cargo-area">Vehicle Cargo Area:</label>
                <input class="form-control" type="number" id="vehicle-cargo-area" min="0"><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-baggage-size">Vehicle Baggage Size:</label>
                <input class="form-control" type="number" id="vehicle-baggage-size" min="0"><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="vehicle-fuel-capacity">Vehicle Fuel Capacity:</label>
                <input class="form-control" type="number" id="vehicle-fuel-capacity" min="0"><br>
            </div>
    </div>
@endsection
