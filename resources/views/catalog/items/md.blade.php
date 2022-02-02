<div class="container d-none d-md-block d-lg-none">
    @if ($cats)
        <section class="Items">
            @php $i = 0; @endphp
            @foreach($cats as $k => $v)
                @if ($i === 0)
                    <div class="row">
                        <div class="itemLine pb-5">
                            @endif
                            @php $i++; @endphp
                            <div class="col-md-6 ">
                                <div class="catalogItem" style="justify-content: center;">
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
                            @if ($i % 2 == 0)
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