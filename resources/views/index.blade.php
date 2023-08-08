@extends('layouts.portal')

@section('content')
    <div class="container">
        <section class="hero" id="home">
            <main class="content">
                <h2><span>PORTAL UMKM </span></h2>
                <h1>DESA SUKARATU </h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris finibus
                    <br />volutpat dignissim. Praesent justo neque, interdum non posuere non
                </p>
                <a href="#" class="btn">BERGABUNG</a>
            </main>
        </section>

    </div>

    <div class="divider">
    </div>

    <div class="container">
        <div class="hero2">
            <h1 class="text-center">PROFIL DESA</h1>
            <h2 class="text-center">CERITA SUKSES</h2>
            {{-- <div class="container ">
                <div class="d-inline-flex justify-center">
                    <div class="">
                        <img src="{{ asset('images/blank.jpg') }}" alt="Rectangle Photo"
                            class=" custom-image rounded-circle">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/blank.jpg') }}" alt="Rectangle Photo"
                            class=" custom-image-middle rounded-circle">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/blank.jpg') }}" alt="Rectangle Photo"
                            class=" custom-image rounded-circle">
                    </div>
                </div>
            </div>
            <h3 class="text-center">LOREM IPSUM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris finibus
                <br />volutpat
                dignissim. Praesent justo neque, interdum non posuere non
            </p> --}}
        </div>
    </div>

    <div class="container">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active " data-bs-interval="2000">
                    <img src="{{ asset('images/blue.png') }}" class="carousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>First slide label</h1>
                        <p>SoLorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris finibus<br>
                            volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                    <img src="{{ asset('images/orange.png') }}" class="bg-dark carousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>First slide label</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris finibus<br>
                            volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/pink.png') }}" class="carousel-img" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>First slide label</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris finibus<br>
                            volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection
