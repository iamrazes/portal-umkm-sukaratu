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
            <h2 class="text-center">MENGENAL DESA SUKARATU</h2>
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                        class="active visually-hidden" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        class="visually-hidden" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        class="visually-hidden" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('images/grey.jpg') }}" class="carousel-img hover-zoom" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>First slide label</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus<br>
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('images/grey.jpg') }}" class="bg-dark carousel-img hover-zoom" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Second slide label</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at varius purus. Mauris
                                finibus<br>
                                volutpat dignissim. Praesent justo neque, interdum non posuere non</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/grey.jpg') }}" class="carousel-img hover-zoom" alt="...">
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
