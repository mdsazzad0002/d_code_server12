<div class="mb-2">
    @if($user->chosen_category != null)
        <h4>Favorite Cateegory.</h4>
        @if(count($user->chosen_category()) > 0)
        @foreach ($user->chosen_category() as $items)
        <div>
            <a class="d-inline-block" href="{{ url('/category/'.$items->slug) }}"><i class="{{'bi bi-link-45deg' }}"></i>{{ $items->name }}</a>
        </div>
        @endforeach
        @elseif(auth()->user() &&  auth()?->user()?->id == $user->id)
        <h4>Favorite Cateegory.</h4>
        @endif
    @endif




    @if(auth()->user() && auth()?->user()?->id == $user->id)
        <button type="button" class="btn btn-secondary btn-sm my-2" data-toggle="modal" data-target="#category_choose_update_1212"><i class="bi bi-pencil-square"></i>Edit Favorite </button>

        <!-- Modal quick link update -->
        <form action="{{ route('users.chosencategory.index') }}" class="modal fade" id="category_choose_update_1212" tabindex="-1" aria-labelledby="category_choose_update_1212" aria-hidden="true" method="post">
          @csrf
          <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
              <div class="modal-header">
                <h5 class="modal-title" >
                  <i class="bi bi-pencil-square"></i>
                  <span class="text-success">{{ $user->name }}</span>
                   Favorite Category
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="text" name="id" id="" value="{{ $user->username }}" hidden>
                <select name="choosen_category[]" id="" class="select2Category form-control" multiple>
                    @if($user->chosen_category != null)
                        @php
                            $chosen_category_key = explode(',', $user->chosen_category);
                        @endphp
                    @else
                        @php
                        $chosen_category_key =[];
                        @endphp
                     @endif

                    @foreach ($user->category_list() as $key => $value)
                        <option @if(in_array($key, $chosen_category_key)) selected @endif value="{{ $key }}">{{ $value }}</option>
                    @endforeach

                </select>


              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-xmark"></i>Close</button>
                <button type="submit"  class="btn btn-success" ><i class="bi bi-floppy2-fill"></i>Save changes</button>
              </div>
            </div>
          </div>
        </form>

        <script>
            setTimeout(function(){
                $('.select2Category').select2();
            },2500)
        </script>
        <style>
            span.select2.select2-container.select2-container--default {
                width:100% !important;
            }
        </style>
    @endif



</div>
