<input type="post_id" name="post_id" value="<?php echo e($jobPost->id); ?>" id="" hidden>


<div>
    <label for="cv">Add CV</label>
    <input type="file" accept=".pdf" name="cv" id="cv" class="form-control">
</div>

<?php if(count($old_cv) > 0): ?>

<div class="mt-1">
    Select CV
    <?php $__currentLoopData = $old_cv; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label class="cv_list bg-secondary " for="cv_list_id_<?php echo e($cv->id); ?>">
            <input  name="cv_id" value="<?php echo e($cv->id); ?>"  id="cv_list_id_<?php echo e($cv->id); ?>" type="radio"> &nbsp; <?php echo e($cv->old_name); ?> <a class="btn btn-primary float-right" href="<?php echo e(route('user-job-post.job-post.cv', $cv->name)); ?>" target="_blank">view</a>
        </label>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<div>
    <label for="details">Write Cv &nbsp;&nbsp;<span class="text-danger">* Markdown Editor</span></label>
    <textarea  name="long_details" Placeholder="Details" id="details" class="form-control mb-2" cols="30" rows="10"></textarea>
</div>


<style>
    .cv_list {
    width: 100%;
    background: #eee;
    border-radius: 2px;
    padding: 8px;
    margin-bottom: 6px;
    cursor: pointer;
    }
</style>

<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/frontend/job/job_apply/job_form.blade.php ENDPATH**/ ?>