<?php $__empty_1 = true; $__currentLoopData = $votes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vote): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

<?php if (isset($component)) { $__componentOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card_link','data' => ['title' => 'Title : '.e($vote?->post?->tilte).'','tag' => 'a','class' => 'h4','href' => ''.e(route('post.single',$vote?->post->slug )).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card_link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Title : '.e($vote?->post?->tilte).'','tag' => 'a','class' => 'h4','href' => ''.e(route('post.single',$vote?->post->slug )).'']); ?>

         
         <?php echo $__env->make('profile.vote.partials.vote_action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f)): ?>
<?php $attributes = $__attributesOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f; ?>
<?php unset($__attributesOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f)): ?>
<?php $component = $__componentOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f; ?>
<?php unset($__componentOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f); ?>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
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
    <div class="text-center mt-2">
        No Vote Found.
        <br>
        <hr>
        <a class="btn btn-primary" href="<?php echo e(route('home')); ?>"><i class="bi bi-box-arrow-up-right"></i>&nbsp;Visit Post</a>
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
<?php endif; ?>

<?php echo e($votes->links()); ?>


<?php echo $__env->make('common.paginated_ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/profile/vote/partials/vote.blade.php ENDPATH**/ ?>