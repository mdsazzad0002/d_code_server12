<style>
    .iframe-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 15px;
}

.iframe-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 8px;
}

</style>

<h3 class="mb-2"><?php echo e(Str::title($post->jobs->title)); ?></h3>
Cv File:
<div class="iframe-container">
    <iframe src="<?php echo e(dynamic_asset($post->cv_file_id)); ?>" frameborder="0"></iframe>
</div>

<br>
More Details:
<?php echo Str::markdown($post->details); ?>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/backend/job-post/partials/view1.blade.php ENDPATH**/ ?>