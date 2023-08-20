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
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content ml-2 mr-2 pb-2 ">
        <div class="card card-info">
            <div class="card-header bg-primary">
                <h3 class="card-title">Formulir Pengisian Produk UMKM</h3>
            </div>

            <!-- form start -->
            <form class="form-horizontal" action="{{ route('products.save') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" autocomplete="off"
                                placeholder="Nama Produk UMKM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="description" class="form-control" placeholder="Deskripsi Produk UMKM"></textarea>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga Produk</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" placeholder="Harga Produk UMKM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pemilik</label>
                        <div class="col-sm-10">
                            <input type="text" name="owner" class="form-control" placeholder="Pemilik Produk UMKM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" placeholder="Alamat UMKM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">WhatsApp</label>
                        <div class="col-sm-10">
                            <input type="number" name="whatsapp" class="form-control" placeholder="Nomor WhatsApp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lainnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="others" class="form-control" placeholder="Keterangan lainnya...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto Produk</label>
                        <div class="col-sm-10">

                            <input type="file" name="image">
                        </div>
                    </div>



                </div>
                <div class="card-footer">
                    <button type="submit" class="btn bg-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
@endsection
