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
                        <li class="breadcrumb-item active">Users</li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="content ml-2 mr-2 pb-2 ">
        <div class="card card-info">
            <div class="card-header bg-primary">
                <h3 class="card-title">Data Informasi User</h3>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" value="{{ $users->name }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" value="{{ $users->email }}" readonly>
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" autocomplete="off" value="{{ $users->password }}"
                            readonly>
                    </div>
                </div> --}}
                {{-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">

                        <select class="select2 form-control" name="roles">
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}" {{ $users->hasRole($role->name) ? 'selected' : '' }}>
                                    {{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

                {{-- <div class="form-group row">
                    <label for="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <input type="text" name="roles" id="">
                        <select class="select2 form-control" name="roles">
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}" {{ $users->hasRole($role->name) ? 'selected' : '' }}>
                                    {{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

            </div>

        </div>
    </div>
@endsection
