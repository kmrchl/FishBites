@extends('layouts.profile')

@section('Title', 'Fishbites')

@section('content')

<body>

    <!-- BANNER ROTATOR SECTION -->
    <div id="slides" class="section banner" data-slide="1">
        <ul class="slides-container">
            <li> <!-- Item Banner #1 -->
                <img src="assets/images/foto home.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="caption-wrapper ">
                                <div class="slide-caption">
                                    <a href="/index">
                                        <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Fish
                                            Bites</h1>
                                    </a>
                                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Dapatkan
                                        ikan segar setiap harinya langsung di depan pintu mu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- ABOUT SECTION -->
    <div id="about" class="section about" data-slide="2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title">
                        <h1 class="lead wow fadeInDown">ABOUT US</h1>
                        <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">WHO WE ARE</h2>
                    </div>
                    <p class="wow fadeInDown">FishBites adalah sebuah aplikasi inovatif yang berfungsi sebagai jembatan
                        antara petani ikan konsumsi dan pembeli melalui sebuah platform digital yang mudah diakses.
                        Aplikasi ini dirancang untuk membantu petani di berbagai kota mempromosikan dan menjual hasil
                        budidaya mereka secara lebih efisien, membuka peluang pasar yang lebih luas dan meningkatkan
                        daya saing mereka. Bagi pembeli, FishBites menyediakan akses langsung ke berbagai pilihan ikan
                        konsumsi berkualitas, memungkinkan mereka untuk menjelajahi produk dari berbagai petani dan
                        melakukan transaksi secara langsung. Dengan menghadirkan interaksi yang lebih transparan dan
                        mendekatkan pembeli kepada sumbernya, FishBites berperan penting dalam mendukung keberlanjutan
                        sektor perikanan sekaligus memenuhi kebutuhan pasar yang terus berkembang.</p>


                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"> <!-- Item About #1 -->
                            <div class="about-item wow fadeInDown" data-wow-delay="300ms">
                                <div class="icon">
                                    <div class="fa fa-pencil"></div>
                                </div>
                                <div class="ket">
                                    <h2>Branding</h2>
                                    <p>Membantu memperkenalkan dan mempromosikan petani ikan lokal kepada khalayak
                                        ramai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"> <!-- Item About #2 -->
                            <div class="about-item wow fadeInDown" data-wow-delay="600ms">
                                <div class="icon">
                                    <div class="fa fa-support"></div>
                                </div>
                                <div class="ket">
                                    <h2>Online Support</h2>
                                    <p>Memberikan dukungan kepada para petani ikan dan calon pengusaha bubidaya ikan
                                        lokal secara online.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"> <!-- Item About #3 -->
                            <div class="about-item wow fadeInDown" data-wow-delay="900ms">
                                <div class="icon">
                                    <div class="fa fa-shopping-cart"></div>
                                </div>
                                <div class="ket">
                                    <h2>Commerce</h2>
                                    <p>Menyediakan platform penjualan digital untuk memudahkan para pelanggan yang
                                        menginginkan ikan segar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"> <!-- Item About #4 -->
                            <div class="about-item wow fadeInDown" data-wow-delay="1200ms">
                                <div class="icon">
                                    <div class="fa fa-thumbs-up"></div>
                                </div>
                                <div class="ket">
                                    <h2>Service</h2>
                                    <p>Jaminan pelayanan cepat dan ikan segar untuk para pelanggan diseluruh Indonesia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT SECTION -->
    <div id="product" class="section team" data-slide="3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title">
                        <h1 class="lead wow fadeInDown">Our Product</h1>
                        <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">WE OFFER FRESHNESS</h2>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <!-- Item Team #1 -->
                            <div class="team-item wow fadeInDown">
                                <div class="gambar">
                                    <div class="overlay">
                                    </div>
                                    <img src="assets/images/ikan laut.png" alt="" class="img-responsive" />
                                </div>
                                <div class="item-body">
                                    <a href="/ikanlaut">
                                        <h2>IKAN LAUT SEGAR</h2>
                                    </a>
                                    <h3>Ikan laut segar yang baru ditangkap untuk memastikan kualitas terbaik di meja
                                        Anda.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <!-- Item Team #2 -->
                            <div class="team-item wow fadeInDown">

                                <div class="gambar">
                                    <div class="overlay">
                                    </div>
                                    <img src="assets/images/ikan tawar.png" alt="" class="img-responsive" />
                                </div>
                                <div class="item-body">
                                    <a href="/ikantawar">
                                        <h2>IKAN AIR TAWAR SEGAR</h2>
                                    </a>
                                    <h3>Menawarkan ikan air tawar segar langsung dari perairan jernih untuk menikmati
                                        kelezatan alami.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <!-- Item Team #3 -->
                            <div class="team-item wow fadeInDown">

                                <div class="gambar">
                                    <div class="overlay">
                                    </div>
                                    <img src="assets/images/bibit ikan.png" alt="" class="img-responsive" />
                                </div>
                                <div class="item-body">
                                    <a href="/bibitpakan">
                                        <h2>BIBIT DAN PAKAN IKAN</h2>
                                    </a>
                                    <h3>Bibit ikan budidaya serta pakan berkualitas tinggi, siap menghasilkan panen
                                        melimpah untuk usaha Anda.</h3>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div>

    <!-- BLOG SECTION -->
    <div id="blog" class="section blog" data-slide="4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title">
                        <h1 class="lead wow fadeInDown">Our Blog</h1>
                        <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">CHECKOUT OUT LATEST NEWS</h2>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- Item Blog #1 -->
                            <div class="blog-item wow fadeInDown">
                                <div class="gambar">
                                    <div class="date">
                                        24<span>Okt 2024</span>
                                    </div>
                                    <img src="assets/images/blog-1.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="item-body">
                                    <!-- <div class="meta">by Jackie Lord / 20 Comments</div> -->
                                    <p class="lead">
                                        <a href="#" title="">Vel donec et scelerisque
                                            vestibulum. Condimentum aliquam, mollit magna velit</a>
                                    </p>
                                    <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.
                                        Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed,
                                        dapibus magna nulla nonummy commodo accumsan morbi, praesent volutpat vel id
                                        maecenas</p>
                                    <p>
                                        <a href="{{url('/blog-detail')}}" title="" class="readmore">Read
                                            More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- Item Blog #2 -->
                            <div class="blog-item wow fadeInDown">

                                <div class="gambar">
                                    <div class="date">
                                        1<span>Nov 2024</span>
                                    </div>
                                    <img src="assets/images/blog-2.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="item-body">
                                    <!-- <div class="meta">by Jackie Lord / 20 Comments</div> -->
                                    <p class="lead">
                                        <a href="#" title="">Vel donec et scelerisque vestibulum.
                                            Condimentum aliquam, mollit magna velit</a>
                                    </p>
                                    <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.
                                        Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed,
                                        dapibus magna nulla nonummy commodo accumsan morbi, praesent volutpat vel id
                                        maecenas</p>
                                    <p>
                                        <a href="/blogDetail" title="" class="readmore">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- Item Blog #3 -->
                            <div class="blog-item wow fadeInDown">

                                <div class="gambar">
                                    <div class="date">
                                        5<span>Nov 2024</span>
                                    </div>
                                    <img src="assets/images/blog-1.jpg" alt="" class="img-responsive" />
                                </div>
                                <div class="item-body">
                                    <!-- <div class="meta">by Jackie Lord / 20 Comments</div> -->
                                    <p class="lead">
                                        <a href="/blogDetail" title="">Vel donec et scelerisque
                                            vestibulum. Condimentum aliquam, mollit magna velit</a>
                                    </p>
                                    <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio.
                                        Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed,
                                        dapibus magna nulla nonummy commodo accumsan morbi, praesent volutpat vel id
                                        maecenas</p>
                                    <p>
                                        <a href="/blogDetail" title="" class="readmore">Read
                                            More</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="loadmore wow fadeInDown">
                                <a href="/blog" class="btn btn-default btn-primary">Load More</a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>


    <!-- ELEMENT SECTION -->
    <div id="element" class="section element">
        <div class="container">
            <div class="row">
                <div class="element-content">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h1 class="wow fadeInLeft">Hidup sehat dengan ikan segar?</h1>
                        <p class="wow fadeInLeft">Unduh aplikasi kami sekarang dan nikmati ikan segar setiap hari!</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <br />
                        <a href="#" title="" class="btn btn-primary btn-lg pull-right fadeInDown">Download
                            Now</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

    </div>



    <!-- TESTIMONY SECTION -->
    <div id="testimony" class="section testimony" data-slide="5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title">
                        <h1 class="lead wow fadeInDown">Our Testimony</h1>
                        <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">OUR TRUSTED AND HAPPY BUYERS</h2>
                    </div>


                    <div class="row">
                        <div class="clearfix"></div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <!-- Item Testimony #1 -->
                            <div class="item-testimony wow fadeInDown" data-wow-delay="300ms">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                        ******isi testimony******<a href="#"></a>
                                    </blockquote><!--//quote-->
                                </div>
                                <div class="people row">
                                    <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1"
                                        src="assets/images/100px100.jpg" alt="profile user">
                                    <p class="details text-center pull-left">
                                        <span class="name">*username user</span>
                                        <span class="title">*asal kota user*/span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4"> <!-- Item Testimony #2 -->
                            <div class="item-testimony wow fadeInDown" data-wow-delay="600ms">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                        ******isi testimony******<a href="#"></a>
                                    </blockquote><!--//quote-->
                                </div>
                                <div class="people row">
                                    <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1"
                                        src="assets/images/100px100.jpg" alt="profile user">
                                    <p class="details text-center pull-left">
                                        <span class="name">*username user</span>
                                        <span class="title">*asal kota user*/span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> <!-- Item Testimony #3 -->
                            <div class="item-testimony wow fadeInDown" data-wow-delay="900ms">
                                <div class="quote-box">
                                    <blockquote class="quote">
                                        ******isi testimony******<a href="#"></a>
                                    </blockquote><!--//quote-->
                                </div>
                                <div class="people row">
                                    <img class="img-rounded user-pic col-md-5 col-sm-5 col-xs-12 col-md-offset-1 col-sm-offset-1"
                                        src="assets/images/100px100.jpg" alt="profile user">
                                    <p class="details text-center pull-left">
                                        <span class="name">*username user</span>
                                        <span class="title">*asal kota user*/span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="maps-wraper wow fadeInDown">
        <div id="cd-zoom-in"></div>
        <div id="cd-zoom-out"></div>
        <div id="maps" class="maps" data-lat="-6.58896" data-lng="106.80618"></div>
        <!-- maps -->
    </div>
    </div>

    <div id="contact" class="section contact" data-slide="6">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title">
                        <h1 class="lead wow fadeInDown">Get in Touch</h1>
                        <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">FEEL FREE TO CONTACT US FROM</h2>
                    </div>

                </div>
            </div>
        </div>

        <div class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="send wow fadeInDown">
                            <a href="#" title=""><span class="fa fa-facebook"></span></a>
                            <a href="#" title=""><span class="fa fa-instagram"></span></a>
                            <a href="#" title=""><span class="fa fa-youtube"></span></a>
                            <a href="#" title=""><span class="fa fa-download"></span></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    @endsection
