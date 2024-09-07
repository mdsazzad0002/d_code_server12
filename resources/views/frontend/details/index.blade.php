@extends('frontend.layouts.master')

@section('title', Str::title($view_post->tilte))
@section('short_description', $view_post->short_details . $view_post?->users?->tagline ?? '' . $view_post?->users?->name ?? '' . $view_post?->users?->email ?? '')
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
                index_tag_generate()
            }
        })
    });


    function slugify(str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing white space
        str = str.toLowerCase(); // convert string to lowercase
        str = str.replace(/[^a-z0-9 -]/g, '') // remove any non-alphanumeric characters
                 .replace(/\s+/g, '-') // replace spaces with hyphens
                 .replace(/-+/g, '-'); // remove consecutive hyphens
        return str;
      }

    function index_tag_generate(){
      var quick_access_tag = document.querySelector('#quick_access_tag');
      var tag_rander = '';
        var details_root_element = document.querySelector('.post_details_extra_deasign');
        var h1_items = details_root_element.querySelectorAll('h1, h2, h3, h4, h5, h6');

        h1_items.forEach(function(element) {
            const title = element.innerHTML;
            const slug = slugify(title);
            element.setAttribute('id', slug)
            tag_rander+=`<div><a class="btn_link_data text-light mb-1" href="#${slug}"><b class="text-danger">#</b> ${element.innerHTML}</a></div>`;

        });
        quick_access_tag.innerHTML = tag_rander;


        tag_scroll_and_target();
    };
    index_tag_generate()

function tag_scroll_and_target(){
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        history.pushState(null, null, this.href);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
            scrollTop: target.offset().top -120
            }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
                return false;
            } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
            };
            });
        }
        }
    })
}
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
    img{
        max-height: 300px;
    }

    
    div#quick_access_tag::before {
        content: '';
        position: absolute;
        background: #00ad85;
        height: 24px;
        width: 22px;
        transform: rotate(45deg);
        right: -13px;
        top: -2px;
        border-radius: 3px;
    }
    div#quick_access_tag::after {
        content: 'Quick Access Scroll Links';
        background: #07cc9e;
        /* width: 10px; */
        /* height: 40px; */
        position: absolute;
        top: -18px;
        right: -17px;
        padding: 3px 10px;
        border-radius: 2px;
    }
    #quick_access_tag{
        border: 1px dashed #07cc9e;
        padding: 10px;
        border-radius: 6px;
        position: relative;
    }

</style>
@endpush
