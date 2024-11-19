@extends('layouts.app')

@section('Admin', 'FaQ')

@section('content')

    <div class="container mt-5">
        <div class="row tm-content-row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <form id="deleteForm" action="{{ route('faq.hapus') }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus data yang dipilih?');">
                            @csrf
                            @method('DELETE')
                            <table id="faq-table" class="table table-hover tm-table-small tm-product-table mx-auto">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Pertanyaan</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Tgl Upload</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                    </div>
                    <a href="{{ route('faq.add') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        FAQ</a>

                    <button class="btn btn-primary btn-block text-uppercase" type="submit">Hapus FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // URL API
            const apiUrl = '/api/faq'; // Ganti dengan URL API Anda

            // AJAX request
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function(response) {
                    const tbody = $('#faq-table tbody');
                    tbody.empty(); // Kosongkan tabel sebelum menambahkan data

                    // Looping data faq
                    response.forEach((faq) => {
                        const row = `
                            <tr>
                                <td>${faq.id_faq}</td>
                                <td>${faq.pertanyaan}</td>
                                <td>${faq.jawaban}</td>
                                <td>${faq.timestamp}</td>
                                <td>
                                    <button class="edit-btn" data-id_faq="${faq.id_faq}">Edit</button>
                                    <button class="delete-btn" data-id_faq="${faq.id_faq}">Hapus</button>
                                </td>
                            </tr>
                        `;
                        tbody.append(row); // Tambahkan baris ke tabel
                    });
                    // Event listener untuk tombol Edit
                    $('.edit-btn').on('click', function() {
                        const idFaq = $(this).data('id_faq');

                        //Mengarahkan ke form Edit 
                        $('.edit-btn').on('click', function() {
                            const idFaq = $(this).data('id_faq');
                            const editUrl = `/faq/edit/${idFaq}`; // URL form edit

                            // Redirect ke halaman edit
                            window.location.href = editUrl;
                        });
                    });

                    // Event listener untuk tombol Hapus
                    $('.delete-btn').on('click', function() {
                        if (confirm('Yakin ingin menghapus Pertanyaan ini?')) {
                            $.ajax({
                                url: `${apiUrl}/${idFaq}`, // Endpoint hapus faq
                                method: 'DELETE',
                                success: function() {
                                    alert('FaQ berhasil dihapus.');
                                    location
                                        .reload(); // Reload halaman untuk memuat ulang data
                                },
                                error: function() {
                                    alert('Gagal menghapus FaQ.');
                                }
                            });
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Gagal memuat data faq.');
                }
            });
        });
    </script>



@endsection

</html>
