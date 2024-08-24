
<?php $__currentLoopData = $job_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job_items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="">
    <div class="shadow  mb-3 border bg-dark" style="border-color:#ee3f86 !important; border-radius: 5px; overflow:hidden;">


        <?php echo $__env->make('frontend.summary.summery_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class=" px-3 py-2">
                <a  href="<?php echo e(route('job.index',$job_items->slug)); ?>" aria-label="View Details">
                    <h5 class="font-weight-bold text-success"> 🎀 <?php echo e(Str::title($job_items->title)); ?> 🎀</h5>
                </a>

                <?php echo e($job_items->short_details); ?>




                <?php echo $__env->make('frontend.job.partials.company_details', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



                <div class="mt-3">

                    <?php $__currentLoopData = $job_items->categoryname(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category_samilar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="tag_data" href="<?php echo e(route('category.index', $category_samilar->slug)); ?>"><i class="fa-solid fa-tags"></i>  <?php echo e($category_samilar->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>


                <a  href="<?php echo e(route('job.index',$job_items->slug)); ?>" class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2">View Job Post</a>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/job/partials/postview_feed.blade.php ENDPATH**/ ?>