@forelse ($posts as $post)
<x-frontend.card_link title="Job Title : {{ $post?->title }}" tag="a" class="h4" href="{{ route('job.index',$post->slug ) }}">



    <!-- Split dropup button -->
    @include('profile.job-post.partials.job_post_action')
    <style>
        .dropdown-menu.dropdown-menu-right.show {
            transform: translate3d(-20px, 38px, 0px) !important;
        }

    </style>

   <p> {{ $post->short_details }}</p>


</x-frontend.card_link>


@empty

{{-- if not found any post or question crate one for button --}}
<x-frontend.card>
    <div class="text-center mt-2 ">
        Not found data Asked a Question or Write a Post?
    </div>

</x-frontend.card>
{{-- End if not found any post or question crate one for button --}}

@endforelse
@if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
{{ $posts->links()}}
@endif

@if(auth()->user() && auth()->user()->id == $user->id)
<x-frontend.card>

    <div class="text-center my-2 ">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Job Post Create" data-action="{{ route('user-job-post.job-post.store') }}" data-socuce="{{ route('user-job-post.job-post.create') }}" data-method="post">
            <i class="fa fa-plus"></i> Add New</button>

    </div>
</x-frontend.card>
@endif
