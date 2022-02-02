<div class="container d-none d-lg-block">
    @if ($boysCats)
        <section class="Items">
            @php $i = 0; @endphp
            @foreach($boysCats as $k => $v)
                @if ($i === 0)
                    <div class="row">
                        <div class="itemLine pb-5">
                            @endif
                            @php $i++; @endphp
                            <div class="col-lg-4 center-lg">
                                <div class="catalogItem"
                                     style="justify-content: {{App\Http\Controllers\Boys\BoysController::boysLineJistyfyContentByIndex($i)}};">
                                    <a href="">
                                        <div class="img" style="background-image: url({{ asset('storage/'.$v->img) }});">
                                            <div class="caption">
                                                <div class="year">{{ explode(' ', $v->caption)[0] }}</div>
                                                <div class="title">{{ explode(' ', $v->caption)[1] }}</div>
                                            </div>
                                            <div class="bottom_bgc_theme" style="background-color: {{ $v->color }};">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @if ($i % 3 == 0)
                        </div>
                    </div>
                    @php $i=0; @endphp
                @endif
            @endforeach
            @if($i)
                </div>
                </div>
            @endif
        </section>
    @endif
</div>