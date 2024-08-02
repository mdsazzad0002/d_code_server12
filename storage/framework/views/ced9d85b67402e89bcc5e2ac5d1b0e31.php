<?php $__env->startSection('title','Post'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card border">
        <div class="card-header d-flex justify-content-between ">
            <h5>Post</h5>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary form markdown"
             data-toggle="modal"
             data-target="#modal_setup"
             data-title="Post Create"
             data-action="<?php echo e(route('user-post.post.store')); ?>"
             data-socuce="<?php echo e(route('user-post.post.create')); ?>"
             data-method="post"
             >
             <i class="fa fa-plus"></i> Add New</button>

        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="post_data">
             <thead>
                 <tr>
                     <th>Title</th>
                     <th>Category</th>
                     <th>Sub Category</th>
                     <th>Image</th>
                     <th>Status</th>
                     <th>Date</th>
                     <th>Action</th>
                </tr>
            </thead>

            </table>

        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(static_asset('plugins/')); ?>/markdown/simplemde.min.css">
    <script src="<?php echo e(static_asset('plugins/')); ?>/markdown/simplemde.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(static_asset('plugins/')); ?>/prism/prism.css">
    <script src="<?php echo e(static_asset('plugins/')); ?>/prism/prism.js"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#post_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:'',
            columns:[
                {data:'tilte', name:'tilte'},
                {data:'category_name', name:'category_id'},
                {data:'subcategory_name', name:'subcategory_id'},
                {data:'image', name:'image', orderable:false, searchable:false},
                {data:'status_name', name:'status'},
                {data:'created_at', name:'created_at'},
                {data:'action', name:'action', orderable:false, searchable:false},

            ],
            drawCallback: function(settings) {
                $("button.form").on('click', function(){
                    create_form_modal_data(this)
                 });
                 $("button.delete").on('click', function(){
                    delete_modal_data(this)
                });
                  //view
                $("button.view").on('click', function(){
                    data_view_modal(this)
                })

            }
        });
    })
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\GitHubDesktop\d_code_server\resources\views/backend/post/index.blade.php ENDPATH**/ ?>