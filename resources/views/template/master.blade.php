<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>TITLE</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="{{asset('common-css/bootstrap.css')}}" rel="stylesheet">

	<link href="{{asset('common-css/ionicons.css')}}" rel="stylesheet">

	<link href="{{asset('layout-1/css/styles.css')}}" rel="stylesheet">

	<link href="{{asset('layout-1/css/responsive.css')}}" rel="stylesheet">
	
	@stack('style')
	@stack('scripts-head')
</head>
<body >

	@include('template.header')
	<div class="slider"></div>
	@yield('content')

	@include('template.footer')

	<!-- SCIPTS -->

	<script src="{{asset('common-js/jquery-3.1.1.min.js')}}"></script>

	<script src="{{asset('common-js/tether.min.js')}}"></script>

	<script src="{{asset('common-js/bootstrap.js')}}"></script>

	<script src="{{asset('common-js/scripts.js')}}"></script>
	@stack('scripts')

</body>
</html>
