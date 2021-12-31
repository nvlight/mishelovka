@extends('layouts.catalog')

@section('content')

    <div class="container">

        <h3>Каталог</h3>

        <a href="{{route('catalog.index')}}">Катологи - home</a>

        <div class="showCatalog card p-3">
            <h4>Просмотр каталога</h4>
        </div>

        <style>
            .catalog_actions_td{
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }
            .catalog_actions_di{
                display: inline;
            }
        </style>
        <div class="catalogsWrapper mt-3">
            <table class="table table-striped table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td>#</td>
                        <td>{{$catalog->id}}</td>
                    </tr>
                    <tr>
                        <td>описание</td>
                        <td>{{$catalog->caption}}</td>
                    </tr>
                    <tr>
                        <td>тип каталога</td>
                        <td>{{$catalog->type == 1 ? 'мальчики' : 'девочки'}}</td>
                    </tr>
                    <tr>
                        <td>цвет</td>
                        <td>{{$catalog->color}}</td>
                    </tr>
                    <tr>
                        <td>имя картинки</td>
                        <td>
                            {{$catalog->img_filename}}
                        </td>
                    </tr>
                    <tr>
                        <td>путь к картинке</td>
                        <td>
                            {{$catalog->img}}
                        </td>
                    </tr>
                    <tr>
                        <td>картинка</td>
                        <td>
                            <img src="{{ asset('storage/'.$catalog->img) }}" alt="">
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="actions mt-3 d-flex align-items-center">
                <div class="mx-2">
                    @include('catalog.buttons.edit', ['id' => $catalog->id])
                </div>
                <div class="mx-2">
                    @include('catalog.buttons.delete', ['id' => $catalog->id])
                </div>
            </div>
        </div>
    </div>

@endsection