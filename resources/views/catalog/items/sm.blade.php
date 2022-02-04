<div class="container d-md-none d-lg-none">
    @if ($cats)
        <section class="Items">
            @php $i = 0; @endphp
            @foreach($cats as $k => $v)
                @if ($i === 0)
                    <div class="row">
                        <div class="itemLine pb-5">
                            @endif
                            @php $i++; @endphp
                            <div class="col-12">
                                <div class="catalogItem" style="justify-content: center;">
                                    <a href="@include('boys_girls_parts.second_url', ['id' => $v->id])">
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
                            @if ($i % 1 == 0)
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