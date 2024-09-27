<div class="card">
    <div class="card-header">
        <h5>
            General Basic Setting
        </h5>
    </div>
    
    <div class="card-body">
        <form class="row" action="<?php echo e(route('admin.system-setting.update', $category)); ?>" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>
            <div class="col-md-4">
                <label for="site_title">Site Title</label>
                <input class="form-control" placeholder="Site Title" <?php if(isset($general_setting['site_title'])): ?> value="<?php echo e($general_setting['site_title']); ?>" <?php endif; ?> type="text" name="site_title"  id="site_title">
            </div>
            <div class="col-md-4">
                <label for="copyright">Site Copyright</label>
                <input class="form-control" placeholder="Site Copyright" <?php if(isset($general_setting['copyright'])): ?> value="<?php echo e($general_setting['copyright']); ?>" <?php endif; ?> type="text" name="copyright"  id="copyright">
            </div>
            <div class="col-md-4">
                <label for="site_title">Site Logo</label>
                <input class="form-control" placeholder="Site Logo"  type="file" name="site_logo"  id="site_logo">

                <?php if(isset($general_setting['site_logo'])): ?>
                 <img width="30" src="<?php echo e(dynamic_asset($general_setting['site_logo'])); ?>" alt="">  <?php endif; ?>
            </div>
            <div class="col-md-4">
                <label for="dark_logo">Dark Logo</label>
                <input class="form-control" placeholder="dark Logo" type="file" name="dark_logo"  id="dark_logo">
                <?php if(isset($general_setting['dark_logo'])): ?>
                     <img width="30" src="<?php echo e(dynamic_asset($general_setting['dark_logo'])); ?>" alt="">
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <label for="fav_logo">Fav Icon</label>
                <input class="form-control" placeholder="Fav Icon" type="file" name="fav_logo"  id="fav_logo">
                <?php if(isset($general_setting['fav_logo'])): ?>
                <img width="30" src="<?php echo e(dynamic_asset($general_setting['fav_logo'])); ?>" alt="">
           <?php endif; ?>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i>Save</button>
            </div>
        </form>
    </div>
</div>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/backend/system-setting/partials/system_setting_1.blade.php ENDPATH**/ ?>