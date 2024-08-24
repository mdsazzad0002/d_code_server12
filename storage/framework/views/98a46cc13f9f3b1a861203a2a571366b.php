<?php $__env->startSection('title', Str::title($view_post->tilte)); ?>
<?php $__env->startSection('short_description', $view_post->short_details); ?>
<?php $__env->startSection('og_image', dynamic_asset($view_post->uploads_id)); ?>
<?php $__env->startSection('keywords', $view_post->keywords); ?>


<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-xl-8">
        <?php echo $__env->make('frontend.details.partials.view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col-xl-4">
        <div class="position_sticky_footer_side">
            <?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['title' => 'View More Topics']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'View More Topics']); ?>
                <?php $__env->startComponent('components.frontend.ads', ['where'=>'sidebar_subcategory_showup', 'class'=>'m-2']); ?><?php echo $__env->renderComponent(); ?>
                    <?php
                    // dd($category);
                    $catgory_list_footer = category_subcategory($category, 30);
                    ?>


                    <div class="row">
                        <?php if($catgory_list_footer!=null): ?>

                        <?php $__currentLoopData = $catgory_list_footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class=" col-md-4 col-xl-12 ">
                            <div class="card ml-2 mr-2 mb-2">
                                <div class="card-body p-2">
                                    <a href="<?php echo e(route('subcategory.index',[$category, $items->slug])); ?>" class=" text-black w-full d-flex " style="gap: 5px">
                                        <div style="width:60px; height:40px;">
                                            <img class="w-100 h-100 object-fit-cover lazy" data-src="<?php echo e(dynamic_asset($items->uploads_id)); ?>"/>
                                        </div>
                                        <div style="    width: calc(100% - 60px);">
                                           <h6 class="mb-0" style=" font-weight:700">
                                               # <span style="color: #07cc9e;"><?php echo e(Str::title($items->name)); ?></span>
                                            </h6>
                                            <div class="line-climb-1">
                                                <?php echo e($items->description); ?>

                                            </div>
                                        </div>
                                    </a>
                            </div>
                        
                                </div>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>


                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8e99a24ae3b5393f9e2add850eaa9c5c)): ?>
<?php $attributes = $__attributesOriginal8e99a24ae3b5393f9e2add850eaa9c5c; ?>
<?php unset($__attributesOriginal8e99a24ae3b5393f9e2add850eaa9c5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e99a24ae3b5393f9e2add850eaa9c5c)): ?>
<?php $component = $__componentOriginal8e99a24ae3b5393f9e2add850eaa9c5c; ?>
<?php unset($__componentOriginal8e99a24ae3b5393f9e2add850eaa9c5c); ?>
<?php endif; ?>
            </div>

            <div class="position_sticky_footer_side">
                <?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['title' => 'Recent Jobs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Recent Jobs']); ?>

                    <?php
                       $job_post = jobPost($category, 15);
                    ?>
                    <?php echo $__env->make('frontend.job.partials.job_post_card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

            </div>

            <div class="position_sticky_footer_side">
                <?php if (isset($component)) { $__componentOriginal73f463ef31b8dcbfc5c52b151a9065df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer_category','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer_category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df)): ?>
<?php $attributes = $__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df; ?>
<?php unset($__attributesOriginal73f463ef31b8dcbfc5c52b151a9065df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73f463ef31b8dcbfc5c52b151a9065df)): ?>
<?php $component = $__componentOriginal73f463ef31b8dcbfc5c52b151a9065df; ?>
<?php unset($__componentOriginal73f463ef31b8dcbfc5c52b151a9065df); ?>
<?php endif; ?>
             </div>

    </div>
</div>



<?php $__env->stopSection(); ?>




<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(static_asset('plugins/')); ?>/markdown/simplemde.min.js"></script>
<script>
        var simplemde = new SimpleMDE({ element: $("#details")[0] });
</script>


<script>
    $('#post_details_editor').on('submit', function(e){
        e.preventDefault();
        var formData = $('#post_details_editor').serialize();;
        $.ajax({
            type:'post',
            url:'<?php echo e(route('comment.post')); ?>',
            data:
                formData,

            success:function(data){
                
                toastr["success"](`Comments Added successfully`)
                $('.comment_data').append(data);
                Prism.highlightAll();
            }
        })
    })


    $(document).ready(function() {
        $.ajax({
            type:'get',
            url:'<?php echo e(route('comment.index')); ?>',
            data:{
                post_id :<?php echo e($view_post->id); ?>,
            },

            success:function(data){
                // console.log(data);
                $('.comment_list_current_post').append(data);
                Prism.highlightAll();
            }
        })
    });



</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(static_asset('plugins/')); ?>/markdown/simplemde.min.css"/>
<style>
    #post_details_editor:has(>.editor-toolbar.fullscreen){
        position: relative;
        z-index: 99999;
    }

    .editor-toolbar a{
        color: #fff !important;
    }
    .editor-toolbar a.active, .editor-toolbar a:hover{
        background: transparent !important;
    }
    .editor-toolbar.fullscreen{
        background: #616161;

    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/details/index.blade.php ENDPATH**/ ?>