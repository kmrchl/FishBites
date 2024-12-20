@extends('layouts.app')
@section('Admin', 'Customer')



@section('content')
    <div class="container mt-5">
        <div class="row tm-content-row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No. Telp</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customer as $cust)
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td>{{ $cust->nama_customer }}</td>
                                        <td>{{ $cust->email }}</td>
                                        <td>{{ $cust->alamat }}</td>
                                        <td>{{ $cust->no_telp }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- <a href="{{ route('kategori.add') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        Kategori</a> --}}

                    {{-- <form method="POST" action="{{ url('/api/kategori/hapus/' . $kat->id_kategori) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary btn-block text-uppercase">Hapus</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>


@endsection
