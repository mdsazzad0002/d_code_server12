<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<?php if (isset($component)) { $__componentOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card_link','data' => ['title' => 'Questions : '.e($post?->tilte).'','tag' => 'a','class' => 'h4','href' => ''.e(route('post.single',$post->slug )).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card_link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Questions : '.e($post?->tilte).'','tag' => 'a','class' => 'h4','href' => ''.e(route('post.single',$post->slug )).'']); ?>



    <!-- Split dropup button -->
    <?php echo $__env->make('profile.post.partials.post_action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <style>
        .dropdown-menu.dropdown-menu-right.show {
            transform: translate3d(-20px, 38px, 0px) !important;
        }

    </style>

   <p> <?php echo e($post->short_details); ?></p>


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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['class' => 'pb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'pb-2']); ?>
    <div class="text-center mt-2 ">
        Not found data Asked a Question or Write a Post?
    </div>
    <?php if(auth()->user() && auth()->user()->id == $user->id): ?>
        <div class="text-center mt-2 ">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="<?php echo e(route('user-post.post.store')); ?>" data-socuce="<?php echo e(route('user-post.post.create')); ?>" data-method="post">
                <i class="fa fa-plus"></i> Add New</button>

        </div>
    <?php endif; ?>

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
<?php if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
<?php echo e($posts->links()); ?>

<?php endif; ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/post/partials/post.blade.php ENDPATH**/ ?>