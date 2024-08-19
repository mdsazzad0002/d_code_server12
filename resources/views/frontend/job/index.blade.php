@extends('frontend.layouts.master')

@section('title', Str::title($job_details->title))
@section('short_description', $job_details->short_details)
@section('og_image', dynamic_asset($job_details->uploads_id))
@section('keywords', $job_details->keywords)


@section('content')
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


@php
     $job_items = $view_post = $job_details;
@endphp

<div class="row">
    <div class="col-xl-8">

        @include('frontend.job.partials.job_details')


    </div>
    <div class="col-xl-4">
        <div class="position_sticky_footer_side">


            <x-frontend.card title="Recent Jobs">

                @php
                   $job_post = jobPost(null, 15);
                @endphp
                @include('frontend.job.partials.job_post_card')
            </x-frontend.card>

            </div>
            <div class="position_sticky_footer_side">
                <x-footer_category></x-footer_category>
             </div>
    </div>
</div>



@stop




@push('scripts')

{{--  <script src="{{static_asset('plugins/')}}/markdown/simplemde.min.js"></script>
<script>
        var simplemde = new SimpleMDE({ element: $("#details")[0] });
</script>


<script>
    $('#post_details_editor').on('submit', function(e){
        e.preventDefault();
        var formData = $('#post_details_editor').serialize();;
        $.ajax({
            type:'post',
            url:'{{ route('comment.post') }}',
            data:
                formData,

            success:function(data){
                // console.log(data);
                toastr["success"](`Comments Added successfully`)
                $('.comment_data').append(data);
                Prism.highlightAll();
            }
        })
    })


    $(document).ready(function() {
        $.ajax({
            type:'get',
            url:'{{ route('comment.index') }}',
            data:{
                post_id :{{ $job_details->id }},
            },

            success:function(data){
                // console.log(data);
                $('.comment_list_current_post').append(data);
                Prism.highlightAll();
            }
        })
    });



</script>  --}}
@endpush

@push('styles')
<link rel="stylesheet" href="{{static_asset('plugins/')}}/markdown/simplemde.min.css"/>
<style>
    #post_details_editor:has(>.editor-toolbar.fullscreen){
        position: relative;
        z-index: 99999;
    }

    .editor-toolbar a{
        color: #fff !important;
    }
    .editor-toolbar a.active, .editor-toolbar a:hover{
        background: transparent !important;
    }
    .editor-toolbar.fullscreen{
        background: #616161;

    }
</style>
@endpush
