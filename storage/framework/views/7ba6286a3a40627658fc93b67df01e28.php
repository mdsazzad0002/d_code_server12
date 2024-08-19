<?php echo $__env->make('frontend.summary.summery_view', ['view_post'=>$comment], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo Str::markdown($comment->comments); ?>


<?php if($comment?->vote != null): ?>
    <?php
        $vote_type_vote_upvote = $comment?->vote?->upvote;
        $vote_type_vote_downvote = $comment?->vote?->downvote;
    ?>
<?php else: ?>
    <?php
         $vote_type_vote_upvote = vote_cookie($comment->id) == 'upvote' ? 1 : 0;
         $vote_type_vote_downvote = vote_cookie($comment->id)  == 'downvote' ? 1 : 0;
    ?>
<?php endif; ?>

<div class="mt-2">
    <div class="d-flex align-items-center btn-group">
        <button class="btn btn-outline-primary <?php echo e($vote_type_vote_upvote == 1 ? 'active' : ''); ?>" onclick="vote('upvote', <?php echo e($comment->id); ?>, <?php echo e($comment->post_id); ?> )">
            <i class="fa fa-arrow-up" aria-hidden="true"> &nbsp;&nbsp;<span class="upvote<?php echo e($comment->id); ?>"><?php echo e($comment->upvote); ?></span></i> &nbsp;&nbsp;&nbsp;Upvote
        </button>
        <button class="btn btn-outline-secondary <?php echo e($vote_type_vote_downvote == 1  ? 'active' : ''); ?>" onclick="vote('downvote', <?php echo e($comment->id); ?>, <?php echo e($comment->post_id); ?>)">
            <i class="fa fa-arrow-down" aria-hidden="true">&nbsp;&nbsp;<span class="downvote<?php echo e($comment->id); ?>"><?php echo e($comment->downvote); ?></span></i>&nbsp;&nbsp;&nbsp; Downvote
        </button>
    </div>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/comment/helper/comment.blade.php ENDPATH**/ ?>