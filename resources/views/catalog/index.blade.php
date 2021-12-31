@extends('layouts.catalog')

@section('content')

    <div class="container">
        <h2>Каталоги</h2>

        <div class="addNewCatalogBlock card p-3">
            <h4>Добавление нового каталога</h4>
            @include('catalog.flash_message')

            <form action="{{route('catalog.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">
                    <select class="form-select" name="type" id="type">
                        <option value="0">Выберите тип каталога</option>
                        <option value="1">Мальчики</option>
                        <option value="2">Девочки</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="caption" class="form-label">Текст</label>
                    <input type="text" class="form-control" id="caption" name="caption" aria-describedby="captionHelp">
                    <div id="captionHelp" class="form-text">например 1-2 года</div>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Цвет</label>
                    <input type="color" class="form-control" id="color" name="color" aria-describedby="colorHelp" value="#e66465">
                    <div id="colorHelp" class="form-text"> цвет фона нижней части картинки, например #ccc</div>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="img" name="img" aria-describedby="img" aria-label="Upload">
                    <label class="input-group-text" for="inputGroupFile02">выбор картинки</label>
                </div>
                <button type="reset" class="btn btn-primary">Сброс</button>
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>
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
                    <tr>
                        <th>#</th>
                        <th>описание</th>
                        <th>тип каталога</th>
                        <th>цвет</th>
                        <th>имя картинки</th>
                        <th>путь к картинке</th>
                        <th>действия</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cats)
                        @foreach($cats as $k => $v)
                            <tr>
                                <td>{{$v->id}}</td>
                                <td>{{$v->caption}}</td>
                                <td>{{$v->type == 1 ? 'мальчики' : 'девочки'}}</td>
                                <td>{{$v->color}}</td>
                                <td>{{$v->img_filename}}</td>
                                <td>{{$v->img}}</td>
                                <td class="catalog_actions_td">
                                    @include('catalog.buttons.show', ['id' => $v->id])
                                    @include('catalog.buttons.edit', ['id' => $v->id])
                                    @include('catalog.buttons.delete', ['id' => $v->id])
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfooter>
{{--                    <tr>--}}
{{--                        <td colspan="6">tfooter</td>--}}
{{--                    </tr>--}}
                </tfooter>
                <tcaption>
                    Список с каталогами
                </tcaption>
            </table>
            <div>
                @php
                    //dump($cats);
                @endphp
            </div>
        </div>
    </div>

@endsection