<div class="">
    <div class="btn-group">
        <button class="btn @if(auth()->user()->subscriptions->contains( $subscribe_id)) btn-danger @else btn-primary @endif" data-id="{{ $subscribe_id }}"  onclick="subscribe(this)"><i class="fa fa-bell" aria-hidden="true"></i> @if(auth()->user()->subscriptions->contains( $subscribe_id)) <span>Subscribed</span> @else <span>Subscribe</span> @endif</button>
    </div>
</div>


<script>
   function subscribe(thi){
    $.ajax({
        type:'get',
        url:'{{ url('subscribe') }}',
        data:{
            'subscribe' : $(thi).data('id')
        },
        success:function(data){
            {{--  console.log(data)  --}}
            data = JSON.parse(data)
            if(data.type == 'success'){
                flasher.success(data.title);
                $(thi).removeClass('btn-primary');
                $(thi).addClass('btn-danger');
                $(thi).find('span').html('Subscribed');
            }else if(data.type == 'warning'){
                flasher.warning(data.title);
                $(thi).removeClass('btn-danger');
                $(thi).addClass('btn-primary');
                $(thi).find('span').html('Subscribe');

            }
        }
    })
   }
    
      
</script>