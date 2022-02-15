<noscript>
    <div class="card p-3 mb-3">
        <h5>Добавление бренда</h5>
        <form action="{{ route('brend.store') }}" id="brend_add_modal" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Бренд</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" value="{{ old('title')}}">
                <div id="titleHelp" class="form-text">введите название бренда, например JBS</div>
            </div>
            @include('parts.errors')
            <div class="buttons">
                <button type="reset" class="btn btn-primary">Сброс</button>
                <button type="submit" class="btn btn-success">Добавить</button>
            </div>
        </form>
    </div>
</noscript>