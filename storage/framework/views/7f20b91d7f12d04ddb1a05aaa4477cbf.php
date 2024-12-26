<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('frontend.layouts.partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(Str::title(general_setting('site_title'))); ?> </title>
    <?php echo $__env->make('frontend.layouts.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        

        <!-- Navbar -->
        <?php echo $__env->make('frontend.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php echo $__env->make('frontend.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Content Wrapper. Contains page content -->
        <?php if(Route::is('home')): ?>
        <?php echo $__env->make('frontend.layouts.content_wrap_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
        <?php echo $__env->make('frontend.layouts.content_wrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endif; ?>



        <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>






    <!-- ./wrapper -->
    <?php echo $__env->make('frontend.layouts.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer area start-->

    <?php echo $__env->make('common.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
             $("button.form").on('click', function(){
          create_form_modal_data(this)
       });

    </script>


</body>
</html>
<?php /**PATH D:\wamp64\www\GitHub\d_code_server12\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>