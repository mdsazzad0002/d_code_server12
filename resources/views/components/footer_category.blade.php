<x-frontend.card title="View More Categories">
    @component('components.frontend.ads', ['where'=>'sidebar_category_showup','class'=>'m-2'])@endcomponent
    @php
        $catgory_list_footer = category_head(30);
    @endphp
    <div class="row">
        @foreach ($catgory_list_footer as $items )
            <div class=" col-md-4 col-xl-12" >
                <div class="card mb-0 mb-2 ml-2 mr-2">
                    <div class="card-body p-2">
                        <a href="{{ route('category.index', $items->slug) }}" class=" text-black w-full d-flex " style="gap: 5px">
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
    </div>
</x-frontend.card>
