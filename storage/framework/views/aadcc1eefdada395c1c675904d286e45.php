<input hidden type="text" name="user_id" value="<?php echo e($user_id); ?>">
<?php if(!empty($profile_details) && $profile_details!=null): ?>
<textarea id="details" name="details" class="form-control text-light bg-dark">
    <?php echo e($profile_details->details); ?>

</textarea>
<?php else: ?>
<textarea id="details" name="details" class="form-control text-light bg-dark">
</textarea>
<?php endif; ?>


<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/profile_partials/details_edit.blade.php ENDPATH**/ ?>