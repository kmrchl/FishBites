<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - Products</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
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
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq.index') }}"><i
                                class="fas fa-file-alt"></i> FAQ</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('produk.index') }}"><i
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
                        <table class="table table-hover tm-table-small tm-product-table mx-auto">
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
                                @foreach ($show as $produk)
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <a href="{{ route('produk.add') }}" class="btn btn-primary btn-block text-uppercase mb-3">Tambah
                        Produk</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
