@extends('layouts.app')
@section('Admin', 'Produk: Add')


@section('content')


    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Tambah Produk Baru</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form method="POST" action="{{ route('produk.store') }}" class="tm-edit-product-form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="id_admin">Admin</label>
                                    <select name="id_admin" class="form-control" id="id_admin" required>
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input id="nama_produk" name="nama_produk" type="text" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="id_produsen">Produsen</label>
                                    <select name="id_produsen" class="form-control" id="id_produsen" required>
                                        @foreach ($producers as $produsen)
                                            <option value="{{ $produsen->id_produsen }}">
                                                {{ $produsen->nama_produsen }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="harga">Harga/kg</label>
                                    <input type="number" id="harga" name="harga" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="stok">Stok/kg</label>
                                    <input type="number" id="stok" name="stok" class="form-control" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block text-uppercase">Tambah Produk
                                    Sekarang</button>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                    onclick="document.getElementById('fileInput').click();"></i>
                            </div>

                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" style="display:none;" name="gambar" />
                                <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE"
                                    onclick="document.getElementById('fileInput').click();" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
