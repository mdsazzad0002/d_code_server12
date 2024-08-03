<div class="col-12 col-xxl-6 placeholder-glow">
    <div class="shadow px-3 py-2 bg-dark mb-3 ">
        <?php echo $__env->make('frontend.feed.placeholder_partials_post.summary_post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <a  href="#">
            <h5 class="font-weight-bold text-success placeholder col-12"> </h5>
             
             <a href="#" tabindex="-1"  class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2 disabled placeholder "></a>
        </a>

    </div>
 </div>
<style>
    .placeholder{
        padding: 8px;
        background: #767676;
    }
    .btn.placeholder{
        padding: 17px;
    }

</style>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/feed/placeholder_partials_post/index_post.blade.php ENDPATH**/ ?>