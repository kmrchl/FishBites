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
                            <table class="table table-hover tm-table-small tm-product-table mx-auto">
                                <thead>
                                    <tr>
                                        <th scope="col"><input type="checkbox" id="selectAll" /></th>
                                        <th scope="col">ID</th>
                                        <th scope="col">Pertanyaan</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Tgl Upload</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faqs as $faq)
                                        <tr>
                                            <th scope="row"><input type="checkbox" name="ids[]"
                                                    value="{{ $faq->id_faq }}" class="selectItem" /></th>
                                            <td>{{ $faq->id_faq }}</td>
                                            <td>{{ $faq->pertanyaan }}</td>
                                            <td>{{ $faq->jawaban }}</td>
                                            <td>{{ $faq->timestamp }}</td>
                                            <td>
                                                <a href="{{ route('faq.edit', $faq->id_faq) }}"
                                                    class="btn btn-primary btn-sm">Edit</a>

                                            </td>
                                        </tr>
                                    @endforeach
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
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        // Pilih semua checkbox
        document.getElementById('selectAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('.faq-checkbox');
            checkboxes.forEach(checkbox => checkbox.checked = this.checked);
        });
    </script>



@endsection

</html>
