<!DOCTYPE html>
@extends('layouts.app')

@section('Admin', 'Produk')

@section('content')


    <div class="container mt-5">
        <div class="row tm-content-row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table id="produk-table" class="table table-hover tm-table-small tm-product-table mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Harga/kg</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($show as $produk)
                                    <tr>
                                        <td class="tm-product-name">{{ $produk->id_produk }}</td>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td>{{ $produk->deskripsi }}</td>
                                        <td>{{ $produk->harga }}</td>
                                        <td>{{ $produk->stok }}</td>
                                        <td>
                                        <td>
                                            <a href="{{ route('produk.edit', $produk->id_produk) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form method="POST"
                                                action="{{ url('/api/hapusproduk/' . $produk->id_produk) }}"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('produk.add') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        Produk</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // URL API
            const apiUrl = '/api/produk'; // Ganti dengan URL API Anda

            // AJAX request
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function(response) {
                    const tbody = $('#produk-table tbody');
                    tbody.empty(); // Kosongkan tabel sebelum menambahkan data

                    // Looping data produk
                    response.forEach((produk) => {
                        const row = `
                            <tr>
                                <td>${produk.id_produk}</td>
                                <td>${produk.nama_produk}</td>
                                <td>${produk.deskripsi}</td>
                                <td>${produk.harga}</td>
                                <td>${produk.stok}</td>
                                <td>
                                    <button class="edit-btn" data-id_produk="${produk.id_produk}">Edit</button>
                                    <button class="delete-btn" data-id_produk="${produk.id_produk}">Hapus</button>
                                </td>
                            </tr>
                        `;
                        tbody.append(row); // Tambahkan baris ke tabel
                    });
                    // Event listener untuk tombol Edit
                    $('.edit-btn').on('click', function() {
                        const idProduk = $(this).data('id_produk');
                        alert('Edit produk dengan ID: ' + idProduk);

                        //Mengarahkan ke form Edit 
                        $('.edit-btn').on('click', function() {
                            const idProduk = $(this).data('id_produk');
                            const editUrl = `/produk/edit/${idProduk}`; // URL form edit

                            // Redirect ke halaman edit
                            window.location.href = editUrl;
                        });
                    });

                    // Event listener untuk tombol Hapus
                    $('.delete-btn').on('click', function() {
                        if (confirm('Yakin ingin menghapus produk ini?')) {
                            $.ajax({
                                url: `${apiUrl}/${idProduk}`, // Endpoint hapus produk
                                method: 'DELETE',
                                success: function() {
                                    alert('Produk berhasil dihapus.');
                                    location
                                        .reload(); // Reload halaman untuk memuat ulang data
                                },
                                error: function() {
                                    alert('Gagal menghapus produk.');
                                }
                            });
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Gagal memuat data produk.');
                }
            });
        });
    </script>

@endsection
