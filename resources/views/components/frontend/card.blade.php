 {{--  When found tag attribute  --}}
@isset($tag)<{{ $tag }} @else <div @endisset
    @isset($href) href="{{ $href }}" @endisset
    class="card p-0 @isset($class) {{ $class }} @endisset" style="border-radius:5px;overflow:hidden">
{{--  title attribute   --}}
    @isset($title) <h4 class="card-header  px-3 py-2" style="background:#282828"> {{ $title }} </h4> @endisset
{{--  title attribute   --}}

{{--  body Element  --}}
<div class="card-body p-0"> {{ $slot }} </div>
{{--  body Element  --}}

{{--  footer attribute  --}}
@isset($footer) <div class="card-footer"> {{ $footer }} </div> @endisset
{{--  footer attribute  --}}


 {{--  When found tag attribute  --}}
@isset($tag) </{{ $tag }}> @else </div> @endisset
 {{--  end When found tag attribute  --}}
