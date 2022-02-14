<div>
    @isset($show_evento)
        <!-- imagen -->
        <div class="">
            <img src="https://th.bing.com/th/id/R.c838eca71a1f1a08ca0817ae3e45523d?rik=RDRZ5Ds1lz7nnA&pid=ImgRaw&r=0"
                alt="">
        </div>

        <!--Title-->
        <div class="flex justify-between items-center">
            {{ $show_evento->title }}
        </div>

        <!-- content -->
        <div>
            {{ $show_evento->descripcion }}
            <p>{{ $show_evento->start->toFormattedDateString() }}</p>
            <p>...</p>
        </div>
    @endisset
</div>
