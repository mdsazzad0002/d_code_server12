<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    <!-- Left navbar links -->
    <div class="container">


    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?php echo e(route('home')); ?>" role="button"><img  style="height: 40px" src="<?php echo e(general_setting('site_logo')); ?>" alt=""></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <?php echo $__env->make('common.login_&_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
</div>
</nav>


<?php echo $__env->make('common.modal_login_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/profile/layouts/nav.blade.php ENDPATH**/ ?>