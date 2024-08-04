
<div class="card <?php if(isset($class)): ?>
<?php echo e($class); ?>

<?php endif; ?>">
    <?php if(isset($title)): ?>
        <?php if(isset($tag)): ?>
            <<?php echo e($tag); ?>

            <?php else: ?>
           <h4
            <?php endif; ?>

            <?php if(isset($href)): ?>
                href="<?php echo e($href); ?>"
            <?php endif; ?>
         class="card-header">
            <?php echo e($title); ?>


        <?php if(isset($tag)): ?>
        </<?php echo e($tag); ?>>
        <?php else: ?>
        </h4>
        <?php endif; ?>
    <?php endif; ?>

    <div class="card-body">
        <?php echo e($slot); ?>

    </div>

    <?php if(isset($footer)): ?>
        <div class="card-footer">
            <?php echo e($footer); ?>

        </div>
    <?php endif; ?>


</div>

<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/components/frontend/card_link.blade.php ENDPATH**/ ?>