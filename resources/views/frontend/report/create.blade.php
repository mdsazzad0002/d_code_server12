<!-- Button trigger modal -->
<button type="button" hidden class="btn btn-primary" data-toggle="modal" data-target="#reportModal">
  Launch demo modal
</button>

<!-- Modal -->
<form class="modal fade" id="reportModal" method="POST" tabindex="-1" role="dialog" action="{{ route('postreport.store') }}" aria-labelledby="reportModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="reportModalLabel">Report This Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @csrf
        <input hidden type="text" name="post_id" id="post_id_id">
        @include('frontend.helpdesk.create')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</form>
