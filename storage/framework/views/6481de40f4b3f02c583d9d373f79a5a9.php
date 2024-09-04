
<?php $__env->startSection('title',"Vote"); ?>
<?php $__env->startSection('short_description', 'Your Vote Contribution'); ?>
<?php $__env->startSection('og_image', dynamic_asset($user->uploads_id)); ?>
<?php $__env->startSection('keywords', $user->keywords); ?>

<?php $__env->startSection('content'); ?>
<div id="paginated_content">
    <?php echo $__env->make('profile.vote.partials.vote', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>

</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('profile.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/vote/index.blade.php ENDPATH**/ ?>