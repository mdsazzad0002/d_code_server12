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
    <div class="mb-1 mt-0">Top Contributor</div>
<div class=" overflow-auto">
    <?php $__currentLoopData = $contribute_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('users.index', $contribute->username)); ?>" style=" display:inline-block">
        <img class="w-100 h-100 lazy" style="object-fit: cover" data-src="<?php echo e($contribute->upload_file); ?>" alt="">
        <div class="holder_name" style="border-radius: 4px;">
            <?php echo e(Str::limit($contribute->name, 9, '...')); ?>

        </div>
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
<style>
    .overflow-auto{
        overflow: auto;
        white-space: nowrap;
    }
    .overflow-auto a{
        margin-right: 8px;
        height: 100px;
        width: 80px;
        position: relative;

    }
    .overflow-auto a img{
        border-radius: 5px;
        background-position: center center;
    }
    .overflow-auto a .holder_name{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        overflow: hidden;
        background: gray;
        color: white;
        padding: 2px 5px;
        padding: 2px 5px;
    font-size: 15px;
    }
</style>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/feed/partials/today_top_contribute.blade.php ENDPATH**/ ?>