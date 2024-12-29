Report Type
<?php $__currentLoopData = report_type(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <label class="p-2 rounded bg-secondary d-block cursor-pointer" for="report<?php echo e($report->id); ?>">
        <input type="radio" name="report_type" value="<?php echo e($report->id); ?>" class="<?php echo e($report->id); ?>" id="report<?php echo e($report->id); ?>"> <span><?php echo e($report->name); ?></span>
    </label>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<input hidden class="form-control bg-dark text-light mb-2" type="text" value="<?php echo e(url()->previous()); ?> " name="page_url">

<input hidden class="form-control bg-dark text-light mb-2" type="text" value="<?php echo e(auth()->user()?->id ??  0); ?>" name="reporter_id">

<textarea name="details" placeholder="Enter Details your suggession and report" id="" cols="30" rows="10" class="form-control bg-dark text-light"></textarea>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/helpdesk/create.blade.php ENDPATH**/ ?>