@extends('layouts.app')

@section('Admin', 'Mitra')


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
                                    <th scope="col">ID</th>
                                    <th scope="col">Produsen</th>
                                    <th scope="col">Lokasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produsen as $petani)
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td>{{ $petani->id_produsen }}</td>
                                        <td>{{ $petani->nama_produsen }}</td>
                                        <td>{{ $petani->lokasi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('produsen.add') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        Produsen</a>

                    <form method="POST" action="{{ url('/api/hapus/' . $petani->id_produsen) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary btn-block text-uppercase">Hapus Produsen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


</html>
