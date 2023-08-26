<div class="col-lg-12 border-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('welcome') }}"> <img src="{{ asset('images/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-0">
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{ route('welcome') }}#profil">PROFIL</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{ route('welcome') }}#fasilitas">FASILITAS</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{ route('welcome') }}#lokasi">LOKASI</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{ route('welcome') }}#umkm">UMKM</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link" href="{{ route('contact') }}">KONTAK</a>
                        </li>
                    </ul>
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ route('dashboard') }}" class="btn">DASHBOARD</a>
                        @else
                        <a href="{{ route('login') }}" class="btn">SIGN IN</a>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </div>
</div>
