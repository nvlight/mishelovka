@if(session()->has('delete'))
    <h5 class="{{ session()->get('delete')['class'] }}">
        {{ session()->get('delete')['message'] }}
    </h5>
@endif