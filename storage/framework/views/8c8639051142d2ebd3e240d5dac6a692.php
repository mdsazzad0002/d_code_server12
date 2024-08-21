 
<?php if(isset($tag)): ?>
<<?php echo e($tag); ?>

<?php else: ?>
<div
<?php endif; ?>
 




<?php if(isset($href)): ?>
href="<?php echo e($href); ?>"
<?php endif; ?>


class="card p-0


<?php if(isset($class)): ?>
<?php echo e($class); ?>

<?php endif; ?>


" style="border-radius:5px;overflow:hidden">

    <?php if(isset($title)): ?>
    <h4 class="card-header  px-3 py-2" style="background:#282828">
        <?php echo e($title); ?>

    </h4>

    <?php endif; ?>



<div class="card-body p-0">
    <?php echo e($slot); ?>

</div>



<?php if(isset($footer)): ?>
<div class="card-footer">
    <?php echo e($footer); ?>

</div>
<?php endif; ?>



 
<?php if(isset($tag)): ?>
</<?php echo e($tag); ?>>
<?php else: ?>
</div>
<?php endif; ?>
 
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/components/frontend/card.blade.php ENDPATH**/ ?>