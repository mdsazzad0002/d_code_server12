<?php $__env->startSection('title', $find_subcategory->name); ?>
<?php $__env->startSection('short_description', $find_subcategory->description); ?>
<?php $__env->startSection('og_image', dynamic_asset($find_subcategory->uploads_id)); ?>
<?php $__env->startSection('keywords', $find_subcategory->keywords); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-8">
        <?php echo $__env->make('frontend.subcategory.partials.all_post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-xl-4">
        <div class="position_sticky_footer_side">
            <?php if (isset($component)) { $__componentOriginal73f463ef31b8dcbfc5c52b151a9065df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer_category','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer_category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df)): ?>
<?php $attributes = $__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df; ?>
<?php unset($__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f463ef31b8dcbfc5c52b151a9065df)): ?>
<?php $component = $__componentOriginal73f463ef31b8dcbfc5c52b151a9065df; ?>
<?php unset($__componentOriginal73f463ef31b8dcbfc5c52b151a9065df); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>




















<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/subcategory/index.blade.php ENDPATH**/ ?>