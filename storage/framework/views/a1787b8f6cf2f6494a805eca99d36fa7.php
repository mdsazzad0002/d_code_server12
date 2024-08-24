<link rel="stylesheet" href="<?php echo e(static_asset('plugins/')); ?>/toastr/toastr.min.css">
<script src="<?php echo e(static_asset('plugins/')); ?>/toastr/toastr.min.js"></script>
<script>
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
</script>
<?php if(session('error')): ?>
    <script>
        toastr["error"](`<?php echo e(session('error')); ?>`)
    </script>
<?php elseif(session('success')): ?>
    <script>
        toastr["success"](`<?php echo e(session('success')); ?>`)
    </script>
<?php elseif(session('info')): ?>
    <script>
        toastr["info"](`<?php echo e(session('info')); ?>`)
    </script>
<?php elseif(session('warning')): ?>
    <script>
        toastr["warning"](`<?php echo e(session('info')); ?>`)
    </script>
<?php endif; ?>


<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script>
        toastr["error"](`<?php echo e($error); ?>`)
    </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/components/tostar.blade.php ENDPATH**/ ?>