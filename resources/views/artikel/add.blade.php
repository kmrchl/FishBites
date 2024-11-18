@extends('layouts.app')
@section('Admin', 'Artikel: Add')

@section('content')

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Tambah Artikel Baru</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="/api/artikel/add" method="POST" enctype="multipart/form-data"
                                class="tm-edit-product-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="id_admin">Admin</label>
                                    <select name="id_admin" id="id_admin" class="form-control" required>
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="judul">Judul</label>
                                    <input id="judul" name="judul" type="text" class="form-control validate"
                                        required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="konten">Konten</label>
                                    <textarea id="konten" name="konten" class="form-control validate" rows="3" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tgl_upload">Tanggal Upload</label>
                                    <input type="datetime-local" id="tgl_upload" name="tgl_upload" class="form-control"
                                        required />
                                </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                    onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" name="gambar" style="display:none;" />
                                <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD ARTICLE IMAGE"
                                    onclick="document.getElementById('fileInput').click();" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Tambah
                                Artikel</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
