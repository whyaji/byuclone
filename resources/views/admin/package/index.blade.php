@extends('admin.layouts.master')
@section('title', 'packages')
@section('content')

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <div class="page-header">
                <h4 class="page-title">Packages</h4>
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
                        <a href="#">Base</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Packages</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Daftar paket by.U</h3>
                    <a href="{{ route('package.create')}}" class="btn btn-sm btn-success"><i
                            class="fas fa-plus"></i>
                        Create</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hoover">
                    <thead>
                        <th>Name Paket</th>
                        <th>Value</th>
                        <th>Harga</th>
                        <th>Active</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            <tr>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->value }}</td>
                                <td>{{ $package->price }}</td>
                                <td>{{ $package->active }}</td>
                                <td>
                                    <a href="{{ route('package.edit', [$package->id]) }}"
                                        class="btn btn-warning float-left m-1">Edit</a>
                                    <form class="float-left m-1" action="{{ route('package.destroy', [$package->id]) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection