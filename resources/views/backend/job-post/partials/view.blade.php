<h3 class="mb-2">{{ Str::title($post->title) }}</h3>
</br>
<p>{{ $post->short_details }}</p>

{!! Str::markdown($post->long_details) !!}
