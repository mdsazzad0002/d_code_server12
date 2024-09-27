@extends('backend.layouts.master')
@section('title','Report')

@section('content')
<div class="card border">
    <div class="card-header d-flex justify-content-between ">
        <h5>Report</h5>



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

@endsection
@push('css')
<style>
    #report_data .lazy{
    height: 50px;
}
</style>
@endpush
@push('scripts')
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
@endpush
