@extends('layouts.catalog')

@section('content')

    <div class="container">
        <h3>Catalog</h3>

        <div>
            @php
                dd($cats);
            @endphp
        </div>
    </div>

@endsection