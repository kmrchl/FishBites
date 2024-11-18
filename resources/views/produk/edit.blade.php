<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fish Bites - Edit Product</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
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
                            <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST"
                                class="tm-edit-product-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <!-- Admin Selection -->
                                <div class="form-group mb-3">
                                    <label for="id_admin">Admin</label>
                                    <select name="id_admin" id="id_admin" class="custom-select tm-select-accounts"
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
                                    <input id="name" name="nama_produk" type="text"
                                        class="form-control validate"
                                        value="{{ old('nama_produk', $produk->nama_produk) }}" required />
                                </div>

                                <!-- Description -->
                                <div class="form-group mb-3">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" name="deskripsi" class="form-control validate" rows="3" required>{{ old('deskripsi', $produk->deskripsi) }}</textarea>
                                </div>

                                <!-- Producer Selection -->
                                <div class="form-group mb-3">
                                    <label for="id_produsen">Produsen</label>
                                    <select name="id_produsen" id="id_produsen" class="custom-select tm-select-accounts"
                                        required>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#expire_date").datepicker();
        });
    </script>
</body>

</html>
