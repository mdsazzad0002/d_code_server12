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
        @forelse ($posts as $post)

        <tr class="winner__table">
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->users->name }}</td>
          <td> <a href="{{ route('job.index',$post->jobs->slug) }}">{{ $post->jobs->title }}</a> </td>
          <td>{{ $post->details }}</td>
          <td>{{ $post->created_at->format('d F Y') }}</td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>

@empty

{{-- if not found any post or question crate one for button --}}
<x-frontend.card>
    <div class="text-center mt-2 ">
        Not found data Asked a Question or Write a Post?
    </div>

</x-frontend.card>
{{-- End if not found any post or question crate one for button --}}

@endforelse
@if($posts instanceof \Illuminate\Pagination\LengthAwarePaginator)
{{ $posts->links()}}
@endif


