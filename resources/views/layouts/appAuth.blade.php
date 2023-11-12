<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/img/favicon.ico')}}">
    <title>{{env('APP_NAME')}} | @yield('title','Page Name')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{asset('public/assets/js/html5shiv.min.js')}}"></script>
		<script src="{{asset('public/assets/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>
    
    @yield('content')
    
    <script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets/js/app.js')}}"></script>
    <script>  
		@if(Session::has('success'))  
				toastr.success("{{ Session::get('success') }}");  
		@endif  
		@if(Session::has('info'))  
				toastr.info("{{ Session::get('info') }}");  
		@endif  
		@if(Session::has('warning'))  
				toastr.warning("{{ Session::get('warning') }}");  
		@endif  
		@if(Session::has('error'))  
				toastr.error("{{ Session::get('error') }}");  
		@endif  
		</script>  
</body>


<!-- login23:12-->
</html>