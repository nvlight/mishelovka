<tr>
    <td>{{$brend->id}}</td>
    <td>{{$brend->title}}</td>
    <td>{{$brend->created_at}}</td>
    <td>{{$brend->updated_at}}</td>
    <td class="d-flex align-items-center justify-content-evenly">
        @include('brend.buttons.up', ['route' => route('brend.show', $brend), 'id' => $brend->id])
        @include('brend.buttons.down', ['route' => route('brend.show', $brend), 'id' => $brend->id])
        @include('brend.buttons.show', ['route' => route('brend.show', $brend), 'id' => $brend->id])
        @include('brend.buttons.edit', ['route' => route('brend.edit', $brend), 'id' => $brend->id])
        @include('brend.buttons.delete', ['route' => route('brend.destroy', $brend), 'id' => $brend->id])
    </td>
</tr>