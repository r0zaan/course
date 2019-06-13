<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Course Nepal</title>
    {{--<link rel="shortcut icon" href="{{asset('')}}">--}}
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet"
          href="{{asset('AdminLTE/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/select2/select2.min.css')}}">
    <!-- Morris chart -->
{{--{{ Html::style('AdminLTE/plugins/select2/select2.min.css') }}--}}

{{--<link rel="stylesheet" href="{{asset('AdminLTE/bower_components/morris.js/morris.css')}}">--}}
<!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet"
          href="{{asset('AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    {{--<link rel="stylesheet" href="{{url('https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend.css')}}">
    {{--For modal--}}
    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="{{url('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{url('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    [<![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{asset('/admin/home')}}" class="logo" style="padding: 0 0px;">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                <b>GK
                </b></span>
            <!-- logo for regular region and mobile devices -->
            <span class="logo-lg"><b>Gyanko.com</b>
            </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('img/default.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('img/default.png')}}" class="img-circle" alt="User Image">

                                <p>
                                    {{ Auth::user()->name }}
                                    <small>{{ Auth::user()->created_at }}</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    {{--<a data-url="{{action('UsersController@password',  Auth::user()->id)}}"--}}
                                       {{--class="btn btn-default btn-flat ajax-modal">Change Password</a>--}}
                                </div>
                                <div class="pull-right">
                                    <a href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="btn btn-default btn-flat">Sign out</a>
                                </div>
                                <form id="logout-form" action="{{ action('Login\AuthsController@logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <ul class="sidebar-menu" id="ul" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-plus-square"></i> <span>Utilities</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="li"><a href="{{url('admin/locations')}}"><i class="fa fa-circle-o"></i>Location</a>
                        </li>
                        <li id="li"><a href="{{url('admin/address')}}"><i class="fa fa-circle-o"></i>Address</a>
                        </li>

                        <li id="li"><a href="{{url('admin/users')}}"><i class="fa fa-circle-o"></i>User</a>
                        </li>
                        <li id="li"><a href="{{url('admin/mail')}}"><i class="fa fa-circle-o"></i>Mail Setup</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/classes')}}">
                        <i class="fa fa-location-arrow"></i> <span>Class</span>
                        <span class="pull-right-container">
                                   </span>
                    </a>

                </li>
                <li>
                    <a href="{{url('admin/classGroups')}}">
                        <i class="fa fa-location-arrow"></i> <span>Class Group</span>
                        <span class="pull-right-container">
                                   </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/subjects')}}">
                        <i class="fa fa-location-arrow"></i> <span>Subject</span>
                        <span class="pull-right-container">
                                   </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/units')}}">
                        <i class="fa fa-location-arrow"></i> <span>Unit</span>
                        <span class="pull-right-container">
                                   </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/videos')}}">
                        <i class="fa fa-location-arrow"></i> <span>Video</span>
                        <span class="pull-right-container">
                                   </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('layouts.message')

        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Developer : <a href="{{url('https://www.rojantamrakar.com.np')}}" target="_blank">Rojan Prasad
                    Tamrakar</a> Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; </strong> All rights
        reserved.
    </footer>
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('partials.popUpModal')
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!};
</script>

<!-- jQuery 3 -->
<script src="{{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js')}}"></script>
{{--{{ Html::script('AdminLTE/plugins/select2/select2.full.min.js') }}--}}

<script src="{{url('https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/select2/select2.full.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

{{--{{ Html::script('AdminLTE/plugins/select2/select2.full.min.js') }}--}}

<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('AdminLTE/bower_components/raphael/raphael.min.js')}}"></script>
{{--<script src="{{asset('AdminLTE/bower_components/morris.js/morris.min.js')}}"></script>--}}
<!-- Sparkline -->
<script src="{{asset('AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{--<script src="{{asset('AdminLTE/dist/js/pages/dashboard.js')}}"></script>--}}
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>

{{--<script src="{{asset('AdminLTE/bower_components/select2/dist/js/select2.full.min.js')}}"></script>--}}

<script src="{{asset('AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminLTE/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
<script src="{{asset('js/backend.js')}}"></script>

<script type="text/javascript"
        src="{{url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js')}}"></script>
<script type="text/javascript"
        src="{{url('https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js')}}"></script>

@yield('scripts')


<script>
    // $.widget.bridge('uibutton', $.ui.button);
    $(function () {
        $('#select2').select2();
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        $('#example1').DataTable({
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                'colvis'
            ]
        });
        $('#example2').DataTable({

        });
        $('#reservation').daterangepicker();
        $('.select2').select2();

    })

</script>
</body>
</html>
