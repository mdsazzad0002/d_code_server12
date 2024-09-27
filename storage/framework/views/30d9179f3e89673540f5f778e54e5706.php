

<?php $__env->startSection('content'); ?>
    <div class="card border">
        <div class="card-header d-flex justify-content-between ">
            <h5>Banner</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary form"
             data-toggle="modal"
             data-target="#modal_setup"
             data-title="Banner Create"
             data-action="<?php echo e(route('admin.banner.store')); ?>"
             data-socuce="<?php echo e(route('admin.banner.create')); ?>"
             data-method="post"
             >
             <i class="fa-solid fa-plus"></i> Add New</button>

        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <?php if (isset($component)) { $__componentOriginal8c447f33e8ae7b49a72a54b47c2a0a9e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c447f33e8ae7b49a72a54b47c2a0a9e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.t_head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('t_head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <tr>
                        <th>###</th>
                        <th>Banner</th>
                        <th>URL</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c447f33e8ae7b49a72a54b47c2a0a9e)): ?>
<?php $attributes = $__attributesOriginal8c447f33e8ae7b49a72a54b47c2a0a9e; ?>
<?php unset($__attributesOriginal8c447f33e8ae7b49a72a54b47c2a0a9e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c447f33e8ae7b49a72a54b47c2a0a9e)): ?>
<?php $component = $__componentOriginal8c447f33e8ae7b49a72a54b47c2a0a9e; ?>
<?php unset($__componentOriginal8c447f33e8ae7b49a72a54b47c2a0a9e); ?>
<?php endif; ?>
                <tbody>
                    <?php
                         $i=1;
                    ?>
                    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($i++); ?></td>

                        <td> <img style="width:50px" src="<?php echo e(dynamic_asset($items->uploads_id)); ?>" alt=""></td>
                        <td> <a class="copy" href="javascript:void(0)" title="<?php echo e($items->url); ?>">Copy Link</a></td>
                        <td> <?php echo e($items->created_at); ?></td>
                        <td>
                            <button type="button" class="btn btn-primary form"
                            data-toggle="modal"
                            data-target="#modal_setup"
                            data-title="banner Edit"
                            data-action="<?php echo e(route('admin.banner.update', $items->id)); ?>"
                            data-socuce="<?php echo e(route('admin.banner.edit', $items->id )); ?>"
                            data-method="put"
                            >
                              <i class="fa-solid fa-plus"></i> Edit</button>

                            <button type="button" class="btn btn-danger delete"
                            data-target="#modal_setup_delete"
                            data-action="<?php echo e(route('admin.banner.destroy', $items->id)); ?>"
                             data-method="delete"
                            >
                              <i class="fa fa-trash"></i> Delete</button>

                            </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <div>
                <?php echo e($banner->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server12\resources\views/backend/banner/index.blade.php ENDPATH**/ ?>