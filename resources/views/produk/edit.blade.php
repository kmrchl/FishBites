@extends('layouts.app')

@section('Admin', 'Produk: Edit')


@section('content')

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Edit Produk</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <!-- Update the form action and method -->
                            <form id_produk="edit-produk-form" class="tm-edit-product-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Admin Selection -->
                                <div class="form-group mb-3">
                                    <label for="id_admin">Admin</label>
                                    <select name="id_admin" id_produk="id_admin" class="custom-select tm-select-accounts"
                                        required>
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id_admin }}"
                                                {{ $produk->id_admin == $admin->id_admin ? 'selected' : '' }}>
                                                {{ $admin->username }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Product Name -->
                                <div class="form-group mb-3">
                                    <label for="name">Nama Produk</label>
                                    <input id_produk="name" name="nama_produk" type="text" class="form-control validate"
                                        value="{{ old('nama_produk', $produk->nama_produk) }}" required />
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id_produk="deskripsi" name="deskripsi" class="form-control validate" rows="3" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                                </div>

                                <!-- Producer Selection -->
                                <div class="form-group mb-3">
                                    <label for="id_kategori">Kategori</label>
                                    <select name="id_kategori" id_produk="id_kategori"
                                        class="custom-select tm-select-accounts" required>
                                        @foreach ($kategori as $kat)
                                            <option value="{{ $kat->id_kategori }}"
                                                {{ $produk->id_kategori == $kat->id_kategori ? 'selected' : '' }}>
                                                {{ $kat->kategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="id_produsen">Produsen</label>
                                    <select name="id_produsen" id_produk="id_produsen"
                                        class="custom-select tm-select-accounts" required>
                                        @foreach ($produsens as $produsen)
                                            <option value="{{ $produsen->id_produsen }}"
                                                {{ $produk->id_produsen == $produsen->id_produsen ? 'selected' : '' }}>
                                                {{ $produsen->nama_produsen }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Price per Kg -->
                                <div class="form-group mb-3">
                                    <label for="harga">Harga/Kg</label>
                                    <input type="number" id="harga" name="harga" class="form-control"
                                        value="{{ old('harga', $produk->harga) }}" required />
                                </div>

                                <!-- Stock per Kg -->
                                <div class="form-group mb-3">
                                    <label for="stok">Stok/Kg</label>
                                    <input type="number" id="stok" name="stok" class="form-control"
                                        value="{{ old('stok', $produk->stok) }}" required />
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Edit
                                        Produk</button>
                                </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-edit mx-auto">
                                <img src="img/ikan.jpg" alt="Product image" class="img-fluid d-block mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                    onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input name="gambar" id="fileInput" type="file" style="display:none;" />
                                <input name="gambar" id="gambar" type="button"
                                    class="btn btn-primary btn-block mx-auto" value="CHANGE PRODUCT IMAGE"
                                    onclick="document.getElementById('fileInput').click();" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $('#edit-produk-form').on('submit', function(e) {
            e.preventDefault(); // Mencegah refresh halaman

            const idProduk = $(this).data('id_produk');
            const formData = new FormData(this); // Gunakan FormData untuk menangani file

            $.ajax({
                url: `/api/produk/${idProduk}`,
                method: 'PUT',
                data: formData,
                processData: false, // Jangan proses data karena menggunakan FormData
                contentType: false, // Jangan tentukan jenis konten
                success: function(response) {
                    alert('Produk berhasil diperbarui.');
                    const editUrl = `/produk`; // kembali ke table Produk

                    // Redirect ke halaman Produk
                    window.location.href = editUrl;
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Gagal memperbarui produk.');
                }
            });
        });
    </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#expire_date").datepicker();
        });
    </script>


@endsection
