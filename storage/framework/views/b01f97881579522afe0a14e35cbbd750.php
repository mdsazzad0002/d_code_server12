<script>
    function selected_data_ajax(id, thi){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var response_data = JSON.parse(this.responseText);
            if(response_data){

                if(response_data.selected == 0){
                    thi.classList.remove('btn-danger')
                    thi.classList.add('btn-primary')
                    thi.innerHTML = "Add Selected"
                }else{
                    thi.classList.remove('btn-primary')
                    thi.classList.add('btn-danger')
                    thi.innerHTML = "Remove Selected"
                }
            }
          }
        };
        xhttp.open("GET", "<?php echo e(url('user-job-post/holderSelected/')); ?>/"+id, true);
        xhttp.send();
    }
</script>

<?php $__empty_1 = true; $__currentLoopData = $list_applied_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <?php if (isset($component)) { $__componentOriginal0a3246743b024a30070683ed74d4e791 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a3246743b024a30070683ed74d4e791 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.card','data' => ['class' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '']); ?>
        <?php echo $__env->make('frontend.summary.summery_view', ['view_post' => $items], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="p-3">
            <?php echo Str::markdown($items->details); ?>

            <iframe src="<?php echo e(dynamic_asset($items->cv_file_id)); ?>" style="width: 100%; height:70vh" frameborder="0"></iframe>

        </div>
        <div class="text-center">
            <?php if($items->selected): ?>
                <button class="btn btn-danger" onclick="selected_data_ajax(<?php echo e($items->id); ?>, this)">Remove Selected</button>
            <?php else: ?>
                <button class="btn btn-primary" onclick="selected_data_ajax(<?php echo e($items->id); ?>, this)">Add Selected</button>
            <?php endif; ?>

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
    <br/>
<br/>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 Not Found Applied
<?php endif; ?>

NB: Whene Dadeline over automatic send mail form system.



<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/profile/job-post/partials/viewProfile.blade.php ENDPATH**/ ?>