<!doctype html>
<html lang="en">
  <head>
    <?php echo $__env->make('frontend.layouts.partials.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="icon" href="<?php echo e(general_setting('fav_logo')); ?>">

    <?php echo $__env->make('profile.layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(Str::title(general_setting('site_title'))); ?> </title>
  </head>
  <body>


    <?php echo $__env->make('profile.layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php if(! Route::is('login') && !Route::is('register') && !Route::is('verify') && !Route::is('password.*') ): ?>
        <?php echo $__env->make('profile.layouts.inter_nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('profile.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
    <div class="py-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php endif; ?>
    






    <div class="container">
        <hr>
        <?php echo $__env->make('common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <hr>
    </div>

<script>
    $("button.form").on('click', function(){
 create_form_modal_data(this)
});

</script>

  </body>
</html>






<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/layouts/master.blade.php ENDPATH**/ ?>