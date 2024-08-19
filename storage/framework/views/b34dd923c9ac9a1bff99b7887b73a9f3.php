<input type="post_id" name="post_id" value="<?php echo e($jobPost->id); ?>" id="" hidden>


<div>
    <label for="cv">Add CV</label>
    <input type="file" accept=".pdf" name="cv" id="cv" class="form-control">
</div>

<div class="mt-1">
    Select CV
    <label class="cv_list" for="cv_list_id_0">
        <input  name="cv_id" value="0"  id="cv_list_id_0" type="radio">
    </label>
    <label class="cv_list" for="cv_list_id_1">
        <input  name="cv_id" value="0"  id="cv_list_id_1" type="radio">
    </label>
    <label class="cv_list" for="cv_list_id_2">
        <input  name="cv_id" value="0"  id="cv_list_id_2" type="radio">
    </label>

</div>
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

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/job/job_apply/job_form.blade.php ENDPATH**/ ?>