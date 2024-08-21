<div class="mb-2">
    <?php if($user->chosen_category != null): ?>
        <h4>Favorite Cateegory.</h4>
        <?php if(count($user->chosen_category()) > 0): ?>
        <?php $__currentLoopData = $user->chosen_category(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <a class="d-inline-block" href="<?php echo e(url('/category/'.$items->slug)); ?>"><i class="<?php echo e('bi bi-link-45deg'); ?>"></i><?php echo e($items->name); ?></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php elseif(auth()->user() &&  auth()?->user()?->id == $user->id): ?>
        <h4>Favorite Cateegory.</h4>
        <?php endif; ?>
    <?php endif; ?>




    <?php if(auth()->user() && auth()?->user()?->id == $user->id): ?>
        <button type="button" class="btn btn-secondary btn-sm my-2" data-toggle="modal" data-target="#category_choose_update_1212"><i class="bi bi-pencil-square"></i>Edit Favorite </button>

        <!-- Modal quick link update -->
        <form action="<?php echo e(route('users.chosencategory.index')); ?>" class="modal fade" id="category_choose_update_1212" tabindex="-1" aria-labelledby="category_choose_update_1212" aria-hidden="true" method="post">
          <?php echo csrf_field(); ?>
          <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
              <div class="modal-header">
                <h5 class="modal-title" >
                  <i class="bi bi-pencil-square"></i>
                  <span class="text-success"><?php echo e($user->name); ?></span>
                   Favorite Category
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="text" name="id" id="" value="<?php echo e($user->username); ?>" hidden>
                <select name="choosen_category[]" id="" class="select2Category form-control" multiple>
                    <?php if($user->chosen_category != null): ?>
                        <?php
                            $chosen_category_key = explode(',', $user->chosen_category);
                        ?>
                    <?php else: ?>
                        <?php
                        $chosen_category_key =[];
                        ?>
                     <?php endif; ?>

                    <?php $__currentLoopData = $user->category_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php if(in_array($key, $chosen_category_key)): ?> selected <?php endif; ?> value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>


              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-xmark"></i>Close</button>
                <button type="submit"  class="btn btn-success" ><i class="bi bi-floppy2-fill"></i>Save changes</button>
              </div>
            </div>
          </div>
        </form>

        <script>
            setTimeout(function(){
                $('.select2Category').select2();
            },2500)
        </script>
        <style>
            span.select2.select2-container.select2-container--default {
                width:100% !important;
            }
        </style>
    <?php endif; ?>



</div>
<?php /**PATH /home/hossain/docde/d_code_server12/resources/views/profile/layouts/partials/category_choose.blade.php ENDPATH**/ ?>