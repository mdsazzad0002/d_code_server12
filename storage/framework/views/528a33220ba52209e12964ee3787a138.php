<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(route('home')); ?>" class="brand-link d-flex align-items-center">
      <img src="<?php echo e(general_setting('fav_logo')); ?>" alt="<?php echo e(general_setting('site_title')); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo e(general_setting('site_title')); ?></span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

        <div class="mb-2">
        </div>


      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" id="nav_left_sidebar" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

           <?php echo $__env->yieldContent('sidebar'); ?>


           <li>
            <div class="p-2 text-center">
                <div class=" bg-black p-3 px-3 rounded">
                    <button class="btn btn-primary mb-2  rounded rounded-pill px-3 form" data-toggle="modal" data-target="#modal_setup" data-title="HelpDesk"  data-action="<?php echo e(route('helpdesk.store')); ?>" data-socuce="<?php echo e(route('helpdesk.create')); ?>" data-method="post">
                        <i class="fas fa-support"></i>
                        HelpDesk
                    </button>

                   



                    <div class=" text-light-secondary">
                        Write report and suggession. <br>
                        Your Helpdesk is now here.
                    </div>
                </div>
            </div>
           </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>


    <!-- /.sidebar -->
  </aside>


  <style>
    #nav_left_sidebar .nav-item .nav-link{
        padding: .5rem 0.1rem;;
        border-bottom: 1px dashed rgba(255, 255, 255,  0.33);

        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 9px;
    }


  </style>
<?php /**PATH D:\wamp64\www\GitHub\d_code_server12\resources\views/frontend/layouts/sidebar.blade.php ENDPATH**/ ?>