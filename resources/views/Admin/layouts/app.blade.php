@include('Admin.layouts.head')
@include('Admin.layouts.header')
  
  @include('Admin.layouts.sidebar')
    
  <div class="content-wrapper">
    @include('Admin.layouts.breadcrumbs')

    <!-- Main content -->
    <section class="content container-fluid">

      <!--Your Page Content Here-->
        
          @yield('content_page')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@include('Admin.layouts.footer')