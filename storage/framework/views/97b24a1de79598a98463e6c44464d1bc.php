 <?php $__currentLoopData = $posts_data_format_feed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $view_post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-12 col-xxl-6">
    <div class="shadow px-3 py-2 bg-dark mb-3 ">
        <?php echo $__env->make('frontend.summary.summery_view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <a  href="<?php echo e(route('post.single',$view_post->slug)); ?>" aria-label="View Details">
            <h5 class="font-weight-bold text-success"> # <?php echo e(Str::title($view_post->tilte)); ?></h5>
        </a>
             <?php echo $__env->make('frontend.details.partials.post_short_info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

             <a href="<?php echo e(route('post.single',$view_post->slug)); ?>" class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2">View Details</a>
             
    </div>
 </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/feed/post.blade.php ENDPATH**/ ?>