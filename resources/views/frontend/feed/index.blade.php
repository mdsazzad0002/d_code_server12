@extends('frontend.layouts.master')

{{--  Require all for seo  --}}
@section('title', 'News Feed')
@section('short_description', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.')
@section('og_image', static_asset('uploads/BANNER_DATA.jpg'))
@section('keywords', 'HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website')



{{--  Require all for seo  --}}

@section('sidebar')
    @foreach ($category as $items)
    <li class="nav-item" role="menuitem">
        <a href="{{ route('category.index', $items->slug) }}" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
                {{Str::title($items->name)}}
            </p>
        </a>
    </li>
    @endforeach
@endsection


@section('content')
<style>
    .feed_image{
        max-height: 250px;
    }
</style>



<div class="row">
    <div class="col-xl-8">
        <div class="p-1"></div>
        <x-frontend.card>
            @include('frontend.feed.create')
            @include('frontend.feed.partials.today_top_contribute')
        </x-frontend.card>

@include('frontend.report.create')


        <div class="post_data_feed">

        </div>
        <div class="post_data_feed_preview">

        </div>
    </div>
    <div class="col-xl-4 d-none d-lg-block">
        <div class="position_sticky_footer_side">

            <x-frontend.card title="Recent Jobs">

                @php
                   $job_post = jobPost(null, 15);
                @endphp
                @include('frontend.job.partials.job_post_card')
            </x-frontend.card>
        </div>
    </div>
</div>




@stop
@push('scripts')
<script>
    function feed_preview(data){
        var preview_feed_text = `
        @include('frontend.feed.placeholder_partials_post.index_post')

    `;
        if(data > 0){
            for(var i =0; i < data -1; i++){
                document.querySelector('.post_data_feed_preview').innerHTML += preview_feed_text;

            }
        }else{
            document.querySelector('.post_data_feed_preview').innerHTML = '';
        }
    }


    document.addEventListener("DOMContentLoaded", function() {
        let isRequestInProgress = false;
        let first_load_checkpoint = false;

        function data_load_feed_post() {

            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;
            const documentHeight = document.documentElement.scrollHeight;

            // Check if the user has scrolled to the bottom
            if (scrollTop + windowHeight >= documentHeight) {
                // Trigger your function here
                window.scrollBy(0, -500);
            }

            if (!isRequestInProgress && (window.innerHeight + window.scrollY + 500) >= document.body.offsetHeight) {
                isRequestInProgress = true;
                feed_preview(3)
                const url = "{{ route('feed_load_data_post') }}"; //A local page
                const xhr = new XMLHttpRequest();

                xhr.onreadystatechange = () => {
                    if (xhr.readyState === 4) {
                        $('.post_data_feed').append(xhr.response);
                        feed_preview(0)
                        isRequestInProgress = false; // Reset the flag after the request is complete
                        if(first_load_checkpoint==false){
                            first_load_checkpoint=true
                            lazyload();
                        }
                    }
                };

                xhr.open("GET", url, true);
                xhr.send("");
            }
        }

        data_load_feed_post();
        document.addEventListener("scroll", data_load_feed_post);
        window.addEventListener("resize", data_load_feed_post);
        window.addEventListener("orientationChange", data_load_feed_post);




    });

</script>

@endpush
