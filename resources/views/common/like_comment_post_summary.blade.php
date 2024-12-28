
<div class="">
    <a class="tag_data" href="{{ route('subcategory_by_id.index', [$view_post->subcategory->id, $view_post->subcategory->slug]) }}"><i class="fa-solid fa-tags"></i> {{$view_post->subcategory->name ?? '' }}</a>
    <a class="tag_data" href="{{ route('category.index', [@$view_post->category->slug]) }}"><i class="fa-solid fa-tags"></i> {{$view_post->category->name ?? '' }}</a>
</div>

<div class="btn-group">
    <div class="btn btn-dark disabled">
        {{$view_post->like['upvote']}}  <i class="fa fa-thumbs-up" aria-hidden="true"></i>
    </div>
    <div class="btn btn-dark disabled">
       {{$view_post->like['downvote']}}  <i class="fa fa-thumbs-down" aria-hidden="true"></i>
    </div>
    <div class="btn btn-dark disabled">
       {{$view_post->comment_count}} <i class="fa fa-comments" aria-hidden="true"></i>
    </div>
  </div>
