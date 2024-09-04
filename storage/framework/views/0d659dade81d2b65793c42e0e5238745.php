<select name="category" class="form-control select2 mb-2" id="">
    <option value="">-- Select Category --</option>
    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option <?php if($items->id == $subcategory->category_id): ?> selected  <?php endif; ?> value="<?php echo e($items->id); ?>"><?php echo e($items->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br>
<br>

<input type="text" name="name" value="<?php echo e($subcategory->name); ?>" class="form-control mb-2" placeholder="Category Name">
<input type="file" name="photo" class="form-control mb-2" placeholder="Category Name">
<img style="width: 100px" src="<?php echo e(dynamic_asset($subcategory->uploads_id)); ?>" alt="">
<br>
<br>
<textarea name="description" placeholder="Description" class="form-control mb-2" id="" cols="30" rows="5"><?php echo e($subcategory->description); ?></textarea>
<input type="text" required name="keywords" value="<?php echo e($subcategory->keywords); ?>" id="keywords" class="form-control mb-2" placeholder="Keywords saparate by comma">
<select class="form-control select2 mb-2" name="status" id="status">

    <option <?php if($subcategory->status == 1 ): ?> selected <?php endif; ?> value="1">Active</option>
    <option <?php if($subcategory->status == 0 ): ?> selected <?php endif; ?> value="0">InActive</option>

</select>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/backend/category/subcategory/edit.blade.php ENDPATH**/ ?>