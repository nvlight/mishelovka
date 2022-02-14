@if(session()->has('update'))
    <h5 class="{{ session()->get('update')['class'] }}">
        {{ session()->get('update')['message'] }}
    </h5>
@endif