@extends('layouts.app')

@section('Admin', 'Artikel')


@section('content')


    <div class="container mt-5">
        <div class="row tm-content-row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table id="artikel-table" class="table table-hover tm-table-small tm-product-table mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Konten</th>
                                    <th scope="col">Tgl Upload</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('artikel.create') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        artikel</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $.ajax({
            url: apiUrl,
            method: 'GET',
            success: function(response) {
                console.log(response); // Log response untuk memverifikasi data
                const tbody = $('#artikel-table tbody');
                tbody.empty(); // Kosongkan tabel sebelum menambahkan data

                // Pastikan data berbentuk array
                if (Array.isArray(response)) {
                    response.forEach((artikel) => {
                        const row = `
                    <tr>
                        <td>${artikel.judul}</td>
                        <td>${artikel.konten}</td>
                        <td>${artikel.tgl_upload}</td>
                        <td>
                            <button class="edit-btn" data-id_artikel="${artikel.id_artikel}">Edit</button>
                            <button class="delete-btn" data-id_artikel="${artikel.id_artikel}">Hapus</button>
                        </td>
                    </tr>
                `;
                        tbody.append(row); // Tambahkan baris ke tabel
                    });
                } else {
                    console.error('Data tidak valid:', response);
                    alert('Data artikel tidak ditemukan');
                }
            },
            error: function(xhr, status, error) {
                console.error('Terjadi kesalahan:', error);
                alert('Gagal memuat data artikel.');
            }
        });
    </script>


@endsection
