<style>

.table__head{
color: #FFF;
font-weight: 700;
background: #9b4085;
background: -moz-linear-gradient(-45deg, #9b4085 0%, #608590 100%);
background: -webkit-linear-gradient(-45deg, #9b4085 0%,#608590 100%);
background: linear-gradient(135deg, #9b4085 0%,#608590 100%);
white-space: nowrap;
}
.table-bordered td, .table-bordered th{
border: 0px solid #FFF;
}

.apply__table{
    white-space: nowrap;
}

@media screen and (max-width: 567px) {

    .apply__table{
    font-size: 12px;
    }
}
</style>
<?php if(count($posts) > 0): ?>

<div class="">
    <div class="table-responsive">
    <table class="table table-bordered   table-striped" >
      <thead class="table__head">
        <tr class="apply__table">
          <th>S/N</th>
          <th><i class="fa fa-user" aria-hidden="true"></i> Name</th>
          <th><i class="fa fa-tasks" aria-hidden="true"></i> Job Name</th>
          <th><i class="fa fa-text" aria-hidden="true"></i> Description</th>
          <th> <i class="fa fa-calendar-check-o" aria-hidden="true"></i> Apply Date</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr class="winner__table">
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($post->users->name); ?></td>
          <td> <a href="<?php echo e(route('job.index',$post->jobs->slug)); ?>"><?php echo e($post->jobs->title); ?></a> </td>
          <td><?php echo e($post->details); ?></td>
          <td><?php echo e($post->created_at->format('d F Y')); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
    </div>
  </div>
  <?php echo e($posts->links()); ?>

  <?php else: ?>



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
    <div class="text-center mt-2 mb-2 ">
        Not found data Applied Job?
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


<?php endif; ?>



<?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/profile/apply_job_list/partials/apply_job_list.blade.php ENDPATH**/ ?>