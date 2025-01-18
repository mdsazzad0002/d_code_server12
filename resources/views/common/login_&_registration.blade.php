@if (auth()->user())
<li class="nav-item">
    <a href="javascript:void(0)" class="nav-link d-flex align-items-center justify-content-center">
        {{ auth()->user()->point }} <img src="{{ static_asset('frontend/img/point.png') }}" class="img-circle" width="25" height="20" alt="User Image">
    </a>
</li>
@endif
<li class="nav-item">
    <div class="nav-link position-relative">
        @if(Auth::user())

        {{-- <img class="avatar user-thumb" src="{{asset('backend/')}}/assets/images/author/avatar.png"  alt="avatar"> --}}
        <h6 class="user-name dropdown-toggle mb-0" data-toggle="dropdown">{{ mb_strimwidth(Str::title(auth()->user()->name), 0, 12, "...") }}
        </h6>
        <div class="dropdown-menu bg-dark text-light border-top-0" style="width:100% !important">
            <a href="{{ route('users.index', auth()->user()->username) }}" class="dropdown-item">Overview</a>
            <a href="{{ route('users.comment', auth()->user()->username) }}" class="dropdown-item">Comment</a>
            <a href="{{ route('users.vote', auth()->user()->username) }}" class="dropdown-item">Vote</a>
            <a href="{{ route('users.post', auth()->user()->username) }}" class="dropdown-item">Post</a>
            <a href="{{ route('users.job-post', auth()->user()->username) }}" class="dropdown-item">Job</a>

            {{--  <a href="{{ route('users.index') }}" class="dropdown-item">Job Profile</a>  --}}
            {{--  <a href="{{ route('users.index') }}" class="dropdown-item">Job Post</a>  --}}
            {{--  <a href="{{ route('users.index') }}" class="dropdown-item">Developer</a>  --}}
            {{--  <a href="{{ route('users.index') }}" class="dropdown-item">About services</a>  --}}

            <form action="{{ route('logout') }}" method="POST">
                @method('post')
                @csrf
                <button class="dropdown-item" onclick="return confirm('Do you want logout?')" type="submit">Log
                    Out</button>
            </form>
        </div>

        @else

        <h6 class="user-name dropdown-toggle mb-0" data-toggle="dropdown"><i class="fas fa-user"></i> Profile</h6>
        <div class="dropdown-menu bg-dark text-light border-top-0" style="width:100% !important">

            <button class="dropdown-item" style="border-bottom: 1px dotted rgb(39, 39, 39)" data-toggle="modal"
                data-target="#login_modal" type="submit"> <i class="fas fa-user"></i> Login</button>
            <button class="dropdown-item" data-toggle="modal" data-target="#registration_modal" type="submit">
                <i class="fas fa-user"></i> registration</button>

        </div>

        @endif
    </div>



</li>
