<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-lg-6">
            <?php if (isset($component)) { $__componentOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01ae14b671bdc8cd9fd9d4dcc05ba0f5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card.card_link','data' => ['title' => 'Job Title : '.e($post?->title).'','tag' => 'a','class' => 'h4','href' => ''.e(route('job.index',$post->slug )).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card.card_link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Job Title : '.e($post?->title).'','tag' => 'a','class' => 'h4','href' => ''.e(route('job.index',$post->slug )).'']); ?>
                <!-- Split dropup button -->
                <?php echo $__env->make('profile.job-post.partials.job_post_action', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <style>
                    .dropdown-menu.dropdown-menu-right.show {
                        transform: translate3d(-20px, 38px, 0px) !important;
                    }

                </style>
            <p> <?php echo e($post->short_details); ?></p>
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
            <div class="text-center mt-2 ">
                Not found data Asked a Question or Write a Post?
            </div>

            <?php if(auth()->user() && auth()->user()->id == $user->id): ?>
                <div class="text-center my-2 ">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Job Post Create" data-action="<?php echo e(route('user-job-post.job-post.store')); ?>" data-socuce="<?php echo e(route('user-job-post.job-post.create')); ?>" data-method="post">
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
    </div>

    <?php endif; ?>
    
    <div class="col-lg-6">
        <?php echo e($posts->links()); ?>

    </div>
</div>





<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/job-post/partials/job-post.blade.php ENDPATH**/ ?>