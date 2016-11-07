@extends('layouts.defaults')
@section('content')
        
        <title>Questionnaires</title>

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

<link rel="stylesheet" type="text/css" href="/css/csshome.css">
    <link rel="stylesheet" type="text/css" href="/css/register.css">



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
<style type="text/css">
		p#infotag {
    font-size: 35px;
    text-align: center;
    font-weight: 500;
    font-family: sans-serif;
}
</style>
<body>



					<br>
						<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
							
					      		@include('front.list_questionnaires')
					      	
						</div>
						<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
							<div class="thumbnail">
								<p id="infotag">
								Some text here.. <br>© &nbsp;&nbsp; <u>workwithTAG </u>
								 </p>
							</div>
						</div>



			</div>
 		</div>
 	</div>
</body>
@stop