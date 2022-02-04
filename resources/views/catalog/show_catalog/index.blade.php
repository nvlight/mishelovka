@extends('layouts.show_catalog')

@section('content')

    <div class="container">
        <h5><a href="/{{$parentUrl}}">назад</a></h5>

        <div class="catalog_items">
            @php
                //dump($childs)
            @endphp
            @if ($childs->count())
                @foreach($childs as $k => $v)
                    <ul class="list-group-numbered">
                        <li style="width: 300px; height: 300px; position: absolute;">
                            <p>{{$parentCatRuss}} {{$v->price}} {{$v->size}}</p>
                            <p>{{$v->img_filename}}</p>
                            <img src="{{ asset('storage/'.$v->img) }}" alt="" style="width: 100%;">
                        </li>
                    </ul>
                @endforeach
            @endif
        </div>

    </div>

@endsection