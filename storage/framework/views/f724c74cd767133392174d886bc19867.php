<?php $__env->startSection('title', 'Settings'); ?>

<?php $__env->startSection('content'); ?>
    <?php if($category == 1): ?>
        <?php echo $__env->make('backend.system-setting.partials.system_setting_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <?php elseif($category == 2): ?>
        <?php echo $__env->make('backend.system-setting.partials.system_payment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <?php elseif($category == 3): ?>
        <?php echo $__env->make('backend.system-setting.partials.ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hossain/docde/d_code_server12/resources/views/backend/system-setting/index.blade.php ENDPATH**/ ?>