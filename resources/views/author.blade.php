@extends('layouts.master')
@section('title', 'author')
@section('content')

    <section class="author section" id="home">
        <h2 class="section__title">Author</h2>
        <span class="section__subtitle">My Introduction</span>
        <div class="author__container container">
            <h2 class="author__name">Wahyu Patriaji</h2>
            <div class="author__text">Mahasiswa Informatika UMM
                <strong>Malang, Indonesia</strong>
            </div>
            <div class="author__content grid">
                <img src="{{asset('img/author.jpg')}}" alt="" class="author__img">
                <div class="author__bio">
                    <div class="bio__text">
                        <br>Biodata<br><br>Nama : Wahyu Patriaji<br>
                        NIM : 202010370311197<br>
                        Fakultas : Teknik<br>
                        No.HP : 082237420539<br>
                        Email : wahyupatriaji@gmail.com<br>
                        Web : <a href="https://wahyupaji.netlify.app/">https://wahyupaji.netlify.app/</a><br>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
