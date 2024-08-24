<li class="nav-item">
    <div class="nav-link position-relative">
        <?php if(Auth::user()): ?>

        
        <h6 class="user-name dropdown-toggle mb-0" data-toggle="dropdown"><?php echo e(mb_strimwidth(Str::title(auth()->user()->name), 0, 12, "...")); ?>

        </h6>
        <div class="dropdown-menu bg-dark text-light border-top-0" style="width:100% !important">
            <a href="<?php echo e(route('users.index', auth()->user()->username)); ?>" class="dropdown-item">Overview</a>
            <a href="<?php echo e(route('users.comment', auth()->user()->username)); ?>" class="dropdown-item">Comment</a>
            <a href="<?php echo e(route('users.vote', auth()->user()->username)); ?>" class="dropdown-item">Vote</a>
            <a href="<?php echo e(route('users.post', auth()->user()->username)); ?>" class="dropdown-item">Post</a>
            <a href="<?php echo e(route('users.job-post', auth()->user()->username)); ?>" class="dropdown-item">Job</a>

            
            
            
            

            <form action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo method_field('post'); ?>
                <?php echo csrf_field(); ?>
                <button class="dropdown-item" onclick="return confirm('Do you want logout?')" type="submit">Log
                    Out</button>
            </form>
        </div>

        <?php else: ?>

        <h6 class="user-name dropdown-toggle mb-0" data-toggle="dropdown"><i class="fas fa-user"></i> Profile</h6>
        <div class="dropdown-menu bg-dark text-light border-top-0" style="width:100% !important">

            <button class="dropdown-item" style="border-bottom: 1px dotted rgb(39, 39, 39)" data-toggle="modal"
                data-target="#login_modal" type="submit"> <i class="fas fa-user"></i> Login</button>
            <button class="dropdown-item" data-toggle="modal" data-target="#registration_modal" type="submit">
                <i class="fas fa-user"></i> registration</button>

        </div>

        <?php endif; ?>
    </div>



</li>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/common/login_&_registration.blade.php ENDPATH**/ ?>