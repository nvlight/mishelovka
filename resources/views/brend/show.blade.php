@extends('layouts.admin.brends')

@section('content')
    <div class="container">
        <h4>Brends - show</h4>
        @php //dump($brend); @endphp
        @include('brend.parts.breadcrumbs')
        <table class="table table-bordered table-striped">
            <tbody>
                @foreach($columnsNames as $name)
                    <tr>
                        <th>{{$name}}</th>
                        <td>{{$brend->$name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
            <div class="row">
                <div class="col-md-1 text-center">
                    @include('brend.buttons.edit', ['route' => route('brend.edit', $brend)])
                </div>
                <div class="col-md-1 text-center">
                    @include('brend.buttons.delete', ['route' => route('brend.destroy', $brend), 'id' => $brend->id])
                </div>
            </div>
        </div>
    </div>
@endsection