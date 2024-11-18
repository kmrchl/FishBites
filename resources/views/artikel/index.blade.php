@extends('layouts.app')

@section('Admin', 'Artikel')


@section('content')


    <div class="container mt-5">
        <div class="row tm-content-row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Konten</th>
                                    <th scope="col">Tgl Upload</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel as $post)
                                    <tr>
                                        <td>{{ $post->judul }}</td>
                                        <td>{{ Str::limit($post->konten, 50) }}</td>
                                        <td>{{ $post->tgl_upload }}</td>
                                        <td>
                                            <a href="{{ route('artikel.edit', $post->id_artikel) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST"
                                                action="{{ url('/api/hapusartikel/' . $post->id_artikel) }}"
                                                style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-primary btn-block text-uppercase">Hapus
                                                    artikel</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        artikel</a>
                </div>
            </div>
        </div>
    </div>


@endsection
