<div class="row">

<?php $__empty_1 = true; $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-xl-6">
        <?php if (isset($component)) { $__componentOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card_link','data' => ['title' => '# '.e($comment?->post->tilte).'','tag' => 'a','class' => 'h4 mb-3','href' => ''.e(route('post.single',$comment?->post->slug )).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card_link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '# '.e($comment?->post->tilte).'','tag' => 'a','class' => 'h4 mb-3','href' => ''.e(route('post.single',$comment?->post->slug )).'']); ?>

            
                <?php echo $__env->make('profile.comment.partials.vote_action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5)): ?>
<?php $attributes = $__attributesOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5; ?>
<?php unset($__attributesOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5)): ?>
<?php $component = $__componentOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5; ?>
<?php unset($__componentOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5); ?>
<?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div class="col-xl-12">
    <?php if (isset($component)) { $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="text-center mt-2">
            No Comment Found.
            <br>
            <hr>
            <a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Visit Post</a>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec)): ?>
<?php $attributes = $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec; ?>
<?php unset($__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal42d934a7d1fb95b9706d4d8ab536daec)): ?>
<?php $component = $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec; ?>
<?php unset($__componentOriginal42d934a7d1fb95b9706d4d8ab536daec); ?>
<?php endif; ?>
</div>
<?php endif; ?>

</div>
<?php echo e($comments->links()); ?>


<?php echo $__env->make('common.paginated_ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/comment/partials/comment.blade.php ENDPATH**/ ?>