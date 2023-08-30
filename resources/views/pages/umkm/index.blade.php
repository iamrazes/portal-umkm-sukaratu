@extends('layouts.portal')

@section('title')
    <title>UMKM | Portal UMKM Desa Sukaratu</title>
@endsection

@section('content')
    <div class="container mt-4">
        <div class="umkm">
            <h1 class="text-center">UMKM</h1>
            <h2 class="text-center">DESA SUKARATU</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/public/productsImages/' . $item->image) }}" width="100%"
                                height="280" style="object-fit: cover;">
                            {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="280"
                            xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice"
                            focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg> --}}
                            <div class="card-body">
                                <h3 class="text-center"
                                    style="text-transform:uppercase;     white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                    <b>{{ $item->name }}</b></h3>
                                <p class="card-text"
                                    style="
                            overflow: hidden;
                            display: -webkit-box;
                            -webkit-line-clamp: 2; /* number of lines to show */
                                    line-clamp: 2;
                            -webkit-box-orient: vertical;">
                                    {{ $item->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a type="button" class="btn text-center text-white btn-portal"
                                        href="{{ route('umkm.show', $item->id) }}"
                                        style=" overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;">Lebih
                                        Lengkap</a>

                                    <p class="text-center" style="color: #AF6C08;"><b>Rp. {{ $item->price }}</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
