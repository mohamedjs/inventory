<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Store</title>
     <!-- Tell the browser to be responsive to screen width -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
     <!-- Ionicons -->
     <link rel="stylesheet" href="{{url('dist/css/ionicons.min.css')}}">
     <!-- Tempusdominus Bbootstrap 4 -->
     <link rel="stylesheet" href="{{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
     <!-- iCheck -->
     <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
     <!-- JQVMap -->
     <link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
     <!-- Scanner -->
     <link rel="stylesheet" href="{{ url('plugins/scannerjs/scanner.css') }}">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
     <!-- DataTables -->
     <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
     <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
     <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="{{ url('plugins/daterangepicker/daterangepicker.css') }}">
     <!-- summernote -->
     <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.css') }}">
     <!-- Select2 -->
     <link rel="stylesheet" href="{{url('plugins/select2/css/select2.min.css')}}">
     <link rel="stylesheet" href="{{url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
     <!-- Google Font: Source Sans Pro -->
     <link href="{{url('dist/css/fonts.css')}}" rel="stylesheet">
     <!-- Bootstrap 4 RTL -->
     <!-- <link rel="stylesheet" href="{{ url('dist/css/bootstrap-arabic.min.css') }}"> -->
     <!-- Custom style for RTL -->
     <!-- <link rel="stylesheet" href="{{ url('dist/css/custom.css') }}"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
     <div class="wrapper">
          @include("layout.nav")
          @include("layout.aside")
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
               @yield("content-header")
               <!-- Main content -->
               <section class="content">
                    @yield("content")
               </section>
               <!-- /.content-wrapper -->

               <!-- Control Sidebar -->
               <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
               </aside>
               <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->

          <!-- jQuery -->
          <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
          <!-- jQuery UI 1.11.4 -->
          <script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
          <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
          <script>
               $.widget.bridge('uibutton', $.ui.button)
          </script>
          <!-- Bootstrap 4 rtl -->
          <!-- <script src="{{url('dist/js/bootstrap-arabic.min.js')}}"></script> -->
          <!-- Bootstrap 4 -->
          <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
          <!-- ChartJS -->
          <script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
          <!-- Sparkline -->
          <script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
          <!-- JQVMap -->
          <script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
          <script src="{{ url('plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
          <!-- jQuery Knob Chart -->
          <script src="{{ url('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
          <!-- daterangepicker -->
          <script src="{{ url('plugins/moment/moment.min.js') }}"></script>
          <script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
          <!-- DataTables -->
          <script src="{{url('plugins/datatables/jquery.dataTables.js')}}"></script>
          <script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
          <script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
          <script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
          <script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
          <script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
          <script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
          <script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
          <script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
          <script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
          <script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
          <script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
          <!-- Select2 -->
          <script src="{{url('plugins/select2/js/select2.full.min.js')}}"></script>
          <!-- Tempusdominus Bootstrap 4 -->
          <script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
          <!-- Summernote -->
          <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
          <!-- overlayScrollbars -->
          <script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
          <!-- AdminLTE App -->
          <script src="{{ url('dist/js/adminlte.js') }}"></script>
          <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
          <script src="{{ url('dist/js/pages/dashboard.js') }}"></script>
          <!-- AdminLTE for demo purposes -->
          <script src="{{ url('dist/js/demo.js') }}"></script>
          @yield("script")
</body>

</html>
