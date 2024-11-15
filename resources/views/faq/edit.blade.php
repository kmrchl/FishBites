<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - Edit FAQ</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap"
    />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
                    <li class="nav-item"><a class="nav-link active" href="{{ route('faq.index') }}"><i class="fas fa-file-alt"></i> FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('produk.index') }}"><i class="fas fa-shopping-cart"></i>
                            Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('artikel.index') }}"><i class="far fa-user"></i>
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
                <h2 class="tm-block-title d-inline-block">Edit FAQ</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-12">
                <form method="POST" action="{{ route('faq.update', $faq->id_faq) }}" class="tm-edit-product-form">
                  @csrf
                  @method('PUT')

                  <div class="form-group mb-3">
                    <label for="id_admin">Admin</label>
                    <select name="id_admin" id="id_admin" required class="form-control">
                      @foreach ($admins as $admin)
                        <option value="{{ $admin->id_admin }}" {{ $faq->id_admin == $admin->id_admin ? 'selected' : '' }}>
                          {{ $admin->username }}
                        </option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group mb-3">
                    <label for="pertanyaan">Pertanyaan</label>
                    <textarea class="form-control validate" id="pertanyaan" name="pertanyaan" rows="3" required>{{ old('pertanyaan', $faq->pertanyaan) }}</textarea>
                  </div>

                  <div class="form-group mb-3">
                    <label for="jawaban">Jawaban</label>
                    <textarea class="form-control validate" id="jawaban" name="jawaban" rows="3" required>{{ old('jawaban', $faq->jawaban) }}</textarea>
                  </div>

                  <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Ubah FAQ</button>
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
