@extends('layouts.show_catalog')

@section('content')

    <div class="container">
        <h3>Просмотр каталога - {{$id}}</h3>
        <h4><a href="/{{$parentUrl}}">назад</a></h4>

        <div class="catalog_items">
            @php
                dump($childs)
            @endphp
        </div>

    </div>

@endsection