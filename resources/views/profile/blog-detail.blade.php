@extends('layouts.profile')

@section('title', 'Blog Detail')

@section('content')

<body>
	
	<!-- Load page
	<div class="animationload">
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
							<h1 class="lead wow fadeInDown">Blog</h1>
							<h2 class="sublead wow fadeInDown" data-wow-delay="500ms">"Judul berita"</h2>
						</div>
					</div>
					<div class="pull-right">
						<ol class="breadcrumb text-right">
							<li><a href="/index">Home</a></li>
                            <li><a href="/blog">News</a></li>
							<li class="active">Blog</li>
						</ol>
					</div>					
				</div>
			</div>
		</div>
        
    </div>
	
	<!-- BLOG SECTION -->
	<div id="" class="section blog" data-slide="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
							<div class="blog-item detail wow fadeInDown">
								
								<div class="gambar">
									<div class="date">
										24<span>Jan 2014</span>
									</div>
									<img src="assets/images/blog-2.jpg" alt="" class="img-responsive" />
								</div>
								<div class="item-body">
									<p class="lead">
									<a href="#" title="">Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit</a></p>
									<p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus magna nulla nonummy commodo accumsan morbi, praesent volutpat vel id maecenas</p>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
									<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
									<br /><br />
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
									<!-- <div class="comment">
										<h4 class="text-uppercase">Leave a Comment</h4>
										<form id="contact-form" class="form">
											<div class="row">
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Your Name">
												</div>
												<div class="col-md-6">
													<input type="text" class="form-control" placeholder="Your Email">
												</div>
											</div>
											<textarea class="form-control" rows="6" placeholder="Your Comment..."></textarea>
											<button type="submit" class="btn btn-default btn-primary">Submit Comment</button>
										</form>
									</div>	 -->
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
	</div>	
    </body>
    </html>

@endsection