@extends('layouts.app')

@section('Admin', 'Dashboard')


@section('content')


    <div class="" id="home">
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const token = localStorage.getItem('token');
        if (token) {
            fetch('/admin', {
                    method: 'GET',
                    headers: {
                        Authorization: 'Bearer ' + token
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                })
                .catch(error => console.error('Error:', error));
        } else {
            // Token tidak ada, arahkan kembali ke login
            window.location.href = '/login';
        }
    </script>
    <script>
        $(document).ready(function() {
            // Tangkap token login dari localStorage
            const token = localStorage.getItem('token');

            if (!token) {
                alert('Token login tidak ditemukan. Silakan login terlebih dahulu.');
                window.location.href = '/login';
            }

            // Event handler untuk tombol Logout
            $('#logout-btn').on('click', function(e) {
                e.preventDefault();

                // Lakukan permintaan logout
                $.ajax({
                    url: '/api/logout', // Endpoint logout API
                    method: 'POST',
                    headers: {
                        Authorization: `Bearer ${token}`, // Kirim token melalui header
                    },
                    success: function(response) {
                        alert('Logout berhasil.');
                        // Hapus token dari localStorage
                        localStorage.removeItem('login_token');
                        // Redirect ke halaman login
                        window.location.href = '/login';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error saat logout:', error);
                        alert('Gagal logout. Silakan coba lagi.');
                    },
                });
            });
        });
    </script>


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
@endsection
