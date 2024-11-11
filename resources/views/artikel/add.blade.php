<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - Add Article</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('jquery-ui-datepicker/jquery-ui.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">

</head>

<body>
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="tm-site-logo" style="max-width: 100px; height: 100px;" />
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                            Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq.index') }}"><i class="fas fa-file-alt"></i> FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produk.index') }}"><i class="fas fa-shopping-cart"></i>
                            Produk</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('artikel.index') }}"><i class="far fa-user"></i>
                            Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produsen.index') }}"><i class="far fa-user"></i>
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
                            <h2 class="tm-block-title d-inline-block">Tambah Artikel Baru</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form action="/api/artikel/add" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
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
                                    <label for="judul">Judul</label>
                                    <input id="judul" name="judul" type="text" class="form-control validate" required />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="konten">Konten</label>
                                    <textarea id="konten" name="konten" class="form-control validate" rows="3" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tgl_upload">Tanggal Upload</label>
                                    <input type="datetime-local" id="tgl_upload" name="tgl_upload" class="form-control" required />
                                </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input id="fileInput" type="file" name="gambar" style="display:none;" />
                                <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD ARTICLE IMAGE" onclick="document.getElementById('fileInput').click();" />
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase">Tambah Artikel</button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
