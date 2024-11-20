 @extends('layouts.profile')

 @section('title', 'Ikan Laut')

 @section('content')
		
<body>

	<!-- PAGE HEADER SECTION -->
	<div class="single-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="pull-left">
						<div class="title">
							<h1 class="lead wow fadeInDown">Our Product</h1>
							<h2 class="sublead wow fadeInDown" data-wow-delay="500ms">IKAN LAUT</h2>
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
	
	<!-- PRODUCT SECTION -->
	<div id="" class="section product" data-slide="">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
					<div class="row">
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
							<div class="blog-item wow fadeInDown" id="dataIkanLaut>
								<!-- <div class="gambar">
									<img src="assets/images/blog-1.jpg" alt="" class="img-responsive" />
								</div>
								<!-- <div class="item-body"> -->
									<!-- <div class="meta">ikan laut</div>
									<p class="lead">
									<a href="#" title="">Kepiting Merah</a></p>
									<p>
										<a href="/ikanlautdetail" title="" class="readmore">Lihat Detail</a>
									</p> -->
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

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // URL API
            const apiUrl = '/api/produk'; // Ganti dengan URL API Anda

            // AJAX request
            $.ajax({
                url: apiUrl,
                method: 'GET',
                success: function(response) {
                    const tbody = $('#dataIkanLaut');
                    tbody.empty(); // Kosongkan tabel sebelum menambahkan data

                    // Looping data produk
                    response.forEach((produk) => {
                        const row = `
                                <div class="gambar">
                                        <img src="assets/images/${produk.gambar}" alt="" class="img-responsive" />
                                    </div>
                                    <div class="item-body">
                                <div class="meta">${produk.id_kategori}</div>
                                        <p class="lead">
                                            <a href="#" title="">${produk.nama_produk}</a>
                                        </p>
                                        <p>
                                            <a href="/ikanlautdetail" title="" class="readmore">Lihat
                                                Detail</a>
                                        </p>
                                    </div>
                        `;
                        tbody.append(row); // Tambahkan baris ke tabel
                    });
                    // Event listener untuk tombol Edit
                    $('.edit-btn').on('click', function() {
                        const idProduk = $(this).data('id_produk');
                        const editUrl = /produk/edit/${idProduk}; // URL form edit

                        // Redirect ke halaman edit
                        window.location.href = editUrl; // Arahkan ke halaman edit produk
                    });

                    // Event listener untuk tombol Hapus
                    $('.delete-btn').on('click', function() {
                        const idProduk = $(this).data('id_produk');
                        if (confirm('Yakin ingin menghapus produk ini?')) {
                            $.ajax({
                                url: /api/hapusproduk/${idProduk}, // Endpoint hapus produk
                                method: 'DELETE',
                                success: function() {
                                    alert('Produk berhasil dihapus.');
                                    location
                                        .reload(); // Reload halaman untuk memuat ulang data
                                },
                                error: function() {
                                    alert('Gagal menghapus produk.');
                                }
                            });
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Terjadi kesalahan:', error);
                    alert('Gagal memuat data produk.');
                }
            });
        });
    </script>
 </body>
 </html>

 @endsection