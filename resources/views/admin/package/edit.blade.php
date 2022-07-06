@extends('admin.layouts.master')
@section('title', 'package.edit')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
            </div>
            <!-- /.card-header -->
            <form action="{{ route('package.update', [$package->id]) }}" method="POST">
                @CSRF
                @method('put')
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Nama Paket</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Paket" value="{{$package->name}}">
                                <small class="text-danger">@error('name') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="value">Kuota</label>
                                <input type="text" name="value" class="form-control @error('value') is-invalid @enderror" placeholder="Kuota Paket" value="{{$package->value}}">
                                <small class="text-danger">@error('value') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="active">Masa Aktif</label>
                                <input type="text" name="active" class="form-control @error('active') is-invalid @enderror" placeholder="Masa Aktif" value="{{$package->active}}">
                                <small class="text-danger">@error('active') {{$message}} @enderror</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Harga" value="{{$package->price}}">
                                <small class="text-danger">@error('price') {{$message}} @enderror</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('package.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                        <button type="submit" class="m-1 btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div><!-- /.container-fluid -->
</section>

@endsection