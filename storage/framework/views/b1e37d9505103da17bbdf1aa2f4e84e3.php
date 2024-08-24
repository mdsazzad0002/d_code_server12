<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<?php if (isset($component)) { $__componentOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf2ded9ebba3fee2ebcf7ce96bc8940f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card_link','data' => ['title' => 'Job Title : '.e($post?->title).'','tag' => 'a','class' => 'h4','href' => ''.e(route('job.index',$post->slug )).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card_link'); ?>
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
    <div class="text-center mt-2 ">
        Not found data Asked a Question or Write a Post?
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
<?php if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
<?php echo e($posts->links()); ?>

<?php endif; ?>

<?php if(auth()->user() && auth()->user()->id == $user->id): ?>
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

    <div class="text-center my-2 ">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Job Post Create" data-action="<?php echo e(route('user-job-post.job-post.store')); ?>" data-socuce="<?php echo e(route('user-job-post.job-post.create')); ?>" data-method="post">
            <i class="fa fa-plus"></i> Add New</button>

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
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/profile/job-post/partials/job-post.blade.php ENDPATH**/ ?>