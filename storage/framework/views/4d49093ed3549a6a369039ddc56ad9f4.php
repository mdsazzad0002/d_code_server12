<img class="w-100 lazy feed_image" data-src="<?php echo e(dynamic_asset($view_post->uploads_id)); ?>" alt="<?php echo e($view_post->tilte); ?>">
<div class="my-2">
    <a class="tag_data" href="<?php echo e(route('subcategory_by_id.index', [$view_post->subcategory->id, $view_post->subcategory->slug])); ?>"><i class="fa-solid fa-tags"></i> <?php echo e($view_post->subcategory->name ?? ''); ?></a>
    <a class="tag_data" href="<?php echo e(route('category.index', [@$view_post->category->slug])); ?>"><i class="fa-solid fa-tags"></i> <?php echo e($view_post->category->name ?? ''); ?></a>
</div>
<div class="line-climb-3">
    <?php echo e($view_post->short_details); ?>

</div>


<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/details/partials/post_short_info.blade.php ENDPATH**/ ?>