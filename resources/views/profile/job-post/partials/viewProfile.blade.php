<script>
    function selected_data_ajax(id, thi){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            var response_data = JSON.parse(this.responseText);
            if(response_data){

                if(response_data.selected == 0){
                    thi.classList.remove('btn-danger')
                    thi.classList.add('btn-primary')
                    thi.innerHTML = "Add Selected"
                }else{
                    thi.classList.remove('btn-primary')
                    thi.classList.add('btn-danger')
                    thi.innerHTML = "Remove Selected"
                }
            }
          }
        };
        xhttp.open("GET", "{{ url('user-job-post/holderSelected/') }}/"+id, true);
        xhttp.send();
    }
</script>

@forelse($list_applied_list as $items)
  <x-frontend.card class="">
        @include('frontend.summary.summery_view', ['view_post' => $items])
        <div class="p-3">
            {!! Str::markdown($items->details) !!}
            <iframe src="{{ dynamic_asset($items->cv_file_id) }}" style="width: 100%; height:70vh" frameborder="0"></iframe>

        </div>
        <div class="text-center">
            @if($items->selected)
                <button class="btn btn-danger" onclick="selected_data_ajax({{ $items->id }}, this)">Remove Selected</button>
            @else
                <button class="btn btn-primary" onclick="selected_data_ajax({{ $items->id }}, this)">Add Selected</button>
            @endif

        </div>
    </x-frontend.card>
    <br/>
<br/>

@empty
 Not Found Applied
@endforelse

NB: Whene Dadeline over automatic send mail form system.



