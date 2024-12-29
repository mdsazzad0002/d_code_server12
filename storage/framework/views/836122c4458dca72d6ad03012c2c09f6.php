

<?php $__currentLoopData = $posts_data_format_feed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="">
    <div class="shadow  mb-3 " style="border-radius: 5px; overflow:hidden;">


            <?php echo $__env->make('frontend.summary.summery_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class=" px-3 py-2">
                <a  href="<?php echo e(route('post.single',$view_post->slug)); ?>" aria-label="View Details">
                    <h5 class="font-weight-bold text-success"> # <?php echo e(Str::title($view_post->tilte)); ?></h5>

                <?php echo $__env->make('frontend.details.partials.post_short_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </a>
                <div class="mt-2">
                    <a class="tag_data" href="<?php echo e(route('subcategory_by_id.index', [$view_post->subcategory->id, $view_post->subcategory->slug])); ?>"><i class="fa-solid fa-tags"></i> <?php echo e($view_post->subcategory->name ?? ''); ?></a>

                    <a class="tag_data" href="<?php echo e(route('category.index', [@$view_post->category->slug])); ?>"><i class="fa-solid fa-tags"></i> <?php echo e($view_post->category->name ?? ''); ?></a>
                </div>
        </div>


        <div class="d-flex align-items-center justify-content-between  px-3 py-2" style="background: #282828">
            <?php echo $__env->make('common.sharer_and_summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

    </div>
 </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php echo $__env->make('frontend.job.partials.postview_feed', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startComponent('components.frontend.ads', ['where'=>'feed_showup']); ?><?php echo $__env->renderComponent(); ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/feed/post.blade.php ENDPATH**/ ?>