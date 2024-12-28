<div class="row">
    @forelse ($posts as $post)
        <div class="col-lg-12">

            <x-card.card_link title="# {{ $post?->tilte }}" tag="a" class="h4" href="{{ route('post.single',$post->slug ) }}">
                <!-- Split dropup button -->
                @include('profile.post.partials.post_action')
                <style>
                    .dropdown-menu.dropdown-menu-right.show {
                        transform: translate3d(-20px, 38px, 0px) !important;
                    }

                </style>

            <p> {{ $post->short_details }}</p>
            <p class="text-secondary">🕒 {{ $post->updated_at->format('d M Y h:i:s A') }} ({{ $post->updated_at->diffForHumans() }})</p>

            </x-card.card_link>

        </div>
    @empty
        <div class="col-lg-12">
            {{-- if not found any post or question crate one for button --}}
            <x-card.card class="pb-2">
                <div class="text-center mt-2 ">
                    Not found data Asked a Question or Write a Post?
                </div>
                @if(auth()->user() && auth()->user()->id == $user->id)
                    <div class="text-center mt-2 ">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="{{ route('user-post.post.store') }}" data-socuce="{{ route('user-post.post.create') }}" data-method="post">
                            <i class="fa fa-plus"></i> Add New</button>

                    </div>
                @endif
            </x-card.card>
            {{-- End if not found any post or question crate one for button --}}
        </div>
    @endforelse

</div>


