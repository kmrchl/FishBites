@extends('layouts.app')

@section('Admin', 'Kategori')


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
                                    <th scope="col">Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $kat)
                                    <tr>
                                        <th scope="row"><input type="checkbox" /></th>
                                        <td>{{ $kat->kategori }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('kategori.add') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        Kategori</a>

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


</html>
