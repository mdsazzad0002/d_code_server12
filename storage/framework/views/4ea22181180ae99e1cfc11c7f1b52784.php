<?php if(isset($tag)): ?> <<?php echo e($tag); ?> <?php else: ?> <div <?php endif; ?>
<?php if(isset($href)): ?> href="<?php echo e($href); ?>" <?php endif; ?>
<?php if(isset($style)): ?> style="<?php echo e($style); ?>" <?php endif; ?>
class="card <?php if(isset($class)): ?><?php echo e($class); ?><?php endif; ?>">

    <?php if(isset($title)): ?> <h4 class="card-header"> <?php echo e($title); ?> </h4> <?php endif; ?>

    <div class="card-body">
        <?php echo e($slot); ?>

    </div>

    <?php if(isset($footer)): ?> <div class="card-footer"> <?php echo e($footer); ?>  </div> <?php endif; ?>

<?php if(isset($tag)): ?> </<?php echo e($tag); ?>><?php else: ?></div><?php endif; ?>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/components/card/card.blade.php ENDPATH**/ ?>