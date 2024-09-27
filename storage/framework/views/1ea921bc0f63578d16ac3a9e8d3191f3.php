<input hidden class="form-control bg-dark text-light mb-2" type="text" value="<?php echo e(url()->previous()); ?> " name="page_url">

<input hidden class="form-control bg-dark text-light mb-2" type="text" value="<?php echo e(auth()->user()?->id ??  0); ?>" name="reporter_id">

<textarea name="details" placeholder="Enter Details your suggession and report" id="" cols="30" rows="10" class="form-control bg-dark text-light"></textarea>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/helpdesk/create.blade.php ENDPATH**/ ?>