<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="img/fav.png">
		<link rel="apple-touch-icon" href="pages/ico/60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">
		<meta name="description" content="" />
		<meta name="author" content="" />
		<meta name="keywords" content="" />
		<title>
			Blele 1
		</title>

		<!-- ---------------------- -->
		<!-- START CSS -->
			@include('home.partials.css')
		<!-- END CSS -->
		<!-- ---------------------- -->

	</head>
	<body>

		<!-- ---------------------- -->
		<!-- START HEADER -->
			@include('home.partials.header')
		<!-- END HEADER -->
		<!-- ---------------------- -->

		<!-- ---------------------- -->
		<!-- START BANNER -->
			@include('home.partials.banner')
		<!-- END BANNER -->
		<!-- ---------------------- -->

		<div class="main-wrapper">


			<!-- ---------------------- -->
			<!-- ---------------------- -->
			<!-- START CONTENT -->
			<!-- ---------------------- -->
			<!-- ---------------------- -->


			@yield('content')


			<!-- ---------------------- -->
			<!-- ---------------------- -->
			<!-- END CONTENT -->
			<!-- ---------------------- -->
			<!-- ---------------------- -->

			
		<!-- ---------------------- -->
		<!-- START FOOTER -->
			@include('home.partials.footer')
		<!-- END FOOTER -->
		<!-- ---------------------- -->

		</div>

			
		<!-- ---------------------- -->
		<!-- START JS -->
			@include('home.partials.js')
		<!-- END JS -->
		<!-- ---------------------- -->
		
	</body>
</html>
