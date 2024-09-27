<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    <!-- Left navbar links -->
    <div class="container">


    <ul class="navbar-nav align-items-center">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="<?php echo e(route('home')); ?>" role="button"><img  style="height: 40px" src="<?php echo e(general_setting('site_logo')); ?>" alt="Site logo"></a>
      </li>

      <li class="nav-item d-none d-md-inline-block">
        <a href="<?php echo e(route('home')); ?>" class="nav-link">Feed</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(route('home.category')); ?>" class="nav-link">Category</a>
        </li>

    </ul>


    <?php if (isset($component)) { $__componentOriginaldaf15417e137fe57d739499a1565a4f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldaf15417e137fe57d739499a1565a4f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.search_modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.search_modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldaf15417e137fe57d739499a1565a4f1)): ?>
<?php $attributes = $__attributesOriginaldaf15417e137fe57d739499a1565a4f1; ?>
<?php unset($__attributesOriginaldaf15417e137fe57d739499a1565a4f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaf15417e137fe57d739499a1565a4f1)): ?>
<?php $component = $__componentOriginaldaf15417e137fe57d739499a1565a4f1; ?>
<?php unset($__componentOriginaldaf15417e137fe57d739499a1565a4f1); ?>
<?php endif; ?>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="nav-link docSearch_byModel_own" aria-label="Search modal like algolia" data-toggle="modal" data-target="#docSearch_byModel_own">
                <i class="fas fa-search"></i>
            </a>
        </li>

        <?php if(general_setting('sandbox_status')=='on'): ?>
        <li class="nav-item d-none d-md-block">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_setup_donation" role="button">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
            </a>
        </li>
        <?php endif; ?>

        <li class="nav-item d-none d-md-block">
            <button type="button" class="btn btn-link text-light  form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="<?php echo e(route('user-post.post.store')); ?>" data-socuce="<?php echo e(route('user-post.post.create')); ?>" data-method="post">
                <i class="fa fa-plus"></i> Post</button>
        </li>
        <li class="nav-item d-none d-md-block">
            <a class="nav-link fullscreen_btn" data-widget="fullscreen" href="#" aria-label="Maximize fullscreen button" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a class="nav-link" hidden data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

      <?php echo $__env->make('common.login_&_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </ul>
</div>
</nav>


<?php echo $__env->make('common.modal_login_registration', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>




    function fullscreen() {
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      }
    };

    function windowed() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    } // Static

    document.querySelector('.fullscreen_btn').addEventListener('click', function(){
        if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
            windowed();
          } else {
            fullscreen();
          }
    })

</script>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/layouts/nav.blade.php ENDPATH**/ ?>