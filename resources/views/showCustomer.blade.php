@extends('layouts.admin')

@section('content')

<div class="container">
    <h1 class="mb-5">Daftar Customer</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped" >
                <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>ID Card</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($customers as $customer )
                    <tr>
                        
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->nama }}</td>
                        <td>{{ $customer->alamat }}</td>
                        <td>{{ $customer->telp }}</td>
                        <td>{{ $customer->idcard }}</td>
                        <td>
                            <form action="post"action="/editcustomer">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                            
                            
                        </td>
                        

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection