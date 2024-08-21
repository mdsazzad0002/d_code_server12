<input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control mb-2" placeholder="Category Name">


<textarea name="description" placeholder="Description" class="form-control mb-2" id="" cols="30" rows="5"><?php echo e($category->description); ?></textarea>

<input type="text" name="keywords" value="<?php echo e($category->keywords); ?>" class="form-control mb-2" placeholder="Keywords saparate by comma">

<input type="file" name="photo" class="form-control mb-2" placeholder="Category Name">
<img style="width: 100px" src="<?php echo e(dynamic_asset($category->uploads_id)); ?>" alt="">
<br>
<select class="form-control select2  mt-2" name="status"   id="status">
    <option <?php if($category->status == 1 ): ?> selected <?php endif; ?> value="1">Active</option>
    <option <?php if($category->status == 0 ): ?> selected <?php endif; ?> value="0">Inactive</option>
</select>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/backend/category/category/edit.blade.php ENDPATH**/ ?>