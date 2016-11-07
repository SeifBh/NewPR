<!DOCTYPE html>
<html>
<head>
	<meta property="og:title" content="WELCOME TO WORK WITH TAG" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/hand.png" />
	<meta property="og:url" content="http://theaccidentguys.co.uk/App/workwithTAG/INDEX.PHP" />
	<meta property="og:description" content="Download our app" />
	<title> {{ $user->first_name }} ({{ $user->username }}) </title>
	<!-- for Facebook -->          

	<link rel="icon" type="image/png" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png" sizes="16x16">

	<!-- for Twitter -->          
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
  	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  	<!--Notification!-->
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>
   	<script src="noty-2.3.8/demo/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
    <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>

  	<!--JQuery!-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="/js/type.js"></script>!-->
	<link rel="stylesheet" type="text/css" href="/css/guess.css">
	<script type="text/javascript">
		$(function(){

		$('#slide-submenu').on('click',function() {			        
	        $(this).closest('.list-group').fadeOut('slide',function(){
	        	$('.mini-submenu').fadeIn();	
	        });
	        
	      });

		$('.mini-submenu').on('click',function(){		
	        $(this).next('.list-group').toggle('slide');
	        $('.mini-submenu').hide();
		})
	})
	</script>
</head>

<body>
@include('includes.nav')
	<div class="container-fluid">
                          <?php $slugme =  $user->username  ?>


		<div class="row" style="margin-top:10px;">
		@include('front.questionnaire.left_sidebar')
      <div class="col-xs-12 col-md-9 col-lg-9 col-sm-12">
        

 			<div class="row" id="rowS1">
 				<div  class="thumbnail" id="contentuser">
					@yield('contenue')
 				</div>
 			</div>
        
      </div>
	</div>
</div>
</body>
</html>