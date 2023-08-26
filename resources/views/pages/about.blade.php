@extends('layouts.portal')

@section('title')
    <title>Tentang Kami | Portal UMKM Desa Sukaratu</title>
@endsection

@section('content')
    <div class="container my-4 about">
        <h1 class="text-center">TENTANG KAMI</h1>
        <div>
            <img src="{{ asset('images/about1.jpg') }}" alt="" class="aboutcover my-4">
            <div class="text-center">
                <h1>KKN UNPI 2023</h1>
                <h2>KELOMPOK 11</h2>
            </div>
        </div>
        <div class="text-center  mt-5 t">
            <img src="{{ asset('images/mek.jpg') }}" class="imgprofil" alt="">
            <h3>M. Arsyi Putra</h3>
            <h4>Ketua Kelompok KKN</h4>
        </div>
        <h2 class="mb-5 mt-5 text-center">Developer</h2>
        <div class="d-flex justify-content-between ">
            <div class="text-center" style="padding-left: 200px;">
                <img src="{{ asset('images/razes.jpg') }}" class="imgprofil" alt="">
                <h3>M. Dagistan Silawane</h3>
                <h4>BackEnd Developer</h4>
            </div>
            <div class="text-center" style="padding-right: 200px;">
                <img src="{{ asset('images/firli.jpg') }}" class="imgprofil" alt="">
                <h3>Firly Andrian</h3>
                <h4>FrontEnd Developer</p>
            </div>
        </div>
        <h2 class="mb-5 mt-5 text-center">Anggota IPM Ekonomi</h2>
        <div class="d-flex flex-col justify-content-between">
            <div class="text-center">
                <img src="{{ asset('images/razes.jpg') }}" class="imgprofil" alt="">
                <h3>M. Dagistan Silawane</h3>
                <h4>Ketua Kelompok</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/zul.jpg') }}" class="imgprofil" alt="">
                <h3>Revanza Oktavian</h3>
                <h4></h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/cin.jpg') }}" class="imgprofil" alt="">
                <h3>Chintara Widia</h3>
                <h4></h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/sari.jpg') }}" class="imgprofil" alt="">
                <h3>Sari Ramdani</h3>
                <h4></h4>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <div class="text-center" style="padding-right: 20px;">
                <img src="{{ asset('images/sul.jpg') }}" class="imgprofil " alt="">
                <h3>Samsul Arifin</h3>
                <h4></h4>
            </div>
            <div class="text-center" style="padding-left: 20px;">
                <img src="{{ asset('images/bobi.jpg') }}" class="imgprofil " alt="">
                <h3>Faizal Arif Wibisana</h3>
                <h4></h4>
            </div>
        </div>


        <h2 class="mb-5 mt-5 text-center">Anggota KKN Kelompok 11</h2>
        <div class="text-center my-2 mb-4"">
            <div class="text-center">
                <img src="{{ asset('images/mek.jpg') }}" class="imgprofil" alt="">
                <h3>M. Arsyi Putra</h3>
                <h4>Ketua Kelompok KKN</h4>
            </div>
        </div>
        <div class="d-flex flex-col justify-content-between my-2 mb-4"">
            <div class="text-center">
                <img src="{{ asset('images/ojan.jpg') }}" class="imgprofil" alt="">
                <h3>Farhan</h3>
                <h4>Divisi Acara</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/ocen.jpg') }}" class="imgprofil" alt="">
                <h3>Senny Maulida</h3>
                <h4>Bendahara</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/najwa.jpg') }}" class="imgprofil" alt="">
                <h3>Najwa Hafifah</h3>
                <h4>Sekretaris</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/iki.jpg') }}" class="imgprofil" alt="">
                <h3>Rifkiandi</h3>
                <h4>Publikasi dan Dokumentasi</h4>
            </div>
        </div>
        <div class="d-flex flex-col justify-content-between my-2 mb-4">
            <div class="text-center">
                <img src="{{ asset('images/razes.jpg') }}" class="imgprofil" alt="">
                <h3>M. Dagistan Silawane</h3>
                <h4>Divisi Acara</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/sul.jpg') }}" class="imgprofil" alt="">
                <h3>Samsul Arifin</h3>
                <h4>Divisi Konsumsi</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/firli.jpg') }}" class="imgprofil" alt="">
                <h3>Firly Andrian</h3>
                <h4>Divisi Logistik</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/zul.jpg') }}" class="imgprofil" alt="">
                <h3>Revanza Oktavian</h3>
                <h4>Publikasi dan Dokumentasi</h4>
            </div>
        </div>
        <div class="d-flex flex-col justify-content-between my-2 mb-4"">
            <div class="text-center">
                <img src="{{ asset('images/bobi.jpg') }}" class="imgprofil" alt="">
                <h3>Faizal Arif Wibisana</h3>
                <h4>Divisi Logistik</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/ivan.jpg') }}" class="imgprofil" alt="">
                <h3>Benediktus Ivana</h3>
                <h4>Divisi Humas</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/cin.jpg') }}" class="imgprofil" alt="">
                <h3>Chintara Widia</h3>
                <h4>Divisi Humas</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/cep.jpg') }}" class="imgprofil" alt="">
                <h3>Cep Dahlan</h3>
                <h4>Divisi Logistik</h4>
            </div>
        </div>
        <div class="d-flex flex-col justify-content-between my-2 mb-4"">
            <div class="text-center">
                <img src="{{ asset('images/sri.jpg') }}" class="imgprofil" alt="">
                <h3>Sri Wahyuni</h3>
                <h4>Sekretaris</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/sari.jpg') }}" class="imgprofil" alt="">
                <h3>Sari Ramdani</h3>
                <h4>Divisi Konsumsi</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/ca.jpg') }}" class="imgprofil" alt="">
                <h3>Nisa Fitriani</h3>
                <h4>Divisi Konsumsi</h4>
            </div>
            <div class="text-center">
                <img src="{{ asset('images/liani.jpg') }}" class="imgprofil" alt="">
                <h3>Liani Nur Aji</h3>
                <h4>Bendahara</h4>
            </div>
        </div>
    </div>
@endsection
