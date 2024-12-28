<div class="row">

@forelse ($comments as $comment)
    <div class="col-xl-12">
        <x-card.card_link title="# {{ $comment?->post->tilte }}" tag="a" class="h4 mb-3" href="{{ route('post.single',$comment?->post->slug ) }}">

            {{--  profile comment action  --}}
                @include('profile.comment.partials.vote_action')
            {{--  end profile comment action  --}}

        </x-card.card_li>
    </div>
@empty
<div class="col-xl-12">
    <x-card.card>
        <div class="text-center mt-2">
            No Comment Found.
            <br>
            <hr>
            <a class="btn btn-primary" href="{{ route('home') }}">Visit Post</a>
        </div>
    </x-card.card>
</div>
@endforelse

</div>
{{ $comments->links() }}

@include('common.paginated_ajax')

