@extends('layouts.app')

@section('Admin', 'FaQ: Add')

@section('content')


    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Tambah FAQ</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-12">
                            <form action="{{ route('faq.store') }}" method="POST" class="tm-edit-product-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="id_admin">Admin</label>
                                    <select name="id_admin" id="id_admin" class="form-control" required>
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id_admin }}">{{ $admin->username }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pertanyaan">Pertanyaan</label>
                                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="jawaban">Jawaban</label>
                                    <textarea class="form-control" id="jawaban" name="jawaban" rows="3" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Tambah
                                        FAQ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
