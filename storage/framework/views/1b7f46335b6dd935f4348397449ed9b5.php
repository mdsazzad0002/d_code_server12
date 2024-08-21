


<textarea name="details" placeholder="Description" class="form-control mb-2" id="" cols="30" rows="5"><?php echo e($report->details); ?></textarea>

<br>
<select class="form-control select2  mt-2" name="status"   id="status">
    <option <?php if($report->status == 1 ): ?> selected <?php endif; ?> value="1">Active</option>
    <option <?php if($report->status == 0 ): ?> selected <?php endif; ?> value="0">Inactive</option>
</select>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/backend/report/edit.blade.php ENDPATH**/ ?>