@extends('layouts.profile')

@section('title', 'Bibit Pakan')

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
							<h1 class="lead wow fadeInDown">Our Product</h1>
							<h2 class="sublead wow fadeInDown" data-wow-delay="500ms">BIBIT & PAKAN</h2>
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
	
	<!-- BIBTI PAKAN -->
	<div id="" class="section product" data-slide="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							<div class="blog-item wow fadeInDown">
								<div class="gambar">
									<img src="assets/images/blog-1.jpg" alt="" class="img-responsive" />
								</div>
								<div class="item-body">
									<div class="meta">bibit & pakan</div>
									<p class="lead">
									<a href="#" title="">Pelet Ikan Lele, Bawal, Nila</a></p>
									<p>
										<a href="/bibitpakandetail" title="" class="readmore">Lihat Detail</a>
									</p>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<nav class="text-center">
							<ul class="pagination">
								<li><a href="#" aria-label="Previous"><span aria-hidden="true">Prev</span></a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
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
</body>
</html>
@endsection