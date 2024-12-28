<?php $__env->startSection('sidebar'); ?>
<?php $__currentLoopData = $sub_category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="nav-item" role="menuitem">
    <a href="<?php echo e(route('subcategory.index',  [$category, $items->slug])); ?>" class="nav-link
                <?php if($items->slug == $find_subcategory->slug): ?>
                    active
                <?php endif; ?>
                ">
        <i class="nav-icon fas fa-code"></i>
        <p>
            <?php echo e(Str::title($items->name)); ?>

        </p>
    </a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php
$i =0 ;
?>
<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<?php
$i++;
$post_after = general_setting('post_center_showup_after') ?? 100;
?>
<?php if( $post_after && $i % $post_after == 0): ?>
<?php $__env->startComponent('components.frontend.ads', ['where'=>'post_showup']); ?><?php echo $__env->renderComponent(); ?>
<?php endif; ?>
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
    <div class=" px-3 py-2" style="background:#282828">
      <div>
            <h4 class="font-weight-bold mb-0"># <span class="text-success"> <?php echo e(Str::title($items->tilte)); ?></span></h4>
        </div>
    </div>
    <div class=" px-3 py-2">
    <img class="w-100 lazy" data-src="<?php echo e(dynamic_asset($items->uploads_id)); ?>" alt="<?php echo e($items->tilte); ?>">

        <div class="">
            <div class="mt-2">
                ⨀ <?php echo e($items->updated_at->format('d-M-Y h:s:i A')); ?> <span class="text-success">( <?php echo e($items->updated_at->diffForHumans()); ?> )</span>
            </div>
            <div>
                <div class="line-climb-3">
                    <?php echo e($items->short_details); ?>

                </div>
            </div>
            <a class="btn btn-primary progress-bar progress-bar-striped btn-block p-2 px-4 mt-2" href="<?php echo e(route('post.index',[$category ,$subcategory, $items->slug])); ?>">Details View</a>
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


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
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
<?php endif; ?>

<?php echo e($posts->links()); ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/subcategory/partials/all_post.blade.php ENDPATH**/ ?>