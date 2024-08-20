<div class="btn-group float-right ml-2 mb-1">
    <button type="button" class="btn btn-secondary view lg_view" data-toggle="modal" data-target="#modal_setup_view" data-title="View" data-socuce="<?php echo e(route('user-job-post.job-post.show', $post->id )); ?>" data-method="get">
        <i class="fa fa-eye" aria-hidden="true"></i> View
    </button>

    <?php if(auth()->user() && auth()->user()->id == $post->creatorId): ?>
    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
    </button>

    <div class="dropdown-menu dropdown-menu-right bg-dark">
        <button type="button" class="dropdown-item form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Job Post Edit" data-action="<?php echo e(route('user-job-post.job-post.update', $post->id)); ?>" data-socuce="<?php echo e(route('user-job-post.job-post.edit', $post->id )); ?>" data-method="put">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>

        

        <button type="button" class="dropdown-item view lg_view" data-toggle="modal" data-target="#modal_setup_view" data-title="Applied List - <?php echo e($post->title); ?>" data-socuce="<?php echo e(route('users.job-post.list', $post->id )); ?>" data-method="get">
            <i class="fas fa-comment" aria-hidden="true"></i> Applyed List</button>


        <button type="button" class="dropdown-item bg-danger text-light delete"
                data-target="#modal_setup_delete"
                data-action="<?php echo e(route('users.job-post.delete', [auth()->user()->id, $post->id])); ?>"
                data-method="delete"
        >
        <i class="fa fa-trash"></i> Delete</button>
    </div>
    <?php endif; ?>

</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/profile/job-post/partials/job_post_action.blade.php ENDPATH**/ ?>