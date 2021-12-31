@extends('layouts.catalog')

@section('content')

    <div class="container">
        <h3>Каталоги</h3>

        <a href="{{route('catalog.show', $catalog->id)}}">Каталог #{{$catalog->id}}</a>

        <div class="addNewCatalogBlock card p-3">
            <h4>Редактирование каталога</h4>
            @include('catalog.flash_message')

            <form action="{{route('catalog.update', $catalog)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <select class="form-select" name="type" id="type">
                        <option value="0">Выберите тип каталога</option>
                        <option value="1" @if($catalog->type == 1) selected @endif>Мальчики</option>
                        <option value="2" @if($catalog->type == 2) selected @endif>Девочки</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="caption" class="form-label">Текст</label>
                    <input type="text" class="form-control" id="caption" name="caption" aria-describedby="captionHelp"
                       value="{{$catalog->caption}}">
                    <div id="captionHelp" class="form-text">например 1-2 года</div>
                </div>
                <div class="mb-3">
                    <label for="color" class="form-label">Цвет</label>
                    <input type="color" class="form-control" id="color" name="color" aria-describedby="colorHelp"
                           value="{{$catalog->color}}">
                    <div id="colorHelp" class="form-text"> цвет фона нижней части картинки, например #ccc</div>
                </div>
                <div class="mb-3">
                    <label for="img_filename" class="form-label">Имя картинки</label>
                    <input type="text" class="form-control" id="img_filename" name="img_filename" aria-describedby="img_filename"
                           value="{{ $catalog->img_filename}}" >
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="img" name="img" aria-describedby="img" aria-label="Upload"
                           value=
                            @if ($catalog->img)
                                "{{ explode('/', $catalog->img)[1]}}"
                            @else "" @endif>
                    <label class="input-group-text" for="inputGroupFile02">выбор картинки</label>
                </div>
                @if ($catalog->img)
                    <div class="mb-3">
                        <div id="imgHelp" class="form-text">{{ $catalog->img }}</div>
                    </div>
                @endif
                <div>
                    <button type="submit" class="btn btn-success">Редактировать</button>
                </div>
            </form>
        </div>
        @include('catalog.parts.show_delete_actions')
    </div>

@endsection