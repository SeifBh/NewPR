@extends('layouts.def2')
@section('content')
        
        <title>Update profile</title>

        <!-- Your META here -->
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>
        <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css"/>


       <script src="/noty-2.3.8/demo/jquery-1.7.2.min.js"></script>

        <!-- noty -->
        <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
        <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/f11_files/demo.css">
        <link rel="stylesheet" href="/f11_files/font-awesome.min.css">
        <link rel="stylesheet" href="/f11_files/j-forms.css">


        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>
        <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css"/>
        <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
        <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>


        <script type="text/javascript" src="/js/type.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/style.css">

  <!--
        <link rel="stylesheet" type="text/css" href="/css/settings.css">


!-->


<body>

	<div class="container-fluid">
		<div class="row" style="margin-top:10px;">
			@include('front.questionnaire.left_sidebar')
			 <div class="col-xs-12 col-md-9 col-lg-9 col-sm-12">
	 			@include('front.complete_profiles')
			</div>
 		</div>
 	</div>
</body>
@stop