

@foreach ($posts_data_format_feed as $view_post)
 <div class="">
    <div class="shadow bg-dark mb-3 " style="border-radius: 5px; overflow:hidden">


            @include('frontend.summary.summery_view')

        <div class=" px-3 py-2">
               <a  href="{{ route('post.single',$view_post->slug) }}" aria-label="View Details">
                    <h5 class="font-weight-bold text-success"> # {{ Str::title($view_post->tilte) }}</h5>
                </a>

                @include('frontend.details.partials.post_short_info')

                
                <div class="d-flex align-items-center justify-content-between mt-3">
                    @include('common.like_comment_post_summary')

                    @if(auth()->user() && $view_post->users)
                        @include('common.subscribe', ['subscribe_id'=> $view_post->users->id])
                    @endif

                </div>

                <a href="{{ route('post.single',$view_post->slug) }}" class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2">View Details</a>
        </div>
    </div>
 </div>

@endforeach

@include('frontend.job.partials.postview_feed')
@component('components.frontend.ads', ['where'=>'feed_showup'])@endcomponent

