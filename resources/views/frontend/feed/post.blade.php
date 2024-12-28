

@foreach ($posts_data_format_feed as $view_post)
 <div class="">
    <div class="shadow  mb-3 " style="border-radius: 5px; overflow:hidden;">


            @include('frontend.summary.summery_view')

        <div class=" px-3 py-2">
                <a  href="{{ route('post.single',$view_post->slug) }}" aria-label="View Details">
                    <h5 class="font-weight-bold text-success"> # {{ Str::title($view_post->tilte) }}</h5>

                @include('frontend.details.partials.post_short_info')

                </a>
                <div class="mt-2">
                    <a class="tag_data" href="{{ route('subcategory_by_id.index', [$view_post->subcategory->id, $view_post->subcategory->slug]) }}"><i class="fa-solid fa-tags"></i> {{$view_post->subcategory->name ?? '' }}</a>

                    <a class="tag_data" href="{{ route('category.index', [@$view_post->category->slug]) }}"><i class="fa-solid fa-tags"></i> {{$view_post->category->name ?? '' }}</a>
                </div>
        </div>


        <div class="d-flex align-items-center justify-content-between  px-3 py-2" style="background: #282828">
            @include('common.sharer_and_summary')
        </div>

    </div>
 </div>

@endforeach

@include('frontend.job.partials.postview_feed')
@component('components.frontend.ads', ['where'=>'feed_showup'])@endcomponent

