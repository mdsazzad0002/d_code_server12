 @foreach ($posts_data_format_feed as $view_post)
 <div class="">
    <div class="shadow px-3 py-2 bg-dark mb-3 ">
        @include('frontend.summary.summery_view')
        <a  href="{{ route('post.single',$view_post->slug) }}" aria-label="View Details">
            <h5 class="font-weight-bold text-success"> # {{ Str::title($view_post->tilte) }}</h5>
        </a>
             @include('frontend.details.partials.post_short_info')

             <a href="{{ route('post.single',$view_post->slug) }}" class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2">View Details</a>

    </div>
 </div>

@endforeach
