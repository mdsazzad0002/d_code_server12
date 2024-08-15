<h3 class="mb-2"><?php echo e(Str::title($post->tilte)); ?></h3>
<img src="<?php echo e(dynamic_asset($post->uploads_id)); ?>" class="w-100" alt="">
</br>
<p><?php echo e($post->short_details); ?></p>

<?php echo Str::markdown($post->details); ?>



<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/backend/post/partials/view.blade.php ENDPATH**/ ?>