@extends('layouts.portal')

@section('title')
    <title>Kontak Kami | Portal UMKM Desa Sukaratu</title>
@endsection

@section('content')
    <div class="container my-4 about">
        <h1 class="text-center">KONTAK KAMI</h1>

        <div class="d-flex justify-content-around mx-5 mt-5" style="color: #3d3d3d">
            <div class="mx-4 text-center">
                <h2>Developer</h2>
                <img src="{{asset('images/razes.jpg')}}" class="imgprofil my-2" alt="">
                <h4>Muhammad Dagistan Silawane</h4>
                <p>WhatsApp : +62 895-6359-03620</p>
            </div>
            <div class="mx-4 text-center">
                <h2>Perangkat Desa</h2>
                <img src="{{asset('images/default_admin.jpg')}}" class="imgprofil my-2" alt="">
                <h4>Agung</h4>
                <p>WhatsApp : +62 815-6313-9004</p>
            </div>
        </div>
    </div>
@endsection
