



<div class="post_details_extra_deasign">

<?php if($job_details): ?>

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


    <?php echo $__env->make('frontend.summary.summery_view', ['view_post' => $job_details], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class=" px-3 py-2 position-relative">
        <div class="row flex-column flex-md-row">

            <div class="col-md-12">
                <?php echo $__env->make('frontend.job.partials.job_short_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="my-3 ">
                    <?php echo Str::markdown($view_post->long_details); ?>

                </div>


                <?php echo $__env->make('frontend.job.partials.company_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                <div class="mt-3">

                    <?php $__currentLoopData = $job_details->categoryname(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_samilar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="tag_data" href="<?php echo e(route('category.index', $category_samilar->slug)); ?>"><i class="fa-solid fa-tags"></i>  <?php echo e($category_samilar->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>
            </div>

        </div>




        <button class="btn btn-primary apply_now  form markdown"
         data-toggle="modal"
         data-target="#modal_setup"
         data-title="Apply <?php echo e($view_post->title); ?>"
         data-action="<?php echo e(route('user-job-post.job-post.apply_store', $view_post->id)); ?>"
         data-socuce="<?php echo e(route('user-job-post.job-post.apply', $view_post->id )); ?>" data-method="post"

            style="    position: fixed;
    bottom: 10px;
    z-index: 99;
    width: 300px;
    border-radius: 35px;
    transform: translateX(-50%);
    left: 50%;">
            Apply Now
        </button>

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
<?php else: ?>
<?php if (isset($component)) { $__componentOriginal1f96fb3596d227ecff59c67847128565 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f96fb3596d227ecff59c67847128565 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.404','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('404'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f96fb3596d227ecff59c67847128565)): ?>
<?php $attributes = $__attributesOriginal1f96fb3596d227ecff59c67847128565; ?>
<?php unset($__attributesOriginal1f96fb3596d227ecff59c67847128565); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f96fb3596d227ecff59c67847128565)): ?>
<?php $component = $__componentOriginal1f96fb3596d227ecff59c67847128565; ?>
<?php unset($__componentOriginal1f96fb3596d227ecff59c67847128565); ?>
<?php endif; ?>
<?php endif; ?>

<div class="comment_list_current_post"></div>
<div class="comment_data"></div>

</div>









<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/frontend/job/partials/job_details.blade.php ENDPATH**/ ?>