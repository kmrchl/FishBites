@extends('layouts.profile')

@section('title', 'Ikan Laut Detail')

@section('content')

<body>
	
	<!-- Load page -->
	<!-- <div class="animationload">
		<div class="loader"></div>
	</div> -->
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top">Top</a>
	
	<!-- PAGE HEADER SECTION -->
	<div class="single-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="pull-left">
						<div class="title">
							<h1 class="lead wow fadeInDown">IKAN Laut<h1>
							<!-- <h2 class="sublead wow fadeInDown" data-wow-delay="500ms">"Nama produknya"</h2> -->
						</div>
					</div>
					<div class="pull-right">
						<ol class="breadcrumb text-right">
							<li><a href="/index">Home</a></li>
                            <li><a href="/ikanlaut">Product</a></li>
							<li class="active">Product detail</li>
						</ol>
					</div>					
				</div>
			</div>
		</div>
        
    </div>
	
	<!-- BLOG SECTION -->
	<div id="" class="section product" data-slide="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="blog-item detail wow fadeInDown">
						<div class="row">
							<!-- Gambar di sebelah kiri -->
							<div class="col-xs-12 col-sm-4">
								<div class="gambar">
									<img src="assets/images/blog-2.jpg" alt="" class="img-responsive" />
									<p class="harga">Harga: Rp 50.000</p>
								</div>
							</div>
							
							<!-- Teks di sebelah kanan -->
							<div class="col-xs-12 col-sm-8">
								<div class="item-body">
									<p class="lead">
										<a href="#" title="">Pelet Ikan Lele, Bawal, Nila</a>
									</p>
									<p>Pelet buatan petani lokal asal kota Bandung.</p>
									<p>Kondisi dan Spesifikasi :
										1 karung, Pakan kering, Berbentuk bola-bola.</p>
								</div>
							</div>
						</div>
					</div>
					
					
									
									<div id="comments" class="comment">
										<h4 class="text-uppercase">Comment <span class="comments">(1)</span></h4>
										<div class="media comment-block"> <!-- Comment Block #1 -->
											<div class="media-left media-top">
												<a href="#">
												  <img class="media-object" src="assets/images/100px100.jpg" alt="..." width="100" >
												</a>
											</div>
											<div class="media-body">
												<!-- <a href="#" class="pull-right text-uppercase">Reply</a> -->
												<h5 class="media-heading">Post by <a href="#">Adinda Rahma</a><small class="">Nov. 05, 2024</small></h5> 
												<div class="clearfix"></div>
												Pas dateng ikannya super fresh! Next bakal order lagi
												<div class="clearfix"></div>
												
											</div>
										</div>
									</div>
									<br /><br />
									<hr />
								</div>
							</div>
						</div>

						<!-- ELEMENT SECTION -->
						<!-- ELEMENT SECTION -->
						<div id="element" class="section element">
							<div class="container">
								<div class="row">
									<div class="element-content">
										<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
											<h1 class="wow fadeInLeft">Mau beli ikan fresh secara mudah?</h1>
											<p class="wow fadeInLeft">Unduh aplikasi kami sekarang dan nikmati ikan segar setiap hari!</p>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
											<br />
											<a href="#" title="" class="btn btn-primary btn-lg pull-right fadeInDown">Download Now</a>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<div class="sidebar">
								<!-- <div class="widget search"> Search Widget -->
									<!-- <div class="input-group">
										<input type="text" class="form-control" placeholder="Search for...">
										<span class="input-group-btn">
											<button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
										</span>
									</div>/input-group -->
								<!-- </div> -->
								
								
								
								
								
								<div class="widget post-tab"> <!-- Posts Tab Widget -->
									<div role="tabpanel">


									</div>
								</div>
					
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
	</div>
    
    </body>
    </html>

	@endsection