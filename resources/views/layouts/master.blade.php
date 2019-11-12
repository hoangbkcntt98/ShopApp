<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> @yield('title')</title>
    <link href="{{ asset('layouts/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('layouts/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('layouts/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('layouts/css/responsive.css') }}" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('layouts/images') }}/ico/favicon.ico">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head><!--/head-->

<body>
	<!--/header-->
	
	@include("layouts.elements.top")
	<!--/slider-->
	<?php
			$r = Route::currentRouteName();
			if(($r!="login"))
			{
				?>@include('layouts.elements.slide')"<?php
			}
		?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include("layouts.elements.sidebar")
				</div>
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	@include("layouts.elements.footer")
	<!--/Footer-->
    <script src="{{ asset('layouts/js/jquery.js') }}"></script>
	<script src="{{ asset('layouts/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('layouts/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('layouts/js/price-range.js') }}"></script>
    <script src="{{ asset('layouts/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('layouts/js/main.js') }}"></script>
</body>
</html>