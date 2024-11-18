@extends('layouts.app')
@section('Admin', 'FaQ: Edit')


@section('content')

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Edit FAQ</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-12">
                            <form method="POST" action="{{ route('faq.update', $faq->id_faq) }}"
                                class="tm-edit-product-form">
                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for="id_admin">Admin</label>
                                    <select name="id_admin" id="id_admin" required class="form-control">
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id_admin }}"
                                                {{ $faq->id_admin == $admin->id_admin ? 'selected' : '' }}>
                                                {{ $admin->username }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="pertanyaan">Pertanyaan</label>
                                    <textarea class="form-control validate" id="pertanyaan" name="pertanyaan" rows="3" required>{{ old('pertanyaan', $faq->pertanyaan) }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="jawaban">Jawaban</label>
                                    <textarea class="form-control validate" id="jawaban" name="jawaban" rows="3" required>{{ old('jawaban', $faq->jawaban) }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Ubah
                                        FAQ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $("#expire_date").datepicker();
        });
    </script>


@endsection
