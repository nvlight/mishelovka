@extends('layouts.admin.brends')

@section('content')
    <div class="container">
        <h4>Brends</h4>
        @php //dump($brends); @endphp
        @php //dump($columnsNames); @endphp

        @include('brend.messages.add_success')
        @include('brend.messages.delete_success')
        @include('brend.add_modal')
        @include('brend.add_modal_ajax')

        <table class="table table-bordered table-striped" id="brendTable">
            <thead>
                <tr>
                    @foreach($columnsNames as $name)
                        <th>{{$name}}</th>
                    @endforeach
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @if($brends->count())
                    @foreach($brends as $brend)
                        @include('brend.parts.tr')
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection