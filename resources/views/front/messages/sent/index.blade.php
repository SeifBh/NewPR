@extends('layouts.defaults')
@section('content')
<head>
<title>Sent</title>

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
<link rel="stylesheet" type="text/css" href="/css/messages.css">
	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/css/style.css"></script>


    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>
    <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css"/>


   <script src="/noty-2.3.8/demo/jquery-1.7.2.min.js"></script>

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
        	{!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') !!}


 
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
<script>
$(document).ready(function(){
	        $("#composecontent").hide();
	        $("#smallcompose").hide();

	    $("#sm_c").click(function(){
        $("#smallcompose").hide();
        $("#composecontent").hide();



    });
	    $("#sm_r").click(function(){
        $("#smallcompose").hide();
        $("#composecontent").show();



    });











    $("#reducesize").click(function(){
        $("#smallcompose").show();
        	        $("#composecontent").hide();

    });

    $("#m1").click(function(){
        $("#smallcompose").hide();
        	        $("#composecontent").show();

    });


    $("#m2").click(function(){
        $("#smallcompose").show();
        	        $("#composecontent").hide();

    });




    $("#newmessage").click(function(){
        $("#composecontent").show();
    });
    $("#closemess").click(function(){
        $("#composecontent").hide();
    });
});

</script>

	
</head>


<body>

	<div class="container-fluid">
		<div class="row" style="margin-top:10px;">
			@include('front.questionnaire.left_sidebar')
			 <div class="col-xs-12 col-md-9 col-lg-9 col-sm-12">
                         <?php $slugme =  $user->username  ?>

		     	<div class="row" style="margin:10px;">
					<div class="thumbnail">
						<div class="row" style="margin:20px;">
						<p class="container-fluid text-center">
						<a href="/@<?php echo $slugme ?>/messages" id="marginlink">Inbox</a>
						<a href="/@<?php echo $slugme ?>/messages/sent" id="marginlink">Sent</a>
						<a href="#" id="marginlink">Deleted</a>
						<a href="#" class="container-fluid pull-right" id="newmessage">+NEW</a>
						</p>
						</div>
						<hr>
						<h2 class="pull-left"><b id="inboxstyle">SENT*** </b></h2>
						<div class="container-fluid row">
							<table class="table">
							  <thead class="thead-default" style="background: #f1f1f1;">
							    <tr>
							      <th colspan="3">From</th>
							      <th>Subject</th>
							      <th>Date & Time</th>

							    </tr>
							  </thead>
							  <tbody>
							  @foreach ($contacts as $contact)
<?php

		$id_last_reply = DB::table('reply')->where('user_id','=',$contact->user_id)
										->where('msg_id','=',$contact->id)
										->where('status','=','admin')
										->orderBy('created_at','desc')
										->value('id');
										

		$last_reply = DB::table('reply')->where('user_id','=',$contact->user_id)
										->where('msg_id','=',$contact->id)
										->where('status','=','admin')
										->orderBy('created_at','desc')
										->value('seen');

		$has_reply = DB::table('reply')->where('user_id','=',$contact->user_id)
										->where('msg_id','=',$contact->id)
										->where('status','=','admin')
										->count() > 0;

		$seen_msg = DB::table('contacts')->where('user_id','=',$contact->user_id)
										->where('id','=',$contact->id)
										->where('role','=','admin')
										->value('seen') ;

?>

@if (($seen_msg =='0') )

	<tr class='read clickable-row'  style="background-color:rgba(241, 234, 0, 0.22);" data-href="/@<?php echo $slugme ?>/messages/e/{{  $contact->id }}" >

@elseif (($has_reply =='0') || ($has_reply =='') && ($seen_msg =='1'))
		<tr class='read clickable-row' style="" data-href="/@<?php echo $slugme ?>/messages/e/{{  $contact->id }}" >
@else
	@if(($last_reply == '1') )
							    <tr class='read clickable-row' data-href="/@<?php echo $slugme ?>/messages/sent/{{  $contact->id }}_{{$id_last_reply}}" >

	@else
								 <tr class='unread clickable-row' style="background-color:rgba(241, 234, 0, 0.22);" data-href="/@<?php echo $slugme ?>/messages/sent/{{  $contact->id }}_{{$id_last_reply}}" >
	@endif

@endif
								<td colspan="3">Me</td>
							      <td >
									{{ $contact->subject }}
							      </td>




							      <td>{{ $contact->created_at}}</td>

							      						    
							  		<script type="text/javascript">

										jQuery(document).ready(function($) {
									    $(".clickable-row").click(function() {
									        window.document.location = $(this).data("href");
									    });
									});
									</script>
							    </tr>	
									@endforeach
					    


							  </tbody>
							</table>
						</div>
					</div>
				</div>

								{!! Form::open(['url' => 'contact', 'method' => 'post', 'role' => 'form']) !!}	

				<div id="smallcompose"  class="panel-heading composeme" style="background:black;color:white">
					<span id="m1"> New message</span>

					<i id="sm_c" class="pull-right fa fa-times" aria-hidden="true"></i>
					<!--<i id="sm_f" class="pull-right fa fa-heart" aria-hidden="true"></i>!-->
					<i id="sm_r" class="pull-right fa fa-minus" aria-hidden="true"></i>
				</div>

				<div  class="composeme" id="composecontent">
					<div class="panel-heading" id="heading5" style="background:black;color:white">

					<span id="m2"> New message</span>
					<i id="closemess" class="pull-right fa fa-times" aria-hidden="true"></i>
					<!--<i id="sm_f" class="pull-right fa fa-heart" aria-hidden="true"></i>!-->
					<i id="reducesize" class="pull-right fa fa-minus" aria-hidden="true"></i>
					</div>
					<div class="body">
						<div class="">
						
							<div class="">
								  
								  <input class="form-control" id="prependedInput" type="text" placeholder="workwithTAG ADMIN" value="TO : workwithTAG ADMIN" readonly>
								
							</div>

							<div class="">
								<input type="text" class="form-control" name="subject" placeholder="Subject">
							</div>

							<div class="">

							<textarea name="content" rows="5" class="form-control"></textarea>

							</div>
						</div>
					</div>
					<div class="footer"  >
						<div class="container-fluid" >
							<div class="row"><button class="btn btn-primary" >Send</button></div>
						</div>
					
					</div>
				</div>
			
								<input type="hidden" class="form-control" name="name" placeholder="Avaible number" value="saif">
								<input type="hidden" class="form-control" name="email" placeholder="Avaible number" value="bel@gmail.com">
								<input type="hidden" class="form-control" name="message" placeholder="Avaible number" value="hellome">

							{!! Form::close() !!}


		@if(Session::has('message_sent'))

<div class="container">
  <div class="span4 pull-right">
    <div class="alert alert-danger fade">
      <button type="button" class="close" data-dismiss="alert">×</button>
    <script type="text/javascript">


        function generate(type, text) {

            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topLeft',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated bounceInLeft',
                    close : 'animated bounceOutLeft',
                    easing: 'swing',
                    speed : 500
                }
            });
            console.log('html: ' + n.options.id);
        }

        function generateAll() {
            //Message sent
            generate('success', notification_html[6]);
            // Verify your email
           // generate('error', notification_html[1]);
           // generate('information', notification_html[2]);
//            generate('notification');
//            generate('success');
        }

        $(document).ready(function () {

            setTimeout(function() {
                generateAll();
            }, 500);

        });

    </script>
    

    </div>
  </div>
</div>
@endif





			</div>
 		</div>
 	</div>
</body>

		<script>
	var config = {
		codeSnippet_theme: 'Monokai',
		language: '{{ config('app.locale') }}',
		filebrowserBrowseUrl: '{!! url($url) !!}',
		height: 100,

		toolbarGroups: [
			{ name: 'links' },
			{ name: 'insert' },
			//'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			//{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
			{ name: 'styles' },
			{ name: 'colors' }
		]
	};


	config['height'] = 230;		

	CKEDITOR.replace( 'content', config);

	$("#title").keyup(function(){
			var str = sansAccent($(this).val());
			str = str.replace(/[^a-zA-Z0-9\s]/g,"");
			str = str.toLowerCase();
			str = str.replace(/\s/g,'-');
			$("#permalien").val(str);        
		});

  </script>
@stop
