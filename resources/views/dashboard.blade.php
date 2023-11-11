@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/addorder" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> New Order</a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Passengers</th>
                            <th>Manufacturer</th>
                            <th>Price</th>
                            <th>Fuel Type</th>
                            <th>Cargo Area</th>
                            <th>Baggage Size</th>
                            <th>Fuel Capacity</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mobil</td>
                            <td>Avanza</td>
                            <td>2022</td>
                            <td>7</td>
                            <td>Toyota</td>
                            <td>200000000</td>
                            <td>Pertamax</td>
                            <td>2.5</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection
