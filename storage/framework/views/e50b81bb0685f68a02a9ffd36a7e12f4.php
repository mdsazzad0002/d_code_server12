<div class="p-1"></div>
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

    <div class="d-flex align-items-center justify-content-center gap-3">
        <div class="overflow-hidden" style="width:80px; height:80px; ">
            <?php if(auth()->user()): ?>
            <img class="rounded-circle   w-100 h-100 lazy" style="object-fit: cover" data-src="<?php echo e(dynamic_asset(auth()->user()->upload_id)); ?>" alt=""></div>
        <?php else: ?>
        <img class="rounded-circle  w-100 h-100 lazy" style="object-fit: cover" data-src="<?php echo e(dynamic_asset(0)); ?>" alt="Profile Image">
    </div>
    <?php endif; ?>
    <div style="width: calc(100% - 80px);    ">
        <button type="button" class="btn btn-primary form markdown" style="    width: 100%;border-radius: 42px;padding: 0;" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="<?php echo e(route('user-post.post.store')); ?>" data-socuce="<?php echo e(route('user-post.post.create')); ?>" data-method="post">
            <input class="form-control" style=" padding: 33px;
    border-radius: 41px;" type="text" placeholder="Write your mind?">
        </button>

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

<style>
    .gap-3 {
        gap: 15px;
    }

</style>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/feed/create.blade.php ENDPATH**/ ?>