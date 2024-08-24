<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <x-frontend.search_modal></x-frontend.search_modal>
          @include('frontend.layouts.partials.frontend_title')

          @yield('content')

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

  </div>

