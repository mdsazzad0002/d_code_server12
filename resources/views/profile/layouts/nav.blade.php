<nav class="main-header navbar navbar-expand navbar-dark bg-dark">
    <!-- Left navbar links -->
    <div class="container">


    <ul class="navbar-nav align-items-center">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="{{ route('home') }}" role="button"><img  style="height: 40px" src="{{ general_setting('site_logo')}}" alt="Site logo"></a>
      </li>

      <li class="nav-item d-none d-md-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Feed</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home.category') }}" class="nav-link">Category</a>
        </li>

    </ul>


    <x-frontend.search_modal></x-frontend.search_modal>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="nav-link docSearch_byModel_own" aria-label="Search modal like algolia" data-toggle="modal" data-target="#docSearch_byModel_own">
                <i class="fas fa-search"></i>
            </a>
        </li>

        @if (general_setting('sandbox_status')=='on')
        <li class="nav-item d-none d-md-block">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#modal_setup_donation" role="button">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
            </a>
        </li>
        @endif

        <li class="nav-item d-none d-md-block">
            <button type="button" class="btn btn-link text-light  form markdown" data-toggle="modal" data-target="#modal_setup" data-title="Post Create" data-action="{{ route('user-post.post.store') }}" data-socuce="{{ route('user-post.post.create') }}" data-method="post">
                <i class="fa fa-plus"></i> Post</button>
        </li>
        <li class="nav-item d-none d-md-block">
            <a class="nav-link fullscreen_btn" data-widget="fullscreen" href="#" aria-label="Maximize fullscreen button" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item d-none d-md-block">
            <a class="nav-link" hidden data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

      @include('common.login_&_registration')
    </ul>
</div>
</nav>


@include('common.modal_login_registration')

<script>




    function fullscreen() {
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      }
    };

    function windowed() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      }
    } // Static

    document.querySelector('.fullscreen_btn').addEventListener('click', function(){
        if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement) {
            windowed();
          } else {
            fullscreen();
          }
    })

</script>
