<!DOCTYPE html>
<html>

@include('admin.layout.head')

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

@include('admin.layout.header')

  <!-- =============================================== -->

  @include('admin.layout.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @yield('content');

  </div>
  <!-- /.content-wrapper -->

@include('admin.layout.footer')

@include('admin.layout.footer-aside')

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('admin.layout.footer-script')
</body>
</html>