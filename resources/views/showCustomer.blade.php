@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-5">Daftar Customer</h1>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>ID Card</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>

                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->nama }}</td>
                                <td>{{ $customer->alamat }}</td>
                                <td>{{ $customer->telp }}</td>
                                <td>{{ $customer->idcard }}</td>
                                <td>
                               

                                    <form onsubmit="return confirm('Yakin ingin hapus?');"
                                        action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info">Lihat</a>
                                        <a href="{{ route('customers.edit', $customer->id) }}"
                                            class="btn btn-warning">Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
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
