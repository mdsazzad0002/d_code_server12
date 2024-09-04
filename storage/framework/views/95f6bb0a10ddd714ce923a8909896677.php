<div class="header-area py-0">
    <div class="d-flex flex-wrap-nowrap justify-content-between align-items-center">
        <!-- nav and search button -->
        <div class=" clearfix">
            <div class="nav-btn pull-left m-0">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
        <!-- profile info & task notification -->
        <div class=" d-flex justify-content-end align-items-center ">
            <ul class="notification-area pr-3 m-0">
                <li id="full-view"><i class="ti-fullscreen"></i></li>
                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
            </ul>
            <ul class="user-profile">
                
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo e(Str::title(auth()->user()->name)); ?><i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu" style="right: 0 !important">
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo method_field('post'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="dropdown-item" onclick="return confirm('Do you want logout?')" type="submit">Log Out</button>
                    </form>
                </div>
            </ul>
        </div>
    </div>
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/backend/layouts/nav.blade.php ENDPATH**/ ?>