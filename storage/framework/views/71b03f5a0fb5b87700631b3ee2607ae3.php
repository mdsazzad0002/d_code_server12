 <div 
<?php if(isset($style)): ?> style="<?php echo e($style); ?>" <?php endif; ?>
class="card <?php if(isset($class)): ?><?php echo e($class); ?> <?php endif; ?>">

    <?php if(isset($title)): ?> <a class="card-header" <?php if(isset($href)): ?> href="<?php echo e($href); ?>" <?php endif; ?>> <?php echo e($title); ?> </a> <?php endif; ?>

    <div class="card-body">
        <?php echo e($slot); ?>

    </div>

    <?php if(isset($footer)): ?> <div class="card-footer"> <?php echo e($footer); ?>  </div> <?php endif; ?>

</div>
<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/components/card/card_link.blade.php ENDPATH**/ ?>