<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fish Bites - Login Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="Logo" class="tm-site-logo"
                        style="max-width: 100px; height: 100px;" />
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>
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


                            <form id="loginForm">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="username" class="form-control validate" id="username" name="username"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control validate" id="password" name="password"
                                        required>
                                </div>
                                <div class="mt-4">
                                    <button type="submit"
                                        class="btn btn-primary btn-block text-uppercase">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            var username = $('#username').val();
            var password = $('#password').val();

            $.ajax({
                url: '/api/login',
                type: 'POST',
                data: {
                    username: username,
                    password: password,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                        'content')
                },
                success: function(response) {
                    localStorage.setItem('token', response.token);
                    alert('Selamat datang kembali ' + response.admin);
                    window.location.href = '/admin';
                },
                error: function(xhr, status, error) {
                    alert('Login failed: ' + xhr.responseJSON.error);
                }
            });
        });
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="/vendors/sweetalert/sweetalert.min.js"></script>
</body>

</html>
