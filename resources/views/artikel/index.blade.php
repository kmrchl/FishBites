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
        $(document).ready(function() {
            // URL API
            const apiUrl = '/api/artikel'; // Ganti dengan URL API Anda

            // AJAX request
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function(response) {
                    const tbody = $('#artikel-table tbody');
                    tbody.empty(); // Kosongkan tabel sebelum menambahkan data

                    // Looping data artikel
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
                    // Event listener untuk tombol Edit
                    $('.edit-btn').on('click', function() {
                        const idArtikel = $(this).data('id_artikel');
                        alert('Edit Artikel dengan ID: ' + idArtikel);

                        //Mengarahkan ke form Edit 
                        $('.edit-btn').on('click', function() {
                            const idArtikel = $(this).data('id_artikel');
                            const editUrl =
                                `/artikel/edit/${idArtikel}`; // URL form edit

                            // Redirect ke halaman edit
                            window.location.href = editUrl;
                        });
                    });

                    // Event listener untuk tombol Hapus
                    $('.delete-btn').on('click', function() {
                        if (confirm('Yakin ingin menghapus Artikel ini?')) {
                            $.ajax({
                                url: `${apiUrl}/${idArtikel}`, // Endpoint hapus artikel
                                method: 'DELETE',
                                success: function() {
                                    alert('Artikel berhasil dihapus.');
                                    location
                                        .reload(); // Reload halaman untuk memuat ulang data
                                },
                                error: function() {
                                    alert('Gagal menghapus Artikel.');
                                }
                            });
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Gagal memuat data artikel.');
                }
            });
        });
    </script>


@endsection
