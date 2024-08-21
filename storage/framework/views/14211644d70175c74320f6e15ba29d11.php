<?php $__env->startSection('title','Report'); ?>

<?php $__env->startSection('content'); ?>
<div class="card border">
    <div class="card-header d-flex justify-content-between ">
        <h5>Report</h5>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary form" data-toggle="modal" data-target="#modal_setup" data-title="Category Create" data-action="<?php echo e(route('admin.category.store')); ?>" data-socuce="<?php echo e(route('admin.category.create')); ?>" data-method="post">
            <i class="fa-solid fa-plus"></i> Add New</button>

    </div>

    <div class="card-body">
        <div class="table-rasponsive">
            <table id="report_data" class="display table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                         <th>Report Form</th>
                        <th>Report To</th>
                        <th>Date</th>
                        <th>Details</th>
                        <th>Status</th>
                         <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<style>
    #report_data .lazy{
    height: 50px;
}
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#report_data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '',
            columns: [
                { data: 'reporter_name', name: 'reporter_id' },
                { data: 'reporter_to_name', name: 'user_id' },
                { data: 'created_at', name: 'created_at' },
                { data: 'details', name: 'details' },
                { data: 'status_name', name: 'status' },
                { data: 'action', name: 'action',  orderable: false, searchable: false },
            ],
            drawCallback: function(settings) {
                $("button.form").on('click', function(){
                    create_form_modal_data(this)
                 });
                 $("button.delete").on('click', function(){
                    delete_modal_data(this)
                });

            }
        });
    });

</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hossain/docde/d_code_server12/resources/views/backend/report/index.blade.php ENDPATH**/ ?>