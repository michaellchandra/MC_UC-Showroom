@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="fw-bold mb-3">Edit Customer</h1>

    <form action="/updatecustomer" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="customer-name">Customer Name:</label>
            <input class="form-control" type="text" name="nama"  required><br>
        </div>

        <div class="mb-3">
            <label class="form-label" for="customer-address">Customer Address:</label>
            <input class="form-control" type="text" name="alamat" required><br>
        </div>

        <div class="mb-3">
            <label class="form-label" for="customer-phone">Customer Phone:</label>
            <input class="form-control" type="tel" name="telp"  required><br>
        </div>

        <div class="mb-3">
            <label class="form-label" for="customer-id-card">Customer ID Card:</label>
            <input class="form-control" type="text" name="idcard" required><br>
        </div>

        {{-- <a href="/customersubmit" class="btn btn-primary mb-3">Submit</a> --}}
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
</div>
@endsection