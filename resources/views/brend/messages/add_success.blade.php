@if(session()->has('store'))
    <h5 class="{{ session()->get('store')['class'] }}">
        {{ session()->get('store')['message'] }}
    </h5>
@endif