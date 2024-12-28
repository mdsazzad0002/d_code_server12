<?php echo Str::markdown($comment->comments); ?>




<div class=" ">
    <div class="mb-2">
        <div>
            <div class="text-secondary"> 🕒 <?php echo e($comment->updated_at->format('d-m-Y h:i:s A')); ?> (<?php echo e($comment->updated_at->diffForHumans()); ?>)</div>
        </div>
    </div>
    <div class="d-flex flex-wrap  btn-group">
        <button class="btn btn-outline-primary <?php echo e($comment?->vote?->upvote == 1 ? 'active' : ''); ?>" onclick="vote('upvote', <?php echo e($comment->id); ?>, <?php echo e($comment->post_id); ?> )">
            <i class="fa fa-arrow-up" aria-hidden="true"> &nbsp;&nbsp;<span class="upvote<?php echo e($comment->id); ?>" ><?php echo e($comment->upvote); ?></span></i>Upvote
        </button>
        <button  class="btn btn-outline-secondary <?php echo e($comment?->vote?->downvote == 1 ? 'active' : ''); ?>" onclick="vote('downvote', <?php echo e($comment->id); ?>, <?php echo e($comment->post_id); ?>)">
            <i class="fa fa-arrow-down" aria-hidden="true">&nbsp;&nbsp;<span class="downvote<?php echo e($comment->id); ?>"><?php echo e($comment->downvote); ?></span></i>Downvote
        </button>
        <?php if(auth()->user() && auth()->user()->id == $comment->user_id): ?>
             <button  class="btn btn-outline-danger delete"   data-target="#modal_setup_delete"
                 data-action="<?php echo e(route('users.comment.delete', $comment->id)); ?>" data-method="delete">
                <i class="fa fa-trash" aria-hidden="true"></i>Delete
            </button>
        <?php endif; ?>
</div>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/comment/partials/vote_action.blade.php ENDPATH**/ ?>