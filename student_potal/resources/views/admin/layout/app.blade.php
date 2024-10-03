<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"  href="{{ asset('admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback ') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css ') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css ') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css ') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css ') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css ') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css ') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css ') }}" >
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css ') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!-- Navbar -->
         @yield('nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @yield('sidebar')

        <!-- Content Wrapper. Contains page content -->
    @yield('content')
                    
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{  asset('admin/plugins/jquery/jquery.min.js ') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{  asset('admin/plugins/jquery-ui/jquery-ui.min.js ') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{  asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
    <!-- ChartJS -->
    <script src="{{  asset('admin/plugins/chart.js/Chart.min.js ') }}"></script>
    <!-- Sparkline -->
    <script src="{{  asset('admin/plugins/sparklines/sparkline.js ') }}"></script>
    <!-- JQVMap -->
    <script src="{{  asset('admin/plugins/jqvmap/jquery.vmap.min.js ') }}"></script>
    <script src="{{  asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js ') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{  asset('admin/plugins/jquery-knob/jquery.knob.min.js ') }}"></script>
    <!-- daterangepicker -->
    <script src="{{  asset('admin/plugins/moment/moment.min.js ') }}"></script>
    <script src="{{  asset('admin/plugins/daterangepicker/daterangepicker.js ') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{  asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js ') }}"></script>
    <!-- Summernote -->
    <script src="{{  asset('admin/plugins/summernote/summernote-bs4.min.js ') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{  asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js ') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js ') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js ') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js ') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
