<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" aria-label="Menu left sidebar toggle" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>


        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('home')); ?>" class="nav-link">Feed</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('home.category')); ?>" class="nav-link">Category</a>
        </li>




    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <li class="nav-item">
            <a href="#" class="nav-link docSearch_byModel_own" aria-label="Search modal like algolia" data-toggle="modal" data-target="#docSearch_byModel_own">
                <i class="fas fa-search"></i>
            </a>
        </li>

        <?php if(general_setting('sandbox_status')=='on'): ?>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_setup_donation" role="button">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
            </a>
        </li>
        <?php endif; ?>

        <li class="nav-item">
            <button type="button" class="btn btn-link text-light  form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="<?php echo e(route('user-post.post.store')); ?>" data-socuce="<?php echo e(route('user-post.post.create')); ?>" data-method="post">
                <i class="fa fa-plus"></i> Post</button>
        </li>
        <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-widget="fullscreen" href="#" aria-label="Maximize fullscreen button" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" hidden data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
        <?php echo $__env->make('common.login_&_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
</nav>
<?php echo $__env->make('common.modal_login_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/frontend/layouts/nav.blade.php ENDPATH**/ ?>