<div class="content-wrapper">


    <?php echo $__env->make('frontend.layouts.partials.header_ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <?php if (isset($component)) { $__componentOriginaldaf15417e137fe57d739499a1565a4f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldaf15417e137fe57d739499a1565a4f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.search_modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.search_modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldaf15417e137fe57d739499a1565a4f1)): ?>
<?php $attributes = $__attributesOriginaldaf15417e137fe57d739499a1565a4f1; ?>
<?php unset($__attributesOriginaldaf15417e137fe57d739499a1565a4f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaf15417e137fe57d739499a1565a4f1)): ?>
<?php $component = $__componentOriginaldaf15417e137fe57d739499a1565a4f1; ?>
<?php unset($__componentOriginaldaf15417e137fe57d739499a1565a4f1); ?>
<?php endif; ?>
          <?php echo $__env->make('frontend.layouts.partials.frontend_title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          <?php echo $__env->yieldContent('content'); ?>

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

   <?php echo $__env->make('frontend.layouts.partials.footer_ads', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- /.content-header -->
  </div>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/layouts/content_wrap.blade.php ENDPATH**/ ?>