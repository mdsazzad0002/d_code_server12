<!DOCTYPE html>
<html lang="en">
<head>

    @include('frontend.layouts.partials.meta')
    <title>@yield('title') - {{ Str::title(general_setting('site_title'))}} </title>
    @include('frontend.layouts.partials.css')
    @stack('styles')

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        <!-- Navbar -->
        @include('frontend.layouts.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('frontend.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @if(Route::is('home'))
        @include('frontend.layouts.content_wrap_home')
        @else
        @include('frontend.layouts.content_wrap')
        @endif



        @include('common.footer')
        {{--  <script>
            window.addEventListener('beforeunload', function (event) {
                // Custom message is not supported in most modern browsers, but this line is kept for compatibility
                const message = 'Are you sure you want to leave?';
                event.returnValue = message; // Standard
                return message; // For older browsers
            });
        </script>  --}}
    </div>




    @include('frontend.report.create')

    <!-- ./wrapper -->
    @include('frontend.layouts.partials.js')
    <!-- footer area start-->

    @include('common.js')

    @stack('scripts')
    <script>
             $("button.form").on('click', function(){
          create_form_modal_data(this)
       });

    </script>



</body>
</html>
