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
                        <li class="breadcrumb-item active">Edit</li>
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
            <h3 class="card-title">Formulir Data Informasi Produk UMKM</h3>
        </div>

        <!-- form start -->
        <form class="form-horizontal" action="{{ route('products.update', $products->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" autocomplete="off"
                            placeholder="Nama Produk UMKM" value="{{ $products->name }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" placeholder="Deskripsi Produk UMKM" value="{{ $products->description }}"></input>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga Produk</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" class="form-control" placeholder="Harga Produk UMKM" value="{{ $products->price }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pemilik</label>
                    <div class="col-sm-10">
                        <input type="text" name="owner" class="form-control" placeholder="Pemilik Produk UMKM" value="{{ $products->owner }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" placeholder="Alamat UMKM" value="{{ $products->address }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">WhatsApp</label>
                    
                    <div class="col-sm-10">
                        <input type="number" id="noZeroOrMinusInput" name="whatsapp" class="form-control" value="{{ $products->whatsapp }}"
                            placeholder="Nomor WhatsApp">
                        <small class="text-secondary">Format nomor seperti berikut | Contoh :
                            6289544445555</small>
                        <small id="errorText" style="color: red;"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lainnya</label>
                    <div class="col-sm-10">
                        <input type="text" name="others" class="form-control" placeholder="Keterangan lainnya..." value="{{ $products->others }}">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Foto Produk</label>
                    <div class="col-sm-10">
                        <div class="col-sm-10 text-center">
                            <img src="{{ asset('storage/productsImages/' . $products->image) }}" style="width: 256px; height: 256px; object-fit: cover;">
                        </div>
                        <input type="file" name="image">
                    </div>
                </div> --}}



            </div>
            <div class="card-footer">
                <button type="submit" class="btn bg-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        var inputElement = document.getElementById("noZeroOrMinusInput");
        var errorTextElement = document.getElementById("errorText");

        inputElement.addEventListener("input", function(event) {
            var inputValue = event.target.value;

            // Melarang angka 0 pada urutan pertama
            if (inputValue.length === 1 && inputValue === "0") {
                event.target.value = "";
                errorTextElement.textContent = "Angka 0 tidak diperbolehkan pada urutan pertama.";
                return;
            } else {
                errorTextElement.textContent = "";
            }

            // Melarang tanda minus ("-")
            var sanitizedValue = inputValue.replace(/-/g, "");
            inputElement.value = sanitizedValue;

            // Menampilkan pesan kesalahan untuk tanda minus
            if (inputValue !== sanitizedValue) {
                errorTextElement.textContent = "Tanda minus (-) tidak diperbolehkan.";
            } else {
                errorTextElement.textContent = "";
            }
        });
    </script>
@endsection
