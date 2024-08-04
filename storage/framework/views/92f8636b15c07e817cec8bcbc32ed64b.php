<?php if(count($banner) != 0): ?>
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
<div class="owl-carousel owl-theme">
    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($items->url); ?>">
            <img class="owl-lazy" data-src="<?php echo e(dynamic_asset($items->uploads_id)); ?>" data-src-retina="<?php echo e(dynamic_asset($items->id)); ?>" alt="">
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php endif; ?>


<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('plugins/owlcarousel/assets/owl.carousel.css')); ?>?v=<?php echo e($asset_version); ?>"/>
<?php $__env->stopPush(); ?>



<?php $__env->startPush('scripts'); ?>
  <script src="<?php echo e(static_asset('plugins/owlcarousel/owl.carousel.min.js')); ?>?v=<?php echo e($asset_version); ?>"></script>
  <script>
   $('.owl-carousel').owlCarousel({
        items:1,
        lazyLoad:true,
        loop:true,
        margin:10,
        autoplay:true,
        dots:false
    });
  </script>
<?php $__env->stopPush(); ?>


<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/home/partials/hero.blade.php ENDPATH**/ ?>