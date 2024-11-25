@extends('layouts.app')



@section('Admin', 'Tambah Kategori')
@section('content')


    <body>
        <div class="container tm-mt-big tm-mb-big">
            <div class="row">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                    <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="tm-block-title d-inline-block">Tambah Kategori</h2>
                            </div>
                        </div>
                        <div class="row tm-edit-product-row">
                            <div class="col-12">
                                <form method="POST" action="{{ route('kategori.store') }}" class="tm-edit-product-form">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="kategori">Kategori</label>
                                        <textarea class="form-control validate" rows="1" id="kategori" name="kategori" required></textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase">Tambah
                                            Kategori</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="js/jquery-3.3.1.min.js"></script>
            <!-- https://jquery.com/download/ -->
            <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
            <!-- https://jqueryui.com/download/ -->
            <script src="js/bootstrap.min.js"></script>
            <!-- https://getbootstrap.com/ -->
            <script>
                $(function() {
                    $("#expire_date").datepicker();
                });
            </script>
    </body>

@endsection
