@extends('back.template')

<!DOCTYPE html>
<html>
<head>
	<title> Admin | Messages </title>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--
<script type="text/javascript">
	(function () {
    $(function () {
        return $('[data-toggle]').on('click', function () {
            var toggle;
            toggle = $(this).addClass('active').attr('data-toggle');
            $(this).siblings('[data-toggle]').removeClass('active');
            return $('.surveys').removeClass('grid list').addClass(toggle);
        });
    });
}.call(this));

</script>!-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/css/csshome.css">
<link rel="stylesheet" type="text/css" href="/css/messages.css">


    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>
    <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css"/>


   <script src="noty-2.3.8/demo/jquery-1.7.2.min.js"></script>

    <!-- noty -->
    <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
    <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>


<!-- for Facebook -->          
<meta property="og:title" content="WELCOME TO WORK WITH TAG" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/hand.png" />
<meta property="og:url" content="http://theaccidentguys.co.uk/App/workwithTAG/INDEX.PHP" />
<meta property="og:description" content="Download our app" />
<link rel="icon" type="image/png" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png" sizes="16x16">
<!--
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/type.js"></script>-->   
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
@section('main')
		<div class="container-fluid">
			<div class="col-xs-12 col-md-9 col-lg-9 col-sm-12">

		     	<div class="row" style="margin:10px;">
					<div class="thumbnail">

						<hr>
						<div class="container-fluid">

						<div class="thumbnail">
							{{ $subject }}
						</div>

						<div class="thumbnail">
							{{ $content }}
						</div>


						</div>
						

				</div>
        </div>
    </div>
@stop
</body>
</html>