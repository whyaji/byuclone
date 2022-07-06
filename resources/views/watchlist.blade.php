@extends('layouts.master')
@section('title', 'watchlist')
@section('content')

    <section class="watch__list section" id="wachtlist">
        <h2 class="section__title">Watch List</h2>
        <div class="wachtlist__container container">
            <div class="input__container">
                <div class="input__add-container">
                    <div class="">
                        <input type="text" class="form__control" placeholder="Movie Title" id="txtTitle" />
                    </div>
                    <div class="">
                        <input type="text" class="form__control " placeholder="Movie Rating" id="txtRating" />
                    </div>
                    <div class="">
                        <input type="button" id="btnAdd" class="button btn__add" value="Add New" />
                    </div>
                </div>
                <div class="input__add-container">
                    <div class="">
                        <input type="text" class="form__control from__search" placeholder="Search" id="txtSearch" />
                    </div>
                </div>
            </div>
            <div class="output__container container">
                <table id="tblData" class="table">
                    <thead>
                        <tr>
                            <th class="sort-name">Movie Title</th>
                            <th class="sort-rating">Move Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
