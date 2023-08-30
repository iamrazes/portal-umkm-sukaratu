@extends('layouts.portal')

@section('title')
    <title>Tentang Kami | Portal UMKM Desa Sukaratu</title>
@endsection

@section('content')
    <div class="container my-4 about">
        <h1 class="text-center">TENTANG KAMI</h1>
        <div>
            <img src="{{ asset('images/about1.jpg') }}" alt="" class="aboutcover my-4">
            <div class="d-flex justify-content-between mb-4">
                <img src="{{asset('images/about2.jpg')}}" style="width: 50%; height: 360px;  object-fit: cover;" alt="">
                <img src="{{asset('images/about3.jpg')}}" style="width: 50%; height: 360px;  object-fit: cover;" alt="">
            </div>
            <div class="text-center">
                <h1>KKN UNPI 2023</h1>
                <h2>KELOMPOK 11</h2>
            </div>
        </div>
        <div class="text-center  mt-5">
            <img src="{{ asset('images/about/arsyi.png') }}" class="imgprofil" alt="">
            <h3>M. Arsyi Putra</h3>
            <h4>Ketua Kelompok KKN</h4>
        </div>
        <h2 class="mb-5 mt-5 text-center">Developer</h2>
        <div class="d-md-flex flex-col justify-content-around">
            <div class="text-center">
                <img src="{{ asset('images/about/razes.png') }}" class="imgprofil" alt="">
                <h3>M. Dagistan Silawane</h3>
                <h4>BackEnd Developer</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/firly.png') }}" class="imgprofil" alt="">
                <h3>Firly Andrian</h3>
                <h4>FrontEnd Developer</p>
            </div>
        </div>
        <h2 class="mb-5 mt-5 text-center">Anggota IPM Ekonomi</h2>
        <div class="d-md-flex flex-col justify-content-between">
            <div class="text-center">
                <img src="{{ asset('images/about/razes.png') }}" class="imgprofil" alt="">
                <h3>M. Dagistan Silawane</h3>
                <h4></h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/revanza.png') }}" class="imgprofil" alt="">
                <h3>Revanza Oktavian</h3>
                <h4></h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/chintara.png') }}" class="imgprofil" alt="">
                <h3>Chintara Widia</h3>
                <h4></h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/sari.png') }}" class="imgprofil" alt="">
                <h3>Sari Ramdani</h3>
                <h4></h4>
            </div>
        </div>
        <div class="d-md-flex justify-content-around mt-4">
            <div class="text-center" style="padding-right: 20px;">
                <img src="{{ asset('images/about/faizal.png') }}" class="imgprofil " alt="">
                <h3>Faizal Arif Wibisana</h3>
                <h4></h4>
            </div>
            <div class="text-center" style="padding-left: 20px;">
                <img src="{{ asset('images/about/samsul.png') }}" class="imgprofil " alt="">
                <h3>Samsul Arifin</h3>
                <h4></h4>
            </div>
        </div>

        <h2 class="d-md-flex mb-5 mt-5 text-center">Anggota KKN Kelompok 11</h2>
        <div class="text-center my-2 mb-4"">
            <div class="text-center">
                <img src="{{ asset('images/about/arsyi.png') }}" class="imgprofil" alt="">
                <h3>M. Arsyi Putra</h3>
                <h4>Ketua Kelompok KKN</h4>
            </div>
        </div>
        <div class="d-md-flex flex-col justify-content-between my-2 mb-4">
            <div class="text-center">
                <img src="{{ asset('images/about/farhan.png') }}" class="imgprofil" alt="">
                <h3>Farhan Fauzan</h3>
                <h4>Divisi Acara</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/senny.png') }}" class="imgprofil" alt="">
                <h3>Senny Maulida</h3>
                <h4>Bendahara</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/najwa.png') }}" class="imgprofil" alt="">
                <h3>Najwa Hafifah</h3>
                <h4>Sekretaris</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/rifki.png') }}" class="imgprofil" alt="">
                <h3>Rifkiandi</h3>
                <h4>Publikasi dan Dokumentasi</h4>
            </div>
        </div>
        <div class="d-md-flex flex-col justify-content-between my-2 mb-4">
            <div class="text-center">
                <img src="{{ asset('images/about/razes.png') }}" class="imgprofil" alt="">
                <h3>M. Dagistan Silawane</h3>
                <h4>Divisi Acara</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/samsul.png') }}" class="imgprofil" alt="">
                <h3>Samsul Arifin</h3>
                <h4>Divisi Konsumsi</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/firly.png') }}" class="imgprofil" alt="">
                <h3>Firly Andrian</h3>
                <h4>Divisi Logistik</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/revanza.png') }}" class="imgprofil" alt="">
                <h3>Revanza Oktavian</h3>
                <h4>Publikasi dan Dokumentasi</h4>
            </div>
        </div>
        <div class="d-md-flex flex-col justify-content-between my-2 mb-4">
            <div class="text-center">
                <img src="{{ asset('images/about/faizal.png') }}" class="imgprofil" alt="">
                <h3>Faizal Arif Wibisana</h3>
                <h4>Divisi Logistik</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/ivan.png') }}" class="imgprofil" alt="">
                <h3>Benediktus Ivana</h3>
                <h4>Divisi Humas</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/chintara.png') }}" class="imgprofil" alt="">
                <h3>Chintara Widia</h3>
                <h4>Divisi Humas</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/cep.png') }}" class="imgprofil" alt="">
                <h3>Cep Dahlan</h3>
                <h4>Divisi Logistik</h4>
            </div>
        </div>
        <div class="d-md-flex flex-col justify-content-between my-2 mb-4">
            <div class="text-center">
                <img src="{{ asset('images/about/sri.png') }}" class="imgprofil" alt="">
                <h3>Sri Wahyuni</h3>
                <h4>Sekretaris</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/sari.png') }}" class="imgprofil" alt="">
                <h3>Sari Ramdani</h3>
                <h4>Divisi Konsumsi</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/ica.png') }}" class="imgprofil" alt="">
                <h3>Nisa Fitriani</h3>
                <h4>Divisi Konsumsi</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/about/liani.png') }}" class="imgprofil" alt="">
                <h3>Liani Nur Aji</h3>
                <h4>Bendahara</h4>
            </div>
        </div>
    </div>
@endsection
