<div class="card">
    <div class="card-header">
        <h5>
            Payment Settings
        </h5>
    </div>
    
    <div class="card-body">
        <form class="row" action="<?php echo e(route('admin.system-setting.update', $category)); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>
            <div class="col-md-4 mb-2">
                <label for="store_id">Site Title</label>
                <input class="form-control" placeholder="Site Title" <?php if(isset($general_setting['store_id'])): ?> value="<?php echo e($general_setting['store_id']); ?>" <?php endif; ?> type="text" name="store_id"  id="store_id">
            </div>
            <div class="col-md-4 mb-2">
                <label for="store_password">Site store_password</label>
                <input class="form-control" placeholder="Site store_password" <?php if(isset($general_setting['store_password'])): ?> value="<?php echo e($general_setting['store_password']); ?>" <?php endif; ?> type="text" name="store_password"  id="store_password">
            </div>
            <div class="col-md-2 col-sm-6 mb-2">

                <label class="form-check-label" for="flexSwitchCheckDefault">SandBox Mode</label>
                <div class="switch">
                <input type="checkbox" checked hidden value="off" name="sandbox_mode" id="">
                <input class="form-check-input" name="sandbox_mode" <?php if(isset($general_setting['sandbox_mode'])): ?> <?php if($general_setting['sandbox_mode'] == 'on'): ?> checked  <?php endif; ?> <?php endif; ?> type="checkbox" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault"></label>
              </div>
            </div>
            <div class="col-md-2 col-sm-6 mb-2">
                <label class="form-check-label" for="flexSwitchCheckDefaultsandbox_status">Status</label>
            <div class="switch">
                <input type="checkbox" checked hidden value="off" name="sandbox_status" id="">
                <input class="form-check-input" name="sandbox_status" <?php if(isset($general_setting['sandbox_status'])): ?> <?php if($general_setting['sandbox_status'] == 'on'): ?> checked  <?php endif; ?> <?php endif; ?> type="checkbox" id="flexSwitchCheckDefaultsandbox_status">
                <label class="form-check-label" for="flexSwitchCheckDefaultsandbox_status"></label>
              </div>
            </div>


            <div class="col-12">
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i>Save</button>
            </div>
        </form>
    </div>
</div>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/backend/system-setting/partials/system_payment.blade.php ENDPATH**/ ?>