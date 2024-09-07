
<?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div class="d-flex align-items-center justify-center flex-column home_search_bar">
    <h1>
        Find your interest
    </h1>
    <div>We take your preferences seriously and help you find the information you want</div>
    <form class="input-group mb-3 docSearch_byModel_own" action="#"  method="GET" data-toggle="modal"
    data-target="#docSearch_byModel_own">
        <?php echo csrf_field(); ?>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">
        <div class="input-group-append" >
            <button type="button" class="input-group-text btn btn-primary" id="basic-addon1"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a3246743b024a30070683ed74d4e791)): ?>
<?php $attributes = $__attributesOriginal0a3246743b024a30070683ed74d4e791; ?>
<?php unset($__attributesOriginal0a3246743b024a30070683ed74d4e791); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a3246743b024a30070683ed74d4e791)): ?>
<?php $component = $__componentOriginal0a3246743b024a30070683ed74d4e791; ?>
<?php unset($__componentOriginal0a3246743b024a30070683ed74d4e791); ?>
<?php endif; ?>


<?php $__env->startPush('styles'); ?>
    <style>
        .home_search_bar{
            padding: 60px 0;
            background-size:contain;
            background-position:left center;
            background-image: url('<?php echo e(static_asset('frontend/search_bar/search_img.png')); ?>');
            background-repeat:no-repeat;
        }
        .home_search_bar form{
            max-width: 650px;
            margin: 10px auto;

        }

        .home_search_bar form input{
            padding: 30px;
            border-radius: 70px 0 0 70px !important
        }
        .home_search_bar form button{
            padding: 0 30px;
            border-radius:0 70px 70px 0!important
        }
        .home_search_bar h1{
            font-weight: 900;
            text-transform: capitalize;
            font-style: normal;
            font-size: 3rem;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/home/partials/search_bar.blade.php ENDPATH**/ ?>