<?php $__env->startSection('title', 'News Feed'); ?>
<?php $__env->startSection('short_description', 'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, XML and more.'); ?>
<?php $__env->startSection('og_image', static_asset('uploads/BANNER_DATA.jpg')); ?>
<?php $__env->startSection('keywords', 'HTML, Python, CSS, SQL, JavaScript, How to, PHP, Java, C, C++, C#, jQuery, Bootstrap, Colors, W3.CSS, XML, MySQL, Icons, NodeJS, React, Graphics, Angular, R, AI, Git, Data Science, Code Game, Tutorials, Programming, Web Development, Training, Learning, Quiz, Exercises, Courses, Lessons, References, Examples, Learn to code, Source code, Demos, Tips, Website'); ?>





<?php $__env->startSection('sidebar'); ?>
<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="nav-item" role="menuitem">
    <a href="<?php echo e(route('category.index', $items->slug)); ?>" class="nav-link">
        <i class="nav-icon fas fa-newspaper"></i>
        <p>
            <?php echo e(Str::title($items->name)); ?>

        </p>
    </a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<style>
    .feed_image{
        max-height: 250px;
    }
</style>

<?php echo $__env->make('frontend.feed.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('frontend.feed.partials.today_top_contribute', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="row">
    <div class="col-xl-8">
        <div class="post_data_feed">

        </div>
        <div class="post_data_feed_preview">

        </div>
    </div>
    <div class="col-xl-4">
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
<script>
    function feed_preview(data){
        var preview_feed_text = `
        <?php echo $__env->make('frontend.feed.placeholder_partials_post.index_post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    `;
        if(data > 0){
            for(var i =0; i < data -1; i++){
                document.querySelector('.post_data_feed_preview').innerHTML += preview_feed_text;

            }
        }else{
            document.querySelector('.post_data_feed_preview').innerHTML = '';
        }
    }


    document.addEventListener("DOMContentLoaded", function() {
        let isRequestInProgress = false;
        let first_load_checkpoint = false;

        function data_load_feed_post() {


            if (!isRequestInProgress && (window.innerHeight + window.scrollY + 500) >= document.body.offsetHeight) {
                isRequestInProgress = true;
                feed_preview(3)
                const url = "<?php echo e(route('feed_load_data_post')); ?>"; //A local page
                const xhr = new XMLHttpRequest();

                xhr.onreadystatechange = () => {
                    if (xhr.readyState === 4) {
                        $('.post_data_feed').append(xhr.response);
                        feed_preview(0)
                        isRequestInProgress = false; // Reset the flag after the request is complete
                        if(first_load_checkpoint==false){
                            first_load_checkpoint=true
                            lazyload();
                        }
                    }
                };

                xhr.open("GET", url, true);
                xhr.send("");
            }
        }

        data_load_feed_post();
        document.addEventListener("scroll", data_load_feed_post);
        window.addEventListener("resize", data_load_feed_post);
        window.addEventListener("orientationChange", data_load_feed_post);




    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/frontend/feed/index.blade.php ENDPATH**/ ?>