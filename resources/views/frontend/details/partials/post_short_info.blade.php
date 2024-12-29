@if($view_post->uploads_id != 0)
    <img class="w-100 lazy feed_image" data-src="{{ dynamic_asset($view_post->uploads_id) }}" alt="{{ $view_post->tilte }}">
@endif

<div class="line-climb-3 text-white">
    {{ $view_post->short_details }}
</div>


