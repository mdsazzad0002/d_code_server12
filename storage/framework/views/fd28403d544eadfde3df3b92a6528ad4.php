<div class="card">
    <div class="card-header">
        <h5>
            Ads Settings
        </h5>
    </div>
    
    <div class="card-body">
        <form class="row" action="<?php echo e(route('admin.system-setting.update', $category)); ?>" enctype="multipart/form-data"
            method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('post'); ?>


            <div class="col-md-4 mb-2">
                <label for="feed_showup">Feed Page</label>
                <textarea class="form-control" placeholder="Feed Page" name="feed_showup" type="text" id="feed_showup"><?php if(isset($general_setting['feed_showup'])): ?><?php echo e($general_setting['feed_showup']); ?><?php endif; ?></textarea>
            </div>

            <div class="col-md-4 mb-2">
                <label for="subcategory_showup">SubCategory Page</label>
                <textarea class="form-control" placeholder="SubCategory Page" name="subcategory_showup" type="text" id="subcategory_showup"><?php if(isset($general_setting['subcategory_showup'])): ?><?php echo e($general_setting['subcategory_showup']); ?><?php endif; ?></textarea>
            </div>
            <div class="col-md-4 mb-2">
                <label for="post_showup">Post Page</label>
                <textarea class="form-control" placeholder="Post Page" name="post_showup" type="text" id="post_showup"><?php if(isset($general_setting['post_showup'])): ?><?php echo e($general_setting['post_showup']); ?><?php endif; ?></textarea>
            </div>

            <div class="col-md-4 mb-2">
                <label for="category_showup">Category Page</label>
                <textarea class="form-control" placeholder="Category Page" name="category_showup" type="text" id="category_showup"><?php if(isset($general_setting['category_showup'])): ?><?php echo e($general_setting['category_showup']); ?><?php endif; ?></textarea>
            </div>

            <div class="col-md-4 mb-2">
                <label for="job_showup">Job Page</label>
                <textarea class="form-control" placeholder="Job Page" name="job_showup" type="text" id="job_showup"><?php if(isset($general_setting['job_showup'])): ?><?php echo e($general_setting['job_showup']); ?><?php endif; ?></textarea>
            </div>
            <h3 class="col-12">
                Sidebar ads
            </h3>

            <div class="col-md-4 mb-2">
                <label for="details_showup">Details Page</label>
                <textarea class="form-control" placeholder="Details Page" name="details_showup" type="text" id="details_showup"><?php if(isset($general_setting['details_showup'])): ?><?php echo e($general_setting['details_showup']); ?><?php endif; ?></textarea>
            </div>

            <div class="col-md-4 mb-2">
               <label for="sidebar_subcategory_showup">SubCategory Sitebar</label>
                <textarea class="form-control" placeholder="Page Top" name="sidebar_subcategory_showup" type="text" id="sidebar_subcategory_showup"><?php if(isset($general_setting['sidebar_subcategory_showup'])): ?><?php echo e($general_setting['sidebar_subcategory_showup']); ?><?php endif; ?></textarea>
            </div>
            <div class="col-md-4 mb-2">
                <label for="sidebar_category_showup">Category Sitebar</label>
                <textarea class="form-control" placeholder="Page Top" name="sidebar_category_showup" type="text" id="sidebar_category_showup"><?php if(isset($general_setting['sidebar_category_showup'])): ?><?php echo e($general_setting['sidebar_category_showup']); ?><?php endif; ?></textarea>
            </div>


            <div class="col-md-4 mb-2">
                <label for="job_sidebar_showup">Job Sidebar</label>
                <textarea class="form-control" placeholder="Job Sidebar ADS" name="job_sidebar_showup" type="text" id="job_sidebar_showup"><?php if(isset($general_setting['job_sidebar_showup'])): ?><?php echo e($general_setting['job_sidebar_showup']); ?> <?php endif; ?> </textarea>
            
            </div>




            <div class="col-md-4 mb-2">
                <label for="post_center_showup_after">Post center Ads Show Before</label>
                <input class="form-control" placeholder="Show After" <?php if(isset($general_setting['post_center_showup_after'])): ?>value="<?php echo e($general_setting['post_center_showup_after']); ?>" <?php endif; ?> name="post_center_showup_after"  type="number" id="post_center_showup_after"></input>
            </div>



            <div class="col-md-4 mb-2">
                <label for="system_showup">System ADS</label>

                <div class="switch">
                    <input type="checkbox" checked hidden value="off" name="system_showup" id="">
                    <input class="form-check-textarea" name="system_showup"
                       <?php if(isset($general_setting['system_showup'])): ?>
                        <?php if($general_setting['system_showup']=='on' ): ?> checked <?php endif; ?> <?php endif; ?> type="checkbox"
                        id="system_showup">
                    <label class="form-check-label" for="system_showup"></label>
                </div>

            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit"><i class="fa-solid fa-floppy-disk"></i>Save</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/backend/system-setting/partials/ads.blade.php ENDPATH**/ ?>