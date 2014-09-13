@if($banners)
<div class="flexslider">
    <ul class="slides">
            @foreach($banners as $index => $banner)
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