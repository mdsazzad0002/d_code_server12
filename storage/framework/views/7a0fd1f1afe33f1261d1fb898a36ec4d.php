

    <div class="d-flex align-items-center justify-content-center gap-3 p-2">
        <div class="overflow-hidden" style="width:80px; height:80px; ">
            <?php if(auth()->user()): ?>
                <img class="rounded-circle   w-100 h-100 lazy" style="object-fit: cover" data-src="<?php echo e(dynamic_asset(auth()->user()->upload_id)); ?>" alt=""></div>
            <?php else: ?>
                <img class="rounded-circle  w-100 h-100 lazy" style="object-fit: cover" data-src="<?php echo e(dynamic_asset(0)); ?>" alt="Profile Image">
            </div>
            <?php endif; ?>
            <div style="width: calc(100% - 80px);    ">
                <button type="button" class="btn btn-primary form markdown" style="    width: 100%;border-radius: 42px;padding: 0;" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="<?php echo e(route('user-post.post.store')); ?>" data-socuce="<?php echo e(route('user-post.post.create')); ?>" data-method="post">
                    <input class="form-control" style=" padding: 33px;
            border-radius: 41px;" type="text" placeholder="Write your mind?">
                </button>

        </div>
    </div>


<style>
    .gap-3 {
        gap: 15px;
    }

</style>
<?php /**PATH D:\wamp64\www\GitHub\d_code_server12\resources\views/frontend/feed/create.blade.php ENDPATH**/ ?>