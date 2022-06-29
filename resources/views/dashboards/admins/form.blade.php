@extends('dashboards.admins.layouts.master')
@section('title', 'dashboard')
@section('content')

    <div class="content">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Elements</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    @if (Session::get('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::get('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif
                                    <form action="add" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Paket ID</label>
                                            <input type="number" class="form-control" name="package_id"
                                                value="{{ old('package_id') }}">
                                            <span style="color:red">
                                                @error('package_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Paket</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name') }}">
                                            <span style="color:red">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kuota</label>
                                            <input type="text" class="form-control" name="value"
                                                value="{{ old('value') }}">
                                            <span style="color:red">
                                                @error('value')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga</label>
                                            <input type="number" class="form-control" name="price"
                                                value="{{ old('price') }}">
                                            <span style="color:red">
                                                @error('price')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Masa aktif</label>
                                            <input type="text" class="form-control" name="active"
                                                value="{{ old('active') }}">
                                            <span style="color:red">
                                                @error('active')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Grup Paket ID</label>
                                            <input type="number" class="form-control" name="group_id"
                                                value="{{ old('group_id') }}">
                                            <span style="color:red">
                                                @error('group_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
