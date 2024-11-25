@extends('layouts.app')

@section('Admin', 'FaQ: Add')

@section('content')


    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Tambah FAQ</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-12">
                            <form id="tambah-faq" action="{{ route('faq.store') }}" method="POST"
                                class="tm-edit-product-form" enctype="multipart/form-data">
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
                                    <label for="pertanyaan">Pertanyaan</label>
                                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jawaban">Jawaban</label>
                                    <textarea class="form-control" id="jawaban" name="jawaban" rows="3" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Tambah
                                        FAQ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- <script>
    $(document).ready(function() {
        $('#tambah-faq').on('submit', function(e) {
            e.preventDefault(); // Mencegah refresh halaman

            const formData = new FormData(this); // Membuat FormData untuk menangani file

            $.ajax({
                url: '/api/faq/add', // Ganti dengan URL API Anda
                method: 'POST',
                data: formData,
                processData: false, // Jangan proses data karena menggunakan FormData
                contentType: false, // Jangan tentukan jenis konten karena menggunakan FormData
                success: function(response) {
                    alert('Produk berhasil ditambahkan.');
                    $('#tambah-faq', function() {
                        const editUrl = `/faq`; // URL ke Index Produk
                        // Redirect ke halaman edit
                        window.location.href = editUrl;
                    }); // Reset form setelah berhasil
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        const errors = xhr.responseJSON.errors;
                        alert('Error: ' + Object.values(errors).join(', '));
                    } else {
                        alert('Gagal menambahkan produk.');
                    }
                }
            });
        });
    });
</script> --}}
