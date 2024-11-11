<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fish Bites - Dashboard</title>
    <link rel="stylesheet" 
    href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@400;700&display=swap"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href={{ route('dashboard.index') }}>
                    <img src="img/logo.png" alt="Logo" class="tm-site-logo" style="max-width: 100px; height: 100px;" />
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('dashboard.index') }}">
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
                    </ul>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link d-block" href="login.html">
                          Admin, <b>Logout</b>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
              <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="text-white mt-5 mb-5">Welcome back, <b>Admin</b></p>
                    </div>
                </div>
                <!-- row -->
                <div class="row tm-content-row">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                        <div class="tm-bg-primary-dark tm-block">
                            <h2 class="tm-block-title">Terlaris</h2>
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                        <div class="tm-bg-primary-dark tm-block">
                            <h2 class="tm-block-title">Penjualan Ikan (perbulan/kg)</h2>
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
                        <div class="tm-bg-primary-dark tm-block tm-block-taller">
                            <h2 class="tm-block-title">Storage Information</h2>
                            <div id="pieChartContainer">
                                <canvas id="pieChart" class="chartjs-render-monitor" width="200" height="200"></canvas>
                            </div>                        
                        </div>
                    </div>

<<<<<<< HEAD
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Mitra</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Complete Date</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
=======
    <ul class="horizontal-list">
        <li><a href="#">Produk</a></li>
        <li><a href="/produsen">Produsen</a></li>
        <li><a href="/artikel">artikel</a></li>
        <li><a href="/faq">FaQ</a></li>
        <li><a href="/customer">Customer</a></li>
        <li><a href="/chat">Customer</a></li>
    </ul>
>>>>>>> 483313caa2036edacc723032bb6b40fa8cb5d50c

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
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();                
            });
        })
    </script>
</body>

</html>