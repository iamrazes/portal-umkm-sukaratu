@extends('layouts.admin')

@section('header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">

                {{-- @foreach ($products as $item) --}}
                {{-- @if ($loop->first) --}}
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ count($products) }}</sup></h3>
                        <p>Total Produk</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{ route('products.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
                {{-- @endif --}}
                {{-- @endforeach --}}
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>
                            @foreach ($products as $item)
                                @if ($loop->last)
                                    {{ $item->name }}
                                @endif
                            @endforeach
                        </h3>
                        <p>Barang Terbaru</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="{{ route('products.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ count($users) }}</h3>
                        <p>Jumlah User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    @can('system-access')
                        <a href="{{ route('users.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    @endcan
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ auth()->user()->roles->pluck('name')[0] ?? '' }}</h3>
                        <p>Role Anda</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>

                    @can('system-access')
                        <a href="{{ route('users.index') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    @endcan
                </div>
            </div>

        </div>
    @endsection
