@extends('layouts.admin.brends')

@section('content')
    <div class="container">
        <h4>Brends</h4>
        @php //dump($brends); @endphp
        @php //dump($columnsNames); @endphp

        <table class="table table-bordered table-striped">
            <theader>
                <tr>
                    @foreach($columnsNames as $name)
                        <th>{{$name}}</th>
                    @endforeach
                    <th>actions</th>
                </tr>
            </theader>
            <tbody>
                @if($brends->count())
                    @foreach($brends as $brend)
                        <tr>
                            <td>{{$brend->id}}</td>
                            <td>{{$brend->title}}</td>
                            <td>{{$brend->created_at}}</td>
                            <td>{{$brend->updated_at}}</td>
                            <td class="d-flex align-items-center justify-content-evenly">
                                @include('brend.buttons.show', ['route' => route('brend.show', $brend)])
                                @include('brend.buttons.edit', ['route' => route('brend.edit', $brend)])
                                @include('brend.buttons.delete', ['route' => route('brend.destroy', $brend)])
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection