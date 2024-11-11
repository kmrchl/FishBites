<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - Login Admin</title>
    <link rel="stylesheet" 
    href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap"
    />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="Logo" class="tm-site-logo" style="max-width: 100px; height: 100px;" />
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
              <!-- Menghapus item menu dari navbar
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <i class="fas fa-tachometer-alt"></i> Dashboard
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="far fa-file-alt"></i>
                  <span> Reports <i class="fas fa-angle-down"></i> </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Daily Report</a>
                  <a class="dropdown-item" href="#">Weekly Report</a>
                  <a class="dropdown-item" href="#">Yearly Report</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">
                  <i class="fas fa-shopping-cart"></i> Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="article.html">
                  <i class="far fa-user"></i> Article
                </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-cog"></i>
                  <span> Settings <i class="fas fa-angle-down"></i> </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Billing</a>
                  <a class="dropdown-item" href="#">Customize</a>
                </div>
              </li>
              -->
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <img src="img/logo.png" alt="App Logo" class="tm-app-logo mb-4" style="max-width: 300px;" />
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="/admin" method="post" class="tm-login-form">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control validate" id="email" name="email" required>
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control validate" id="password" name="password" required>
                  </div>
                  <div class="mt-4">
                  <input type="submit" class="btn btn-primary btn-block text-uppercase" value="Sign In">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/vendors/sweetalert/sweetalert.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: 'Email harus diisi',
                    email: 'Harus sesuai format email'
                },
                password: {
                    required: 'Password harus diisi'
                }
            },
            errorClass: "text-danger",
            submitHandler: function () {
                $.ajax({
                    url: "{{ url('/api/signin') }}",
                    method: 'POST',
                    type: 'POST',
                    data: {
                        email: $('#email').val(),
                        password: $('#password').val(),
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res)
                            window.location = "{{ url('/dashboard') }}";
                        else {
                            swal({
                                title: 'Gagal',
                                text: 'Pengguna tidak terdaftar',
                                icon: 'error'
                            });
                        }
                    },
                    error: function (err) {
                        console.log(err);

                        swal({
                            title: 'Gagal',
                            text: err.responseJSON.message,
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });
   </script>
</body>
</html>
