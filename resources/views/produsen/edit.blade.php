<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - Edit Produsen</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
  </head>

  <body>
  <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="{{ route('dashboard.index') }}">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="tm-site-logo" style="max-width: 100px; height: 100px;" />
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
          <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                            Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq.index') }}"><i class="fas fa-file-alt"></i> FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produk.index') }}"><i class="fas fa-shopping-cart"></i>
                            Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel.index') }}"><i class="far fa-user"></i>
                            Artikel</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('produsen.index') }}"><i class="far fa-user"></i>
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
                <h2 class="tm-block-title d-inline-block">Edit Produsen</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
                <div class="col-12">
                  <form method="POST" action="{{ route('produsen.update', $produsen->id_produsen) }}" class="tm-edit-product-form">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                      <label for="nama_produsen">Produsen</label>
                      <textarea class="form-control validate" rows="1" id="nama_produsen" name="nama_produsen"
                      value="{{ old('nama_produsen', $produsen->nama_produsen) }}" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                      <label for="lokasi">Lokasi</label>
                      <textarea class="form-control validate" rows="2" id="lokasi" name="lokasi" value="{{ old('lokasi', $produsen->lokasi) }}" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                      <button type="submit" class="btn btn-primary btn-block text-uppercase">Edit Produsen</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
