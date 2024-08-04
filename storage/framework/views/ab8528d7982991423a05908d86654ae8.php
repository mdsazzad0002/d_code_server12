<?php $__env->startSection('sidebar'); ?>
    <?php $__currentLoopData = $post_list_menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="nav-item">
        <a href="<?php echo e(route('post.index',[$category, $subcategory, $post_items->slug])); ?>" class="nav-link
            <?php if($post_items->slug == $view_post->slug): ?>
                active
            <?php endif; ?>
            ">
            <i class="nav-icon fas fa-code"></i>
        <p>
        <?php echo e(Str::title($post_items->tilte)); ?>

        </p>
        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<div class="post_details_extra_deasign">

<?php if($view_post): ?>


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


    <?php echo $__env->make('frontend.summary.summery_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row flex-column flex-md-row">

        <div class="col-md-12">
            <?php echo $__env->make('frontend.details.partials.post_short_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="my-3">
                <?php echo Str::markdown($view_post->details); ?>

            </div>
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
<?php else: ?>
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

<div class="comment_list_current_post"></div>
<div class="comment_data"></div>

</div>

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
    <h3 class="d-flex flex-wrap align-items-end">Write a Associte Comment <div class="text-warning mb-1 ml-2 h6">Markdown Editor</div></h3>
    <form action="" id="post_details_editor">
        <?php echo csrf_field(); ?>
        <input type="number" name="post_id" value="<?php echo e($view_post->id); ?>" hidden>
        <textarea name="details" Placeholder="Details" id="details_comment" class="form-control mb-2"  cols="30" rows="10"></textarea>
        <button type="submit" class="float-right btn btn-primary"><i class="fas fa-comment"></i> Comment Submit</button>
    </form>
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







<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/details/partials/view.blade.php ENDPATH**/ ?>