@extends('layouts.admin')

@section('content')

    <div class="container">

        <h1 class="fw-bold mb-3">Add Order</h1>
        <form action="/submit" method="post">
            <div class="mb-3">
                <label class="form-label" for="name">Name:</label>
                <input class="form-control" type="text" id="name" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="email">Email:</label>
                <input class="form-control" type="email" id="email" required><br>
            </div>

            <div class="mb-3">
                <label class="form-label" for="phone">Phone:</label>
                <input class="form-control" type="tel" id="phone" required><br>

            </div>



            


            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
    </div>
@endsection
