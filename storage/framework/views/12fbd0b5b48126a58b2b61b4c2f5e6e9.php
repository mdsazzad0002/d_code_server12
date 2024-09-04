

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
    


  <?php echo $__env->make('profile.layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/layouts/footer.blade.php ENDPATH**/ ?>