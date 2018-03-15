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
			@include('admin.partials.css')
		<!-- END CSS -->
		<!-- ---------------------- -->

	</head>
  <body class="fixed-header menu-pin"> 

		<!-- ---------------------- -->
    <!-- BEGIN SIDEBAR -->
		@include('admin.partials.sidebar')
    <!-- END SIDEBAR -->
		<!-- ---------------------- -->

		<!-- START PAGE-CONTAINER -->
		<div class="page-container">

		<!-- ---------------------- -->
		<!-- START HEADER -->
			@include('admin.partials.header')
		<!-- END HEADER -->
		<!-- ---------------------- -->

    <!-- BEGIN SIDEBAR -->
		<!-- START PAGE CONTENT WRAPPER -->
		<div class="page-content-wrapper">
		  <!-- START PAGE CONTENT -->
		  <div class="content">

		<!-- ---------------------- -->
		<!-- START JUMBOTRON -->
				@include('admin.partials.jumbotron')
		<!-- END JUMBOTRON -->
		<!-- ---------------------- -->

    <!-- ---------------------- -->
    <!-- ---------------------- -->
    <!-- ---------------------- -->
          <!-- BEGIN PLACE PAGE CONTENT HERE -->

    			<!-- ---------------------- -->
					<!-- START CONTENT -->
					@yield('content')
					<!-- END CONTENT -->
    			<!-- ---------------------- -->

          <!-- END PLACE PAGE CONTENT HERE -->
    <!-- ---------------------- -->
    <!-- ---------------------- -->
    <!-- ---------------------- -->

        </div>
        <!-- END CONTAINER FLUID -->


      </div>
      <!-- END PAGE CONTENT -->

		<!-- ---------------------- -->
		<!-- START FOOTER -->
				@include('admin.partials.footer')
		<!-- END FOOTER -->
		<!-- ---------------------- -->

		</div>
		<!-- END PAGE CONTENT WRAPPER -->
	 </div>
	 <!-- END PAGE CONTAINER -->

	 <!-- ---------------------- -->
	 	 <!--START QUICKVIEW -->
			@include('admin.partials.quickview')
	 <!--END QUICKVIEW -->
	 <!-- ---------------------- -->
	 <!--START OVERLAY -->
			@include('admin.partials.overlay')
	 <!--END OVERLAY -->
	 <!-- ---------------------- -->
	 <!-- START JS -->
			@include('admin.partials.js')
	 <!-- END JS -->
	 <!-- ---------------------- -->

  </body>
</html>