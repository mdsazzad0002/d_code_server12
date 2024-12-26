<?php $__env->startComponent('components.frontend.ads', ['where'=>'job_sidebar_showup', 'class'=>'m-2']); ?><?php echo $__env->renderComponent(); ?>
<?php $__currentLoopData = $job_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="">
    <div class="shadow  mb-1 border bg-dark" style="border-color:#ee3f86 !important; border-top:0 !important; border-left:0 !important; border-radius: 5px; overflow:hidden;">
        <div class=" px-3 py-2">
            <a  href="<?php echo e(route('job.index',$job_items->slug)); ?>" aria-label="View Details">
                <h5 class="font-weight-bold text-success mb-0"> 🎀 <?php echo e(Str::title($job_items->title)); ?></h5>
                <div class="text-white mb-2">
                    ⏱ <span class="text-danger"><?php echo e(\Carbon\Carbon::parse($job_items->start_date)->format('d-M-Y')); ?></span> -  <span class="text-success"><?php echo e(\Carbon\Carbon::parse($job_items->deadline)->format('d-M-Y')); ?></span>


                </div>
                <div class="line-climb-2 text-white">
                    <?php echo e($job_items->short_details); ?>

                </div>
                <div class="text-secondary text-right">
                    -- <?php echo e($job_items->company_name); ?>

                </div>

            </a>
            <div class="mt-3">
                <?php $__currentLoopData = $job_items->categoryname(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_samilar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="tag_data" href="<?php echo e(route('category.index', $category_samilar->slug)); ?>"><i class="fa-solid fa-tags"></i>  <?php echo e($category_samilar->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\wamp64\www\GitHub\d_code_server12\resources\views/frontend/job/partials/job_post_card.blade.php ENDPATH**/ ?>