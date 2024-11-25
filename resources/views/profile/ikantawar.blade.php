@extends('layouts.profile')

@section('Produk', 'Ikan Tawar')

@section('content')


    {{-- <head>
        <!-- Basic Page Needs
                ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fish Bites</title>
        <meta name="description"
            content="Iodium | Iodium- minimal onepage personal/portofolio Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
        <meta name="keywords" content="minimal, onepage, personal, portfolio, bootstrap">
        <meta name="author" content="rudhisasmito.com">

        <!-- ==============================================
             Favicons
             =============================================== -->
        <link rel="shortcut icon" href="assets/images/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
             CSS
             =============================================== -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/superslides.css">
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

        <!-- ==============================================
             Google Fonts
             =============================================== -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
        <link href="https://fonts.cdnfonts.com/css/readex-pro" rel="stylesheet">


        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>


        <!-- Custom Stylesheet -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <!-- COLOR SKINS -->
        <link rel="stylesheet" type="text/css" href="null" id="color-skins">


        <script type="text/javascript" src="assets/js/modernizr.min.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('User', 'Fishbites')</title>
    </head> --}}

    <body>


        <!-- PAGE HEADER SECTION -->
        <div class="single-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="pull-left">
                            <div class="title">
                                <h1 class="lead wow fadeInDown">Our Product</h1>
                                <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">IKAN AIR TAWAR</h2>
                            </div>
                        </div>
                        <div class="pull-right">
                            <ol class="breadcrumb text-right">
                                <li><a href="/index">Home</a></li>
                                <li class="active">Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget search"> <!-- Search Widget -->
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
                    </span>
                </div><!-- /input-group -->
            </div>

        </div>

        <!-- BLOG SECTION -->
        <div id="" class="section blog" data-slide="">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                @foreach ($produk as $item)
                                    <div class="blog-item wow fadeInDown" id="produk-container">
                                        <div class="gambar">
                                            <img src="{{ asset('storage/' . $item->gambar) }}" alt=""
                                                class="img-responsive" />
                                        </div>

                                        <div class="item-body">
                                            <div class="meta">ikan Air Tawar</div>
                                            <p class="lead"><a href="#" title="">{{ $item->nama_produk }}</a>
                                            </p>
                                            <p><a href="/produk/detail/{{ $item->id_produk }}" title=""
                                                    class="readmore">Lihat Detail</a>
                                            </p>

                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="clearfix"></div>
                            <nav class="text-center">
                                <ul class="pagination">
                                    <li><a href="#" aria-label="Previous"><span aria-hidden="true">Prev</span></a>
                                    </li>
                                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </body>

    </html>
@endsection
