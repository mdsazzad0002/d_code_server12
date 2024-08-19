<div class="mb-3">
    <label for="title">Job Title &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <input required placeholder="Title" type="text" class="form-control" name="title" id="title" value="<?php echo e($jobPost->title); ?>">
</div>

<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="category_select">Category &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <select required class="form-control select2 mb-2" name="category_id[]" placeholder="Category" multiple>
                <?php if($jobPost->category_id != null): ?>
                        <?php
                            $chosen_category_key = explode(',', $jobPost->category_id);
                        ?>
                    <?php else: ?>
                        <?php
                        $chosen_category_key =[];
                        ?>
                     <?php endif; ?>

                    <?php $__currentLoopData = $jobPost->category_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(in_array($key, $chosen_category_key)): ?> selected <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="district_select">Job District &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <select required class="form-control select2 mb-2" name="district_id" placeholder="District">
                <option value="">--Select District--</option>
                <?php $__currentLoopData = $district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if($jobPost->district_id == $items->id ): ?> selected <?php endif; ?> value="<?php echo e($items->id); ?>"><?php echo e($items->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <label for="post_category"> Status</label>
        <select class="form-control  mb-2" name="status" placeholder=" status" id="status">

            <option <?php if($jobPost->status == 1 ): ?> selected <?php endif; ?> value="1">Active</option>
            <option <?php if($jobPost->status == 0 ): ?> selected <?php endif; ?> value="0">InActive</option>

        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="category_select">Company Name &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="company_name" id="" class="form-control" value="<?php echo e($jobPost->company_name); ?>">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="subcategory">Company Type &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="company_type" id="" class="form-control" value="<?php echo e($jobPost->company_type); ?>">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="subcategory">Company Location &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="location" id="" class="form-control" value="<?php echo e($jobPost->location); ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="category_select">Start Date &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="date" name="start_date" id="" class="form-control" value="<?php echo e($jobPost->start_date); ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="subcategory">End Date &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="date" name="deadline" id="" class="form-control" value="<?php echo e($jobPost->deadline); ?>">
        </div>
    </div>
</div>

<div class="mb-3">
    <label for="post_short_description">Short Description &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <textarea required class="form-control" placeholder="Short Description" name="short_details" id="short_details" cols="10" rows="5"><?php echo e($jobPost->short_details); ?></textarea>
</div>
<div>
    <label for="details">Details &nbsp;&nbsp;<span class="text-danger">* Markdown Editor</span></label>
    <textarea  name="long_details" Placeholder="Details" id="details" class="form-control mb-2" cols="30" rows="10"><?php echo e($jobPost->long_details); ?></textarea>
</div>


<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/backend/job-post/partials/edit.blade.php ENDPATH**/ ?>