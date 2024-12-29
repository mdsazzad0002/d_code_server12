@php
if(isset($view_post)){

    $user_id_selected = $view_post->users->id  ?? 0;
}elseif($user){

    $user_id_selected =  $user->id ?? 0;

}
@endphp
@if(isset($view_post))

<div class="btn-group">
    <a class="btn btn-dark" href="javascript:void(0)" onclick="report_modal_data(this, {{ $view_post->id }})" data-title="{{ $view_post->tilte }}"  title="Report as Violation">
          <i class="fa fa-bug" aria-hidden="true"></i>
    </a>
    <div class="btn btn-dark disabled" title="Up vote">
        {{$view_post->like['upvote']}}  <i class="fa fa-thumbs-up" aria-hidden="true"></i>
    </div>
    <div class="btn btn-dark disabled" title="Down vote">
       {{$view_post->like['downvote']}}  <i class="fa fa-thumbs-down" aria-hidden="true"></i>
    </div>
    <div class="btn btn-dark disabled" title="Comments">
       {{$view_post->comment_count}} <i class="fa fa-comments" aria-hidden="true"></i>
    </div>
  </div>

  <div class="">
      <div class="btn-group">
          <button class="btn btn-primary" onclick="copy_to_clipboard(`{{ $view_post->tilte }}`, `{{ $view_post->short_details }}`, `{{ url('post/'.$view_post->slug) }}`)"><i class="fa fa-files-o" aria-hidden="true"></i> Copy</button>
          <button class="btn btn-secondary" onclick="share_window(`{{ $view_post->tilte }}`, `{{ $view_post->short_details }}`, `{{ url('post/'.$view_post->slug) }}`)"><i class="fa fa-share-square-o" aria-hidden="true"></i> Share</button>
      </div>
  </div>
@else

  <div class="mb-2">
      <div class="btn-group">
          <button class="btn btn-primary" onclick="copy_to_clipboard()"><i class="fa fa-files-o" aria-hidden="true"></i> Copy</button>
          <button class="btn btn-secondary" onclick="share_window()"><i class="fa fa-share-square-o" aria-hidden="true"></i> Share</button>
      </div>
  </div>


@endif






@if(auth()->user() && $user_id_selected)
<div class="">
    <div class="btn-group">
        <button class="btn @if(auth()->user()->subscriptions->contains($user_id_selected)) btn-danger @else btn-primary @endif" data-id="{{ $user_id_selected }}"  onclick="subscribe(this)">
                 <i class="fa fa-bell" aria-hidden="true"></i>
             @if(auth()->user()->subscriptions->contains( $user_id_selected))
                 <span>Subscribed</span>
             @else
                 <span>Subscribe</span>
             @endif
        </button>
    </div>
</div>
@endif



