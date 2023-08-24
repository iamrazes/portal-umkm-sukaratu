@extends('layouts.admin')

@section('head')
@endsection

@section('header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="d-flex col-sm-6">
                    <h1 class="m-0">Products</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')

    <div class="content ml-2 mr-2 pb-2 ">
        <div class="card card-info">
            <div class="card-header bg-primary">
                <h3 class="card-title">Data Informasi Produk UMKM</h3>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto Produk</label>
                    <div class="col-sm-10 text-center">
                        <img src="{{ asset('storage/productsImages/' . $products->image) }}" style="width: 256px; height: 256px; object-fit: cover;">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->name }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->description }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga Produk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->price }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pemilik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->owner }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->address }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">WhatsApp</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->whatsapp }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lainnya</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off"
                             value="{{ $products->others }}" readonly>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <a href="{{ route('products.index')}}" class="btn btn-danger">Kembali</a>
            </div>

        </div>
    </div>
@endsection
