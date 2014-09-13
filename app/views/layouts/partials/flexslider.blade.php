@if(Menu::whereSlug(Request::path())->first()->banner->count())
<div class="flexslider">
    <ul class="slides">
            @foreach(Menu::whereSlug(Request::path())->first()->banner as $index => $banner)
                <li>
                  {{ HTML::image("uploads/banner/$banner->image") }}
                </li>
            @endforeach
    </ul>
</div>
@endif

@section('script')
<script type="text/javascript" charset="utf-8">
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 4000
        });
    });
</script>
@stop