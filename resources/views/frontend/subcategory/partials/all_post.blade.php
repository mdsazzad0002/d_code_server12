@section('sidebar')
@foreach ($sub_category_list as $items)
<li class="nav-item" role="menuitem">
    <a href="{{ route('subcategory.index',  [$category, $items->slug]) }}" class="nav-link
                @if($items->slug == $find_subcategory->slug)
                    active
                @endif
                ">
        <i class="nav-icon fas fa-code"></i>
        <p>
            {{Str::title($items->name)}}
        </p>
    </a>
</li>
@endforeach
@endsection


@php
$i =0 ;
@endphp
@forelse ($posts as $items )

@php
$i++;
$post_after = general_setting('post_center_showup_after') ?? 100;
@endphp
@if( $post_after && $i % $post_after == 0)
@component('components.frontend.ads', ['where'=>'post_showup'])@endcomponent
@endif
<x-frontend.card>
    <div class=" px-3 py-2" style="background:#282828">
      <div>
            <h4 class="font-weight-bold mb-0"># <span class="text-success"> {{ Str::title($items->tilte) }}</span></h4>
        </div>
    </div>
    <div class=" px-3 py-2">
    <img class="w-100 lazy" data-src="{{ dynamic_asset($items->uploads_id) }}" alt="{{ $items->tilte }}">

        <div class="">
            <div class="mt-2">
                ⨀ {{ $items->updated_at->format('d-M-Y h:s:i A') }} <span class="text-success">( {{ $items->updated_at->diffForHumans() }} )</span>
            </div>
            <div>
                <div class="line-climb-3">
                    {{ $items->short_details }}
                </div>
            </div>
            <a class="btn btn-primary progress-bar progress-bar-striped btn-block p-2 px-4 mt-2" href="{{ route('post.index',[$category ,$subcategory, $items->slug]) }}">Details View</a>
        </div>
    </div>

</x-frontend.card>


@empty
<x-404></x-404>
@endforelse

{{ $posts->links() }}
