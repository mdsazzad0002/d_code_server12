<?php $__env->startSection('title', 'Live Editor  Dengrweb'); ?>
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
    <div>
        <iframe class="w-100 hv-80" src="<?php echo e(route('editor.source')); ?>" frameborder="0"></iframe>
    </div>
    <style>
        .hv-80{
            height: 80vh !important;
        }
    </style>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/frontend/editor/index.blade.php ENDPATH**/ ?>