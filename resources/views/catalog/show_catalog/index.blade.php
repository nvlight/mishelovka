@extends('layouts.show_catalog')

@section('content')

    <div class="container">
        <h5><a href="/{{$parentUrl}}">назад</a></h5>

        <div class="catalog_items">
            @php
                //dump($childs)
            @endphp
            <style>
                .items-ul {
                    justify-content: space-between;
                }
                .widthClass{
                    width: 300px;
                    margin: 5px;
                }
                @media (max-width: 768px) {
                    .items-ul{
                        flex-wrap: nowrap !important;
                        flex-direction: column;
                    }
                    .items-ul li{
                        margin: 0;
                        align-self: center;
                        padding-top: 5px;
                    }
                }
            </style>
            @if ($childs->count())
                <ul id="ul-li" class="items-ul d-flex flex-wrap p-0 m-0" style="list-style-type: none;">
                @foreach($childs as $k => $v)
                    <li class="p-lg-2 widthClass" data-src="{{ asset('storage/'.$v->img) }}">
{{--                        <p>{{$parentCatRuss}} {{$v->price}} {{$v->size}}</p>--}}
{{--                        <p>{{$v->img_filename}}</p>--}}
                        <img src="{{ asset('storage/'.$v->img) }}" alt="" style="width: 100%; cursor: pointer;">
                    </li>
                @endforeach
                </ul>
            @endif
        </div>

    </div>
    <script>
        lightGallery(document.getElementById('ul-li'), {
            plugins: [lgZoom, lgThumbnail],
            speed: 500,
            //licenseKey: 'your_license_key',
        });
    </script>

@endsection