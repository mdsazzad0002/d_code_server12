<?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo Str::markdown($comment->comments); ?>

    <div class="mt-2">
        <div class="d-flex align-items-center btn-group">
            <button class="btn btn-outline-primary" onclick="vote('upvote',<?php echo e($comment->id); ?>, <?php echo e($comment->post_id); ?> )">
                <i class="fa fa-arrow-up" aria-hidden="true"> &nbsp;&nbsp;<span class="upvote<?php echo e($comment->id); ?>" ><?php echo e($comment->upvote); ?></span></i> &nbsp;&nbsp;&nbsp;Upvote
            </button>
            <button  class="btn btn-outline-secondary" onclick="vote('downvote', <?php echo e($comment->id); ?>, <?php echo e($comment->post_id); ?>)">
                <i class="fa fa-arrow-down" aria-hidden="true">&nbsp;&nbsp;<span class="downvote<?php echo e($comment->id); ?>"><?php echo e($comment->downvote); ?></span></i>&nbsp;&nbsp;&nbsp; Downvote
            </button>

            <button type="button" onclick="edit_data(this)" class="btn btn-primary form markdown"
                data-toggle="modal"
                data-target="#modal_setup"
                data-title="Edit Comment"
                data-action="<?php echo e(route('admin.post.comment_update', $comment->id)); ?>"
                data-socuce="<?php echo e(route('admin.post.comment_edit', $comment->id )); ?>"
                data-method="put"
                >
                <i class="fa fa-pencil-square-o"  aria-hidden="true"></i> Edit
                            </button>
        <button type="button" onclick="delete_items_js(this)" class="btn btn-danger delete"
        data-target="#modal_setup_delete"
        data-action="<?php echo e(route('admin.post.comment_destroy', $comment->id)); ?>"
            data-method="delete"
        >
            <i class="fa fa-trash"></i> Delete</button>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a3246743b024a30070683ed74d4e791)): ?>
<?php $attributes = $__attributesOriginal0a3246743b024a30070683ed74d4e791; ?>
<?php unset($__attributesOriginal0a3246743b024a30070683ed74d4e791); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a3246743b024a30070683ed74d4e791)): ?>
<?php $component = $__componentOriginal0a3246743b024a30070683ed74d4e791; ?>
<?php unset($__componentOriginal0a3246743b024a30070683ed74d4e791); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    No Found Any Commnets
<?php endif; ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/details/partials/comment_format_admin.blade.php ENDPATH**/ ?>