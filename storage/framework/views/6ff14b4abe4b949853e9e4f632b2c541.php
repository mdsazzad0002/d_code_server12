<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="<?php echo e(route('admin.index')); ?>">
                <img src="<?php echo e(general_setting('site_logo')); ?>" alt="logo">
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="<?php echo e(request()->is('admin') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('admin.index')); ?>"><i class="ti-dashboard"></i><span>dashboard</span></a>
                    </li>

                    <li class="<?php echo e(request()->is('admin/category*','admin/subcategory*' ) ? 'active' : ''); ?>">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span>Category</span></a>
                        <ul class="collapse">
                            <li class="<?php echo e(request()->is('admin/category*' ) ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.category.index')); ?>">Category</a></li>
                            <li class="<?php echo e(request()->is('admin/subcategory*' ) ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.subcategory.index')); ?>">Sub Category</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo e(request()->is('admin/district*') ? 'active' : ''); ?>"><a
                        href="<?php echo e(route('admin.district.index')); ?>"><i class="ti-receipt"></i> <span>District</span></a></li>


                    <li class="<?php echo e(request()->is('admin/post*') ? 'active' : ''); ?>"><a
                            href="<?php echo e(route('admin.post.index')); ?>"><i class="ti-receipt"></i> <span>Post</span></a></li>

                    <li class="<?php echo e(request()->is('admin/job-post*') ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('admin.job-post.index')); ?>"><i class="ti-receipt"></i> <span>Job Post</span></a></li>

                    <li class="<?php echo e(request()->is('admin/admin-list*', 'admin/user-list*') ? 'active' : ''); ?>">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-users"></i>
                            <span>Users</span></a>
                        <ul class="collapse">
                            <li class="<?php echo e(request()->is('admin/user-list*' ) ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.user-list.index')); ?>">User</a></li>
                            <li class="<?php echo e(request()->is('admin/admin-list*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.admin-list.index')); ?>">Admin</a></li>
                        </ul>
                    </li>

                    <li class="<?php echo e(request()->is('admin/system-settings/*','admin/banner*') ? 'active' : ''); ?>">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cogs"
                                aria-hidden="true"></i><span>System Settings</span></a>
                        <ul class="collapse">
                            <li class="<?php echo e(request()->is('admin/system-settings/1') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.system-setting.index', 1)); ?>">General Settings</a></li>
                            <li class="<?php echo e(request()->is('admin/banner*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.banner.index')); ?>">Banner</a></li>
                            <li class="<?php echo e(request()->is('admin/system-settings/2') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.system-setting.index', 2)); ?>">Pyament Settings</a></li>
                            <li class="<?php echo e(request()->is('admin/system-settings/3') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('admin.system-setting.index', 3)); ?>">ADS Settings</a></li>
                            <li class="<?php echo e(request()->is('admin/system-settings/3') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(url('sitemap')); ?>">Sitemap</a></li>

                        </ul>
                    </li>
                    <li class="<?php echo e(request()->is('admin/job-post*') ? 'active' : ''); ?>"><a
                        href="<?php echo e(route('admin.report.index')); ?>"><i class="ti-receipt"></i> <span>Report</span></a></li>
                    <li class="<?php echo e(request()->is('admin/job-post*') ? 'active' : ''); ?>"><a
                        href="<?php echo e(route('admin.apply-jobs.list')); ?>"><i class="ti-receipt"></i> <span>Job Apply List</span></a></li>

                </ul>
            </nav>
        </div>
    </div>
</div>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>