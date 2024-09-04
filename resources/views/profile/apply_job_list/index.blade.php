@extends('profile.layouts.master')
@section('title',"Post")
@section('short_description', 'Your Post Contribution')
@section('og_image', dynamic_asset($user->uploads_id))
@section('keywords', $user->keywords)
@section('content')

    <div id="paginated_content">
        @include('profile.apply_job_list.partials.apply_job_list')
    </div>

@endsection

@push('styles')
<style>

</style>
@endpush