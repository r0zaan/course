<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{asset('img/cg.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Requisition</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('AdminLTE/plugins/iCheck/square/blue.css')}}">
    <style>
        .error-message{
            color: red;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{url('/')}}"><b>Course</b>Nepal</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{action('Login\AuthsController@loginPost')}}" method="post" class="ajax-form-post">
            {{csrf_field()}}
            <div class="form-group has-feedback">
                <input type="email"  name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span class="error-message"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span class="error-message"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
            <div id="match" style="color:red">

            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<script type="text/javascript">
    (function ($) {

        $(document).on('submit','.ajax-form-post',function(){
            $( '.error-message' ).each(function( ) {
                $(this).removeClass('make-visible');
                $(this).html('');
            });
            $( 'input' ).each(function( ) {
                $(this).removeClass('errors');
            });
            var url = $(this).attr('action');
            var current_form = $(this);
            var request_data = {};
            current_form.find('[name]').each(function () {
                request_data[$(this).attr('name')] = $(this).val();

            });
            $.post(url, request_data,function (response) {
                console.log(response);
                if(response.status === 'success'){
                    window.location.href = response.return_url;
                }
                if(response.status === 'fail'){
                    for(var key in response.errors){
                        var error_message = response.errors[key];
                        var error_form_field = current_form.find("[name="+key+"]");
                        error_form_field.addClass('errors');
                        error_form_field.parent().find('.error-message').addClass('make-visible').html(error_message);
                    }
                    if(response.data != null){
                        $('#match').html(response.data);
                    }
                }

            });

            return false;

        });

        $(document).on('keyup','.ajax-form-post',function(){
            $('#match').html('');
        });
    })(jQuery);
</script>
</body>
</html>
