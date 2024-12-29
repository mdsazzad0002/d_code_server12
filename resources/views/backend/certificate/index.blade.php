@extends('backend.layouts.master')
@section('title','Certificate')

@section('content')
<div class="card border">
    <div class="card-header d-flex justify-content-between ">
        <h5>Certificate</h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary form" data-toggle="modal" data-target="#modal_setup" data-title="Certificate Create" data-action="{{ route('admin.certificate.store') }}" data-socuce="{{ route('admin.certificate.create') }}" data-method="post">
            <i class="fa-solid fa-plus"></i> Add New</button>
    </div>

    <div class="card-body">
        <div class="table-rasponsive">
            <table id="cartificate" class="display table table-bordered table-striped table-hover">
                {{-- show data --}}
            </table>
        </div>
    </div>
</div>

@endsection
@push('css')
<style>
    #cartificate .lazy{
    height: 50px;
}
</style>
@endpush
@push('scripts')
<script>
    $(document).ready(function() {
        $('#cartificate').DataTable({
            processing: true,
            serverSide: true,
            ajax: '',
            columns: [
                { 
                    data: 'name', 
                    title: 'Name',
                    name: 'name' 
                },
                { 
                    data: 'father_name', 
                    title: 'Father Name',
                    name: 'father_name' 
                },
                { 
                    data: 'mother_name', 
                    title: 'Mother Name',
                    name: 'mother_name' 
                },
                { 
                    data: 'course', 
                    title: 'Course',
                    name: 'course' 
                },
                { 
                    data: 'gender', 
                    title: 'Gender',
                    name: 'gender' 
                },
                { 
                    data: 'created_at', 
                    title: 'Created At',
                    name: 'created_at' 
                },
                { 
                    data: 'action', 
                    title: 'Action',
                    name: 'action',  
                    orderable: false, 
                    searchable: false 
                },
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
