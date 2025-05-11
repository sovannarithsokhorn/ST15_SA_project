<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminTMT | @yield('title')</title>

 @include('backend.layout.cssshop')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('backend.layout.header')


    @include('backend.layout.leftsidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    @yield('content')

  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('backend.layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
    @include('backend.layout.jsshop')
</body>
</html>
