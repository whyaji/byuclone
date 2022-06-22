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
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->value }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->active }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection