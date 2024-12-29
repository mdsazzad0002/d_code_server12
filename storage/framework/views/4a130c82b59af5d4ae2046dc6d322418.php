<div class="container py-3">

    
    <?php echo $__env->make('profile.layouts.partials.tab_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    


    
    <div class="row">


        
        <div class="col-md-5 col-lg-4 col-xl-3">

            
            <?php echo $__env->make('profile.layouts.partials.profile_picture', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            
            <?php echo $__env->make('profile.layouts.partials.user_information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            


            
            <?php echo $__env->make('profile.layouts.partials.social_information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            


            
            <?php echo $__env->make('profile.layouts.partials.category_choose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

            <div class="text-left mb-3">

                <?php echo $__env->make('common.sharer_and_summary', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>


            
            <?php echo $__env->make('profile.layouts.partials.report_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            

        </div>
        


        
        <div class="col-md-7 col-lg-8 col-xl-9 pt-2">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        


    </div>
    
</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/layouts/inter_nav.blade.php ENDPATH**/ ?>