<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - FAQ</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}" />
</head>

<body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" class="tm-site-logo"
                    style="max-width: 100px; height: 100px;" />
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}"><i
                                class="fas fa-tachometer-alt"></i>
                            Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('faq.index') }}"><i
                                class="fas fa-file-alt"></i> FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produk.index') }}"><i
                                class="fas fa-shopping-cart"></i>
                            Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel.index') }}"><i
                                class="far fa-user"></i>
                            Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produsen.index') }}"><i
                                class="far fa-user"></i>
                            Produsen</a></li>
                </ul>
            </div>
        </div>
    </nav>
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
</body>

</html>
