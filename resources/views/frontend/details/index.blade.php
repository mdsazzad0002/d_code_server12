@extends('frontend.layouts.master')

@section('title', Str::title($view_post->tilte))
@section('short_description', $view_post->short_details)
@section('og_image', dynamic_asset($view_post->uploads_id))
@section('keywords', $view_post->keywords)


@section('content')
<div class="row">
    <div class="col-xl-8">
        @include('frontend.details.partials.view')
    </div>
    <div class="col-xl-4">
        <div class="position_sticky_footer_side">
            <x-frontend.card title="View More Topics">
                @component('components.frontend.ads', ['where'=>'sidebar_subcategory_showup', 'class'=>'m-2'])@endcomponent
                    @php
                    // dd($category);
                    $catgory_list_footer = category_subcategory($category, 30);
                    @endphp


                    <div class="row">
                        @if($catgory_list_footer!=null)

                        @foreach ($catgory_list_footer as $items )
                        <div class=" col-md-4 col-xl-12 ">
                            <div class="card ml-2 mr-2 mb-2">
                                <div class="card-body p-2">
                                    <a href="{{ route('subcategory.index',[$category, $items->slug]) }}" class=" text-black w-full d-flex " style="gap: 5px">
                                        <div style="width:60px; height:40px;">
                                            <img class="w-100 h-100 object-fit-cover lazy" data-src="{{ dynamic_asset($items->uploads_id) }}"/>
                                        </div>
                                        <div style="    width: calc(100% - 60px);">
                                           <h6 class="mb-0" style=" font-weight:700">
                                               # <span style="color: #07cc9e;">{{Str::title($items->name) }}</span>
                                            </h6>
                                            <div class="line-climb-1">
                                                {{$items->description }}
                                            </div>
                                        </div>
                                    </a>
                            </div>
                        
                                </div>

                            </div>

                        @endforeach
                        @endif
                    </div>


                </x-frontend.card>
            </div>

            <div class="position_sticky_footer_side">
                <x-frontend.card title="Recent Jobs">

                    @php
                       $job_post = jobPost($category, 15);
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

<script src="{{static_asset('plugins/')}}/markdown/simplemde.min.js"></script>
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
                {{--  console.log(data);  --}}
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
                post_id :{{ $view_post->id }},
            },

            success:function(data){
                // console.log(data);
                $('.comment_list_current_post').append(data);
                Prism.highlightAll();
            }
        })
    });



</script>
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
