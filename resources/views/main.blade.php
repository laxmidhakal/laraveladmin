<?php




?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL::to('/')}}/css/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">


<div class="wrapper">
 @include('navbar')

 @include('sidebar')
 @yield('content')
 @include('footer')

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{URL::to('/')}}/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{URL::to('/')}}/js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{URL::to('/')}}/js/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{URL::to('/')}}/js/jquery.vmap.min.js"></script>
<script src="{{URL::to('/')}}/js/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{URL::to('/')}}/js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{URL::to('/')}}/js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{URL::to('/')}}/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{URL::to('/')}}/js/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{URL::to('/')}}/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{URL::to('/')}}/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{URL::to('/')}}/js/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::to('/')}}/js/demo.js"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script>
  function myFunction() {
      if(!confirm(" Danger!!!! Are You Sure to delete this??"))
      event.preventDefault();
  }
 </script>

</body>
</html>
