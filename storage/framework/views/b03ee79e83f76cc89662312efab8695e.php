<?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['title' => 'View More Categories']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'View More Categories']); ?>
    <?php $__env->startComponent('components.frontend.ads', ['where'=>'sidebar_category_showup','class'=>'m-2']); ?><?php echo $__env->renderComponent(); ?>
    <?php
        $catgory_list_footer = category_head(30);
    ?>
    <div class="row">
        <?php $__currentLoopData = $catgory_list_footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" col-md-4 col-xl-12" >
                <div class="card mb-0 mb-2 ml-2 mr-2">
                    <div class="card-body p-2">
                        <a href="<?php echo e(route('category.index', $items->slug)); ?>" class=" text-black w-full d-flex " style="gap: 5px">
                            <div style="width:60px; height:40px;">
                                <img class="w-100 h-100 object-fit-cover lazy" data-src="<?php echo e(dynamic_asset($items->uploads_id)); ?>"/>
                            </div>
                            <div style="    width: calc(100% - 60px);">
                               <h6 class="mb-0" style=" font-weight:700">
                                   # <span style="color: #07cc9e;"><?php echo e(Str::title($items->name)); ?></span>
                                </h6>
                                <div class="line-climb-1">
                                    <?php echo e($items->description); ?>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8e99a24ae3b5393f9e2add850eaa9c5c)): ?>
<?php $attributes = $__attributesOriginal8e99a24ae3b5393f9e2add850eaa9c5c; ?>
<?php unset($__attributesOriginal8e99a24ae3b5393f9e2add850eaa9c5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e99a24ae3b5393f9e2add850eaa9c5c)): ?>
<?php $component = $__componentOriginal8e99a24ae3b5393f9e2add850eaa9c5c; ?>
<?php unset($__componentOriginal8e99a24ae3b5393f9e2add850eaa9c5c); ?>
<?php endif; ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/components/footer_category.blade.php ENDPATH**/ ?>