<html>
<head>
    <title>Gyanko.com</title>
    <link rel="stylesheet" href="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/frontend.css')}}">
    <link rel="stylesheet" href="{{asset('AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link href="{{url('https://fonts.googleapis.com/css?family=Karla&display=swap')}}" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
</head>
<body>
{{--Navbar--}}
<div>
    @include('frontend.navbar')
</div>
{{--Navbar End--}}

{{--Maim banner--}}
<div>
    @include('frontend.banner')

</div>
<div>
    <hr style="border-top: 5px solid #21cae4;"/>
    @include('frontend.testimonial')
</div>
<div>
    @include('frontend.footer')
</div>
@include('frontend.login')
{{--End Main banner--}}
<script src="{{asset('AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{asset('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/frontend.js')}}"></script>

</body>
</html>