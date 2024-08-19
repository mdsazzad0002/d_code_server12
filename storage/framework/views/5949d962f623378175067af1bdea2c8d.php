<?php $__env->startSection('sidebar'); ?>
<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="nav-item" role="menuitem">
    <a href="<?php echo e(route('category.index', $items->slug)); ?>" class="nav-link">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
            <?php echo e(Str::title($items->name)); ?>

        </p>
    </a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php
$i = 1;
$ads_after_data = general_setting('post_center_showup_after') ?? 100;
$ads_enabled = general_setting('system_showup');
?>
<div class="row">
    <div class="col-xl-8">


    <?php $__empty_1 = true; $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <?php
    $i++;
    ?>

    <?php if( $ads_enabled == 'on'): ?>
    <?php if($i% $ads_after_data== 0): ?>
    <div class="">
        <?php $__env->startComponent('components.frontend.ads', ['where'=>'home_showup']); ?><?php echo $__env->renderComponent(); ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>


    <div class="">
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
            <div class=" px-3 py-2"  style="background:#282828">
                <div class="d-flex align-items-center justify-content-between">
                <h4 class="font-weight-bold mb-0"># <span class="text-success"><?php echo e(Str::title($items->name)); ?></span> </h4>
                    <a href="<?php echo e(route('category.index', $items->slug)); ?>" class="text-white font-italic">
                        <?php echo e($items->subcategory_items); ?> Subcategories
                    </a>
                </div>
            </div>
            <div class=" px-3 py-2">

                <img class="w-100" src="<?php echo e(dynamic_asset($items->uploads_id)); ?>" alt="<?php echo e($items->name); ?>">
                 <div class="line-climb-3">
                    <?php echo e($items->description); ?>

                </div>
                <div class="text-center">

                    <a class="btn btn-sm ml-auto btn-primary btn-block p-2 px-4 mt-2 progress-bar progress-bar-striped" href="<?php echo e(route('category.index', $items->slug)); ?>">See Example</a>
                </div>
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
    </div>




    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="">
        <?php if (isset($component)) { $__componentOriginal1f96fb3596d227ecff59c67847128565 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f96fb3596d227ecff59c67847128565 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.404','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('404'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f96fb3596d227ecff59c67847128565)): ?>
<?php $attributes = $__attributesOriginal1f96fb3596d227ecff59c67847128565; ?>
<?php unset($__attributesOriginal1f96fb3596d227ecff59c67847128565); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f96fb3596d227ecff59c67847128565)): ?>
<?php $component = $__componentOriginal1f96fb3596d227ecff59c67847128565; ?>
<?php unset($__componentOriginal1f96fb3596d227ecff59c67847128565); ?>
<?php endif; ?>
    </div>
    <?php endif; ?>
    <?php echo e($category->links()); ?>

</div>
<div class="col-xl-4">
    <div class="position_sticky_footer_side">
        <?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['title' => 'Recent Jobs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recent Jobs']); ?>

            <?php
               $job_post = jobPost(null, 15);
            ?>
            <?php echo $__env->make('frontend.job.partials.job_post_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    </div>
</div>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/home/partials/dashboard_home.blade.php ENDPATH**/ ?>