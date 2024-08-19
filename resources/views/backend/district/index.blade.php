@extends('backend.layouts.master')
@section('title','District')

@section('content')
<div class="card border">
    <div class="card-header d-flex justify-content-between ">
        <h5>District</h5>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary form" data-toggle="modal" data-target="#modal_setup" data-title="District Create" data-action="{{ route('admin.district.store') }}" data-socuce="{{ route('admin.district.create') }}" data-method="post">
            <i class="fa-solid fa-plus"></i> Add New</button>

    </div>

    <div class="card-body">
        <div class="table-rasponsive">
            <table id="district_data" class="display table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                         <th>Name</th>
                        <th>CreatorId</th>
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
    #district_data .lazy{
    height: 50px;
}
</style>
@endpush
@push('scripts')
<script>
    $(document).ready(function() {
        $('#district_data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '',
            columns: [
                {
                data: 'DT_RowIndex', // This will be the row number
                name: 'DT_RowIndex',
                orderable: false, 
                searchable: false
            },
                { data: 'name', name: 'name' },

                { data: 'user_name', name: 'creatorId' },
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
