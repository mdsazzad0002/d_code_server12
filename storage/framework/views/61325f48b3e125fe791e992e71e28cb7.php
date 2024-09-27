<?php echo Str::markdown($vote?->comment?->comments ?? ''); ?>


<hr>
<div class="mb-2 text-center">
        <div>
            Date: <?php echo e($vote->updated_at->format('d-m-Y h:i:s A')); ?>

        </div>
    </div>

<div class="btn-group d-flex align-items justify-content-center flex-wrap">

    <button class="btn btn-outline-primary <?php echo e($vote?->upvote == 1 ? 'active' : ''); ?>" onclick="vote('upvote', <?php echo e($vote->comment_id); ?>, <?php echo e($vote->post_id); ?> )">
        <i class="fa fa-arrow-up" aria-hidden="true"> &nbsp;&nbsp;<span class="upvote<?php echo e($vote->comment_id); ?>"><?php echo e($vote->comment->upvote); ?></span></i> &nbsp;&nbsp;&nbsp;Upvote
    </button>

    <button class="btn btn-outline-secondary <?php echo e($vote?->downvote == 1 ? 'active' : ''); ?>" onclick="vote('downvote', <?php echo e($vote->comment_id); ?>, <?php echo e($vote->post_id); ?>)">
        <i class="fa fa-arrow-down" aria-hidden="true">&nbsp;&nbsp;<span class="downvote<?php echo e($vote->comment_id); ?>"><?php echo e($vote->comment->downvote); ?></span></i>&nbsp;&nbsp;&nbsp; Downvote
    </button>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/vote/partials/vote_action.blade.php ENDPATH**/ ?>