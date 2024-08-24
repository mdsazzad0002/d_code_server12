<?php $__env->startSection('title', Str::title($job_details->title)); ?>
<?php $__env->startSection('short_description', $job_details->short_details); ?>
<?php $__env->startSection('og_image', dynamic_asset($job_details->uploads_id)); ?>
<?php $__env->startSection('keywords', $job_details->keywords); ?>


<?php $__env->startSection('content'); ?>
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
     $job_items = $view_post = $job_details;
?>

<div class="row">
    <div class="col-xl-8">

        <?php echo $__env->make('frontend.job.partials.job_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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




<?php $__env->startPush('scripts'); ?>


<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(static_asset('plugins/')); ?>/markdown/simplemde.min.css"/>
<style>
    #post_details_editor:has(>.editor-toolbar.fullscreen){
        position: relative;
        z-index: 99999;
    }

    .editor-toolbar a{
        color: #fff !important;
    }
    .editor-toolbar a.active, .editor-toolbar a:hover{
        background: transparent !important;
    }
    .editor-toolbar.fullscreen{
        background: #616161;

    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/job/index.blade.php ENDPATH**/ ?>