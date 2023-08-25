@extends('layouts.portal')

@section('content')
    <div class="container">
        <section class="hero" id="home">
            <main class="content" style="">
                <div>
                    <h2><span>PORTAL UMKM </span></h2>
                    <h1>DESA SUKARATU </h1>
                    <p style="font-size: 16px;">

                        Memajukan Masyarakat, Mensejahterakan Ekonomi, dan Mempromosikan Hasil Pangan Masyarakat Desa Sukaratu
                        dengan Gerakan Digitalisasi Desa.
                    </p>
                    <a href="{{ route('contact') }}" class="btn">BERGABUNG</a>
                </div>
            </main>
            <div class="d-flex flex-col" style="padding-left: 50px;">
                <div>
                    <img src="{{ asset('images/heroimage1.png') }}" class="heroimage1 d-none d-lg-block">
                    <div class="heroimage1s d-none d-lg-block"></div>
                </div>
                <div>
                    <img src="{{ asset('images/heroimage2.png') }}" class="heroimage2 d-none d-lg-block">
                    <div class="heroimage2s d-none d-lg-block"></div>
                </div>
            </div>
        </section>

    </div>

    <div class="divider">
    </div>
    {{-- Profil Desa --}}
    <div class="container" id="profil">
        <div class="hero2">
            <h1 class="text-center">PROFIL DESA</h1>
            <h2 class="text-center">MENGENAL DESA SUKARATU</h2>
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators d-none d-md-block">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                        class="active visually-hidden" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        class="visually-hidden" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        class="visually-hidden" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner d-none d-md-block">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/blue.png') }}" class="carousel-img hover-zoom shadow " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>First slide label</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus<br>
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/pink.png') }}" class="carousel-img hover-zoom shadow " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Second slide label</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus<br>
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/orange.png') }}" class="carousel-img hover-zoom shadow " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Third slide label</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus<br>
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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
    {{-- Fasilitas --}}
    <div class="fasilitas" style="background-color: #d2d2d2;" id="fasilitas">
        <div class="container">
            <h2 class="text-start"
                style="
                color: #AF6C08;
                font-family: inherit;
                font-size: 38px;
                font-weight: 700;
                margin-bottom: 40px;">
                FASILITAS DESA</h2>
            <div class="d-flex">
                <div class="card col-sm-3 mx-1">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="rounded text-center"
                                style=" height: 50px; width: 50px; background-color: #F1BB69">
                                <i class="fa fa-star text-white py-2 vertical-item-center"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                        <div class="mt-5 text-end" style="padding-top: 40px;">
                            <a href="" class="btn text-white" style="background-color: #F1BB69">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="card col-sm-3 mx-1">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="rounded text-center"
                                style=" height: 50px; width: 50px; background-color: #F1BB69">
                                <i class="fa fa-home text-white py-2 vertical-item-center"></i>
                            </div>

                        </div>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                        <div class="mt-5 text-end" style="padding-top: 40px;">
                            <a href="" class="btn text-white" style="background-color: #F1BB69">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="card col-sm-3 mx-1">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="rounded text-center"
                                style=" height: 50px; width: 50px; background-color: #F1BB69">
                                <i class="fa fa-thumbs-up text-white py-2 vertical-item-center"></i>
                            </div>
                        </div>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                        <div class="mt-5 text-end" style="padding-top: 40px;">
                            <a href="" class="btn text-white" style="background-color: #F1BB69">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="card col-sm-3 mx-1">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="rounded text-center "
                                style=" height: 50px; width: 50px; background-color: #F1BB69; ">
                                <i class="fa fa-user-friends text-white py-2 vertical-item-center" ></i>
                            </div>
                        </div>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                        <div class="mt-5 text-end" style="padding-top: 40px;">
                            <a href="" class="btn text-white" style="background-color: #F1BB69">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Lokasi Desa --}}
    <div class="container" id="lokasi" style="padding-top: 40px;">
        <h2 class="text-end"
            style="
            color: #AF6C08;
            font-family: inherit;
            font-size: 38px;
            font-weight: 700;
            margin-bottom: 40px;">
            LOKASI DESA</h2>
    </div>
    <div class="lokasi">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
                    marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=620&amp;hl=en&amp;q=sukaratu, bojongpicung&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                    href="https://gachanox.io/">Gacha Nox</a></div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 620px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 620px;
                }

                .gmap_iframe {
                    height: 620px !important;
                }
            </style>
        </div>
    </div>
    {{-- UMKM --}}
    <div class="container" id="umkm">
        <div class="umkm">
            <h1 class="text-center">UMKM</h1>
            <h2 class="text-center">DESA SUKARATU</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/productsImages/' . $item->image) }}" width="100%"
                                height="280" style="object-fit: cover;">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="280"
                                xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                    fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg> --}}
                            <div class="card-body">
                                <h3 class="text-center" style="text-transform:uppercase;"><b>{{ $item->name }}</b></h3>
                                <p class="card-text"
                                    style="
                                overflow: hidden;
                                display: -webkit-box;
                                -webkit-line-clamp: 2; /* number of lines to show */
                                        line-clamp: 2;
                                -webkit-box-orient: vertical;">
                                    {{ $item->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn text-white"
                                            style="background-color: #AF6C08;">Lebih Lengkap</button>
                                    </div>
                                    <small style="color: #AF6C08;"><b>Rp. {{ $item->price }}</b></small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center text-center mt-5">
                <a href="{{ route('umkm') }}" class="btn"
                    style="background-color:#AF6C08; color: white; padding: 20px; padding-left: 100px; padding-right: 100px;">Produk
                    Lainnya</a>
            </div>

        </div>
    </div>
@endsection

@section('script')
    <script>
        _updateInterval() {
            const element = this._activeElement || SelectorEngine.findOne(SELECTOR_ACTIVE_ITEM, this._element)

            if (!element) {
                return
            }

            const elementInterval = Number.parseInt(element.getAttribute('data-bs-interval'), 10)

            if (elementInterval) {
                this._config.defaultInterval = this._config.defaultInterval || this._config.interval
                this._config.interval = elementInterval
            } else {
                this._config.interval = this._config.defaultInterval || this._config.interval
            }
        }
    </script>
@endsection
