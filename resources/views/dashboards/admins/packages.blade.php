@extends('dashboards.admins.layouts.master')
@section('title', 'packages')
@section('content')

<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Daftar Paket byU</h4>
        </div>
        <table class="table table-hoover">
            <thead>
                <th>Name Paket</th>
                <th>Value</th>
                <th>Harga</th>
                <th>Active</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->value }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->active }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="" class="btn btn-danger btn-xs">Delete</a>
                                <a href="edit/{{ $item->package_id }}" class="btn btn-primary btn-xs">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection