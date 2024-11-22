<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="shortcut icon" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/images/apple-touch-icon-114x114.png') }}">

    <!-- ==============================================
 CSS
 =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/superslides.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

    <!-- ==============================================
 Google Fonts
 =============================================== -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.cdnfonts.com/css/readex-pro" rel="stylesheet">


    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>


    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- COLOR SKINS -->
    <link rel="stylesheet" type="text/css" href="null" id="color-skins">


    <script type="text/javascript" src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('User', 'Fishbites')</title>
</head>

<body>

    <header>
        <!-- Load page -->
        {{-- <div class="animationload">
            <div class="loader"></div>
        </div> --}}

        <!-- BACK TO TOP SECTION -->
        <a href="#0" class="cd-top">Top</a>


        <!-- NAVBAR SECTION -->
        <div class="navbar navbar-default main-menu">
            <div class="aksen-top"></div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li data-slide="1" rel="slides"><a href="/#slides">HOME</a></li>
                        <li data-slide="2" rel="about"><a href="/#about">ABOUT US</a></li>
                        <li data-slide="3" rel="team"><a href="/#product">PRODUCT</a></li>
                        <li data-slide="4" rel="news"><a href="/#blog">NEWS</a></li>
                        <li data-slide="5" rel="testimonials"><a href="/#testimony">TESTIMONIALS</a></li>
                        <li data-slide="6" rel="contact"><a href="/#contact">CONTACT</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer>
        <!-- FOOTER SECTION -->
        <div id="contact" class="section footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow fadeInDown" data-wow-delay="300ms">
                        <h3>Contact</h3>
                        <p><span>Phone</span>+62 0000 0000</p>
                        <p><span>Fax</span>+62 0000 0000</p>
                        <p><span>Email</span> fishbitesind@gmail.com</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow fadeInDown" data-wow-delay="600ms">
                        <h3>Address</h3>
                        <p>Jl. Kumbang No.14</p>
                        <p>Babakan, Kec. Bogor Tengah</p>
                        <p>Kota Bogor - Indonesia</p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow fadeInDown" data-wow-delay="900ms">
                        <h3>Follow Us</h3>
                        <div class="sosmed">
                            <p>
                                <a href="#" title=""><span class="fa fa-facebook"></span></a>
                                <a href="#" title=""><span class="fa fa-instagram"></span></a>
                                <a href="#" title=""><span class="fa fa-youtube"></span></a>

                            </p>

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 wow fadeInDown" data-wow-delay="1200ms">
                        <h3>Contact</h3>
                        <p>Lorem ipsum dolor sit amet, libero turpis non cras ligula, id commodo, aenean est in volutpat
                            amet sodales, porttitor bibendum facilisi suspendisse.</p>
                    </div>

                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Modal 1 -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel1">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-1.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel2">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-2.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel3">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-3.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel4">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-4.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 5 -->
        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel5">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-5.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 6 -->
        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel6"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel6">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-6.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 7 -->
        <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel7"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel7">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-7.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal 8 -->
        <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel8">Project Title</h4>
                    </div>
                    <div class="modal-body">

                        <img src="assets/images/work-8.jpg" alt="" class="img-responsive" />

                    </div>

                </div>
            </div>
        </div>

    </footer>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.superslides.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <script type="text/javascript" src="assetsjs/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.knob.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/script.js"></script>


    <script>
        jQuery("#theme-panel .panel-btn").click(function() {
            jQuery("#theme-panel").toggleClass("panel-close", "panel-open", 1000);
            jQuery("#theme-panel").toggleClass("panel-open", "panel-close", 1000);
            return false;
        });

        jQuery('.color-switch').click(function() {
            var title = jQuery(this).attr('title');
            var href = 'css/colors/' + title + '.css';

            //var color =  $(this).css('background-color') ;
            //$('.dial').attr('data-fgcolor', color);
            jQuery('#color-skins').attr('href', href);
            return false;
        });

        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener("click", function(event) {
                    event.preventDefault();
                    const targetID = this.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetID);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: "smooth"
                        });
                    }
                });
            });
        });
    </script>
    <script>
        function initMap() {
            // Ambil elemen peta
            const mapElement = document.getElementById('maps');
            const lat = parseFloat(mapElement.getAttribute('data-lat'));
            const lng = parseFloat(mapElement.getAttribute('data-lng'));
            const location = {
                lat: lat,
                lng: lng
            };

            // Inisialisasi peta
            const map = new google.maps.Map(mapElement, {
                zoom: 14,
                center: location
            });

            // Ganti marker dengan logo perusahaan
            const marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: {
                    url: assets / images / cd - icon - location.svg, // Path menuju logo di folder public
                    scaledSize: new google.maps.Size(50, 50), // Sesuaikan ukuran logo
                    origin: new google.maps.Point(0, 0), // Titik awal gambar
                    anchor: new google.maps.Point(25, 50) // Posisi anchor logo di tengah bawah
                }
            });
        }

        // Inisialisasi peta ketika halaman selesai dimuat
        google.maps.event.addDomListener(window, 'load', initMap);

        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll(".navbar-nav li");

            window.addEventListener("scroll", () => {
                let current = "";

                sections.forEach((section) => {
                    const sectionTop = section.offsetTop;
                    if (pageYOffset >= sectionTop - 50) {
                        current = section.getAttribute("id");
                    }
                });

                navLinks.forEach((li) => {
                    li.classList.remove("active");
                    if (li.querySelector("a").getAttribute("href") === "#" + current) {
                        li.classList.add("active");
                    }
                });
            });
        });
    </script>

</body>

</html>
