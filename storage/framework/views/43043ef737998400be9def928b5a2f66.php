<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-lg-12">

            <?php if (isset($component)) { $__componentOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card_link','data' => ['title' => '# '.e($post?->tilte).'','tag' => 'a','class' => 'h4','href' => ''.e(route('post.single',$post->slug )).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card_link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => '# '.e($post?->tilte).'','tag' => 'a','class' => 'h4','href' => ''.e(route('post.single',$post->slug )).'']); ?>
                <!-- Split dropup button -->
                <?php echo $__env->make('profile.post.partials.post_action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <style>
                    .dropdown-menu.dropdown-menu-right.show {
                        transform: translate3d(-20px, 38px, 0px) !important;
                    }

                </style>

            <p> <?php echo e($post->short_details); ?></p>
            <p class="text-secondary">🕒 <?php echo e($post->updated_at->format('d M Y h:i:s A')); ?> (<?php echo e($post->updated_at->diffForHumans()); ?>)</p>

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
        <div class="col-lg-12">
            
            <?php if (isset($component)) { $__componentOriginal42d934a7d1fb95b9706d4d8ab536daec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal42d934a7d1fb95b9706d4d8ab536daec = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card','data' => ['class' => 'pb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card'); ?>
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


<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/post/partials/post.blade.php ENDPATH**/ ?>