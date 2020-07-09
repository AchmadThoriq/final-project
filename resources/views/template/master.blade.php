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
</head>
<body >

	<header>
		@include('template.header')
	</header>

	<div class="slider"></div><!-- slider -->
	
	@yield('content')


	<footer>

		@include('template.footer')
	</footer>


	<!-- SCIPTS -->

	<script src="{{asset('common-js/jquery-3.1.1.min.js')}}"></script>

	<script src="{{asset('common-js/tether.min.js')}}"></script>

	<script src="{{asset('common-js/bootstrap.js')}}"></script>

	<script src="{{asset('common-js/scripts.js')}}"></script>

	@stack('scripts')

</body>
</html>
