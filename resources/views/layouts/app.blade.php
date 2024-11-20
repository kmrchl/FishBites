<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Admin', 'Fishbites')</title>
    <!-- Tambahkan link CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap" />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('jquery-ui-datepicker/jquery-ui.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
</head>

<body id="reportsPage">
    <div class="" id="home">

        <header>
            <nav class="navbar navbar-expand-xl">
                <div class="container h-100">
                    <a class="navbar-brand" href="">
                        <img src="img/logo.png" alt="Logo" class="tm-site-logo"
                            style="max-width: 100px; height: 100px;" />
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars tm-nav-icon"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto h-100">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.index') }}">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('faq.index') }}">
                                    <i class="fas fa-file-alt"></i> FAQ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('produk.index') }}">
                                    <i class="fas fa-shopping-cart"></i> Products
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('artikel.index') }}">
                                    <i class="far fa-user"></i> Article
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cog"></i>
                                    <span> Settings <i class="fas fa-angle-down"></i> </span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Kategori</a>
                                    <a class="dropdown-item" href="{{ route('produsen.index') }}">Mitra</a>
                                    <a class="dropdown-item" href="{{ route('customer.index') }}">Customer</a>
                                </div>
                            </li>
                        </ul>
                        <form action="/logout" method="POST">
                            @csrf

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <button id="logout-btn" type="submit" class="nav-link d-block">
                                        <b>Logout</b>
                                    </button>
                                </li>
                            </ul>

                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} @binarybits. All rights reserved.</p>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            // Tangkap token login dari localStorage
            const token = localStorage.getItem('token');

            if (!token) {
                alert('Token login tidak ditemukan. Silakan login terlebih dahulu.');
                return;
            }

            // Event handler untuk tombol Logout
            $('#logout-btn').on('click', function(e) {
                e.preventDefault();

                // Lakukan permintaan logout
                $.ajax({
                    url: '/api/logout', // Endpoint logout API
                    method: 'POST',
                    headers: {
                        Authorization: Bearer < token > , // Kirim token melalui header
                    },
                    success: function(response) {
                        alert('Logout berhasil.');
                        // Hapus token dari localStorage
                        localStorage.removeItem('token');
                        // Redirect ke halaman login
                        window.location.href = '/';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error saat logout:', error);
                        alert('Gagal logout. Silakan coba lagi.');
                    },
                });
            });
        });
    </script> --}}

    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function() {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function() {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('jquery-ui-datepicker/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Tambahkan script JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        $('#logout-btn').on('click', function() {
            localStorage.removeItem('token'); // Hapus token
            window.location.href = '/login'; // Redirect ke halaman login
        });
    </script>
    <script>
        $.ajaxSetup({
            beforeSend: function(xhr) {
                const token = localStorage.getItem('token');
                if (token) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                }
            },
        });
    </script>
</body>

</html>
