<?php if($view_post->uploads_id != 0): ?>
    <img class="w-100 lazy feed_image" data-src="<?php echo e(dynamic_asset($view_post->uploads_id)); ?>" alt="<?php echo e($view_post->tilte); ?>">
<?php endif; ?>

<div class="line-climb-3 text-white">
    <?php echo e($view_post->short_details); ?>

</div>


<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/details/partials/post_short_info.blade.php ENDPATH**/ ?>