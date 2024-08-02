<!doctype html>
<html class="no-js" lang="en">

<head>
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(Str::title(general_setting('site_title'))); ?> </title>

   <?php echo $__env->make('backend.layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <?php echo $__env->make('backend.layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
      <?php echo $__env->make('backend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
        <?php echo $__env->make('backend.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- header area end -->

            <!-- page title area end -->
            <div class="main-content-inner pt-3">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <?php if (isset($component)) { $__componentOriginal467ce3b845277c232d6d3b67d8247894 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal467ce3b845277c232d6d3b67d8247894 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.modal_view','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.modal_view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal467ce3b845277c232d6d3b67d8247894)): ?>
<?php $attributes = $__attributesOriginal467ce3b845277c232d6d3b67d8247894; ?>
<?php unset($__attributesOriginal467ce3b845277c232d6d3b67d8247894); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal467ce3b845277c232d6d3b67d8247894)): ?>
<?php $component = $__componentOriginal467ce3b845277c232d6d3b67d8247894; ?>
<?php unset($__componentOriginal467ce3b845277c232d6d3b67d8247894); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal9f64f32e90b9102968f2bc548315018c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f64f32e90b9102968f2bc548315018c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $attributes = $__attributesOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__attributesOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f64f32e90b9102968f2bc548315018c)): ?>
<?php $component = $__componentOriginal9f64f32e90b9102968f2bc548315018c; ?>
<?php unset($__componentOriginal9f64f32e90b9102968f2bc548315018c); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginald0a16690dc32f1d6bcddc6f521031471 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0a16690dc32f1d6bcddc6f521031471 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.backend.modal_delete','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.modal_delete'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0a16690dc32f1d6bcddc6f521031471)): ?>
<?php $attributes = $__attributesOriginald0a16690dc32f1d6bcddc6f521031471; ?>
<?php unset($__attributesOriginald0a16690dc32f1d6bcddc6f521031471); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0a16690dc32f1d6bcddc6f521031471)): ?>
<?php $component = $__componentOriginald0a16690dc32f1d6bcddc6f521031471; ?>
<?php unset($__componentOriginald0a16690dc32f1d6bcddc6f521031471); ?>
<?php endif; ?>

       <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <?php echo $__env->make('backend.layouts.offset_area', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- offset area end -->
    <!-- jquery latest version -->

    <?php echo $__env->make('backend.layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.tostar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tostar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48)): ?>
<?php $attributes = $__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48; ?>
<?php unset($__attributesOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48)): ?>
<?php $component = $__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48; ?>
<?php unset($__componentOriginal1f17ef97c29e3e5e8a2c2b1c2d3d7a48); ?>
<?php endif; ?>
</body>

</html>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/backend/layouts/master.blade.php ENDPATH**/ ?>