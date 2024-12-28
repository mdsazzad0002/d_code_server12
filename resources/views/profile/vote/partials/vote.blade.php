@forelse ($votes as $vote)

<x-card.card_link title="Title : {{ $vote?->post?->tilte }}" tag="a" class="h4" href="{{ route('post.single',$vote?->post->slug ) }}">

         {{--  profile comment action  --}}
         @include('profile.vote.partials.vote_action')
         {{--  end profile comment action  --}}

</x-card.card_link>

@empty
<x-card.card_link>
    <div class="text-center mt-2 mb-2">
        No Vote Found.
        <br>
        <hr>
        <a class="btn btn-primary" href="{{ route('home') }}"><i class="bi bi-box-arrow-up-right"></i>&nbsp;Visit Post</a>
    </div>
</x-card.card_link>
@endforelse

{{ $votes->links() }}

@include('common.paginated_ajax')

