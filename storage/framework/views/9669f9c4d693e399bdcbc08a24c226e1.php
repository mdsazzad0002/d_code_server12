<script src="<?php echo e(static_asset('backend/')); ?>/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="<?php echo e(static_asset('backend/')); ?>/js/popper.min.js"></script>
<script src="<?php echo e(static_asset('backend/')); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo e(static_asset('backend/')); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo e(static_asset('backend/')); ?>/js/metisMenu.min.js"></script>
<script src="<?php echo e(static_asset('backend/')); ?>/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo e(static_asset('backend/')); ?>/js/jquery.slicknav.min.js"></script>

<script src="<?php echo e(static_asset('plugins/')); ?>/select2/js/select2.full.min.js"></script>
<script src="<?php echo e(static_asset('plugins/')); ?>/sweetalert2/sweetalert2.all.min.js"></script>

<script src="<?php echo e(static_asset('plugins/')); ?>/prism/prism.js"></script>
<!-- Start datatable js -->
<script src="<?php echo e(static_asset('plugins/')); ?>/datatables/jquery.dataTables.js"></script>
<script src="<?php echo e(static_asset('plugins/')); ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo e(static_asset('plugins/')); ?>/datatables/dataTables.bootstrap4.min.js"></script>

<!-- others plugins -->
<script src="<?php echo e(static_asset('backend/')); ?>/js/plugins.js"></script>
<script src="<?php echo e(static_asset('backend/')); ?>/js/scripts.js"></script>

<?php if (isset($component)) { $__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.ajax_data_modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ajax_data_modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e)): ?>
<?php $attributes = $__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e; ?>
<?php unset($__attributesOriginaldcb4a6ef2e26d6e2b94d02d824838c5e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e)): ?>
<?php $component = $__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e; ?>
<?php unset($__componentOriginaldcb4a6ef2e26d6e2b94d02d824838c5e); ?>
<?php endif; ?>
<?php echo $__env->make('common.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>

<?php if(session()->has('message')): ?>
<div class="alert alert-success">
    <?php echo e(session('message')); ?>

</div>
<?php endif; ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/backend/layouts/js.blade.php ENDPATH**/ ?>