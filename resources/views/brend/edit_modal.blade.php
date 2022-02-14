@extends('layouts.admin.brends')

@section('content')
    <div class="container">
        <div class="card p-3 mb-3">
            @include('brend.parts.breadcrumbs')
            <h5>Редактирование бренда</h5>

            @include('brend.messages.update_success')

            <form action="{{ route('brend.update', $brend) }}" id="brend_edit_modal" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Бренд</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
                           value="{{ $brend->title }}">
                </div>
                @include('parts.errors')
                <div class="buttons">
                    <button type="submit" class="btn btn-success">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection