{{--  @section('sidebar')
    @foreach ($post_list_menu as $post_items)
    <li class="nav-item">
        <a href="{{ route('post.index',[$category, $subcategory, $post_items->slug]) }}" class="nav-link
            @if($post_items->slug == $view_post->slug)
                active
            @endif
            ">
            <i class="nav-icon fas fa-code"></i>
        <p>
        {{Str::title($post_items->tilte)}}
        </p>
        </a>
    </li>
    @endforeach
@endsection  --}}



<div class="post_details_extra_deasign">

@if ($job_details)

<x-frontend.card >


    @include('frontend.summary.summery_view', ['view_post' => $job_details])

    <div class=" px-3 py-2 position-relative">
        <div class="row flex-column flex-md-row">

            <div class="col-md-12">
                @include('frontend.job.partials.job_short_details')

                <div class="my-3 ">
                    {!! Str::markdown($view_post->long_details) !!}
                </div>


                @include('frontend.job.partials.company_details')


                <div class="mt-3">

                    @foreach ($job_details->categoryname() as $category_samilar)
                        <a class="tag_data" href="{{ route('category.index', $category_samilar->slug) }}"><i class="fa-solid fa-tags"></i>  {{ $category_samilar->name }}</a>
                    @endforeach


                </div>
            </div>

        </div>




        <button class="btn btn-primary apply_now  form markdown"
         data-toggle="modal"
         data-target="#modal_setup"
         data-title="Apply {{ $view_post->title }}"
         data-action="{{ route('user-job-post.job-post.apply_store', $view_post->id) }}"
         data-socuce="{{ route('user-job-post.job-post.apply', $view_post->id ) }}" data-method="post"

            style="    position: fixed;
    bottom: 10px;
    z-index: 99;
    width: 300px;
    border-radius: 35px;
    transform: translateX(-50%);
    left: 50%;">
            Apply Now
        </button>

    </div>

</x-frontend.card>
@else
<x-404></x-404>
@endif

<div class="comment_list_current_post"></div>
<div class="comment_data"></div>

</div>

{{--  <x-frontend.card class=" px-3 py-2">
    <h3 class="d-flex flex-wrap align-items-end">Write a Associte Comment <div class="text-warning mb-1 ml-2 h6">Markdown Editor</div></h3>
    <form action="" id="post_details_editor">
        @csrf
        <input type="number" name="post_id" value="{{ $view_post->id }}" hidden>
        <textarea name="details" Placeholder="Details" id="details_comment" class="form-control mb-2"  cols="30" rows="10"></textarea>
        <button type="submit" class="float-right btn btn-primary"><i class="fas fa-comment"></i> Comment Submit</button>
    </form>
</x-frontend.card>  --}}







