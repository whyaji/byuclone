@extends('layouts.master')
@section('title', 'home')
@section('content')

    <!--==================== MAIN ====================-->
    <section class="home section" id="home">
        <h2 class="section__title blogs__title">Daftar Paket byU</h2>
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
    </section>
@endsection
