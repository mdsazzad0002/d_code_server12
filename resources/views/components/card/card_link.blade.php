 <div 
@isset($style) style="{{ $style }}" @endisset
class="card @isset($class){{ $class }} @endisset">

    @isset($title) <a class="card-header" @isset($href) href="{{ $href }}" @endisset> {{ $title }} </a> @endisset

    <div class="card-body">
        {{ $slot }}
    </div>

    @isset($footer) <div class="card-footer"> {{ $footer }}  </div> @endisset

</div>
