@extends('admin.layouts.master')
@section('title', 'package.create')
@section('content')

    <!-- Main content -->
    <section class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Forms</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Forms</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Basic Form</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Create Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <form action="{{ route('package.store') }}" method="POST">
                        @CSRF
                        {{-- <div class="form-group">
                            <label for="">Paket ID</label>
                            <input type="number" class="form-control" name="id" value="{{ old('id') }}">
                            <span style="color:red">
                                @error('id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div> --}}
                        <div class="form-group">
                            <label for="">Nama Paket</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            <span style="color:red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Kuota</label>
                            <input type="text" class="form-control" name="value" value="{{ old('value') }}">
                            <span style="color:red">
                                @error('value')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                            <span style="color:red">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Masa aktif</label>
                            <input type="text" class="form-control" name="active" value="{{ old('active') }}">
                            <span style="color:red">
                                @error('active')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="">Grup Paket ID</label>
                            <input type="number" class="form-control" name="group_id" value="{{ old('group_id') }}">
                            <span style="color:red">
                                @error('group_id')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <!-- /.row -->
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('package.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                                <button type="submit" class="m-1 btn btn-success">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
