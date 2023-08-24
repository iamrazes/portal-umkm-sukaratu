@extends('layouts.admin')

@section('head')
@endsection

@section('header')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="d-flex col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="content ml-2 mr-2 pb-2 ">
    <div class="card card-info">
        <div class="card-header bg-primary">
            <h3 class="card-title">Formulir Data Informasi User</h3>
        </div>

        <!-- form start -->

        <form action="{{ route('users.update', $users->id) }}" method="post">
            {{ csrf_field() }}
            @method('PATCH')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $users->name }}" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select class="select2 form-control" name="roles">
                @foreach($roles as $role)
                <option value="{{ $role->name }}"
                    {{ $users->hasRole($role->name) ? 'selected' : '' }}> {{$role->name}}
                    </option>
                @endforeach
                </select>
            </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $users->email }}" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="{{ $users->password }}" placeholder="Password">
              </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
</div>
@endsection
