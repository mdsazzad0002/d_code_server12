
    
    <div class=" overflow-auto p-2 ">
        <?php $__currentLoopData = $contribute_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('users.index', $contribute->username)); ?>" class="" style=" display:inline-block">
            <img class="w-100 h-100 lazy" style="object-fit: cover" data-src="<?php echo e($contribute->upload_file); ?>" alt="<?php echo e($contribute->name); ?>">
            <div class="holder_name" style="border-radius: 4px;">
                <?php echo e(Str::limit($contribute->name, 15, '...')); ?>

            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<style>
    .overflow-auto{
        overflow: auto;
        white-space: nowrap;
    }
    .overflow-auto a{
        margin-right: 8px;
        height: 160px;
        width: 125px;
        position: relative;

    }
    .overflow-auto a img{
        border-radius: 5px;
        background-position: center center;
    }
    .overflow-auto a .holder_name{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        overflow: hidden;
        background: #6c757d;
        color: white;
        padding: 2px 5px;
        padding: 2px 5px;
    font-size: 15px;
    }
</style>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/feed/partials/today_top_contribute.blade.php ENDPATH**/ ?>