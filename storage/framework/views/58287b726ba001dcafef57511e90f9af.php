

<?php $__env->startSection('title', Str::title($category->name)); ?>
<?php $__env->startSection('short_description', $category->description); ?>
<?php $__env->startSection('og_image', dynamic_asset($category->uploads_id)); ?>
<?php $__env->startSection('keywords', $category->keywords); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('frontend.category.partials.subcategory_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>



















<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/category/index.blade.php ENDPATH**/ ?>