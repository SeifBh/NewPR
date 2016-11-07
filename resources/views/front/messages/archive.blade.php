@extends('layouts.defaults')
@section('content')
<?php  $slugname = $user->username ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal2").modal('show');
  });
</script>

<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



<?php

      $id_user = Auth::user()->id;
        //return $id;


    $messages = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('status','=','archived')
                     ->orderBy('created_at', 'asc')->get();
                      $j = 0 ;
                      $count_new_msg = 0 ;

?>
                                @foreach( $messages as $message)
<?php
    $last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
                    ->where('msg_id','=',$message->id)
                    ->where('status','=','admin')
                    ->orderBy('created_at','desc')
                    ->value('seen');




                if($last_reply =='0')
                {
                  $j++ ;
                }

              $count_new_msg = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('seen','=','0')
                     ->where('role','admin')
                     ->count();


?>
@endforeach
<?php $resultme = $count_new_msg + $j  ?>
<title>
@if ($resultme !='0')
(<?php echo $resultme; ?>)
@endif
Messages >> Archives</title>

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

<style type="text/css">

.tossucss{
      font-size: 185px !important;
    color: rgb(255, 167, 0);
}

p#carff {
    font-size: 16px;
    font-weight: 700;
    font-family: sans-serif;
}

p#coop {
    font-size: 14px;
    font-weight: 700;
    font-family: sans-serif;
}
#commprof{

        border-radius: 0;
    background: white;
    color: #d42828;
    border: 1px solid #d42828;



}

.modal-header {
    min-height: 16.42857143px;
    padding: 15px;
    background: #ffa700;
    color: white !important;

}
.modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
    border-radius: 0px !important;
}


#commprof:hover{
      border-radius: 0;
    background: #d42828;
    color: white;
      -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  /* ...and now for the proper property */
  transition:.5s;
}



.fade-scale {
  transform: scale(0);
  opacity: 0;
  -webkit-transition: all .25s linear;
  -o-transition: all .25s linear;
  transition: all .25s linear;
}

.fade-scale.in {
  opacity: 1;
  transform: scale(1);
}


	.seifprimary {
    font-size: 20px!important;
    background: #e41b24 !important;
    background: -moz-linear-gradient(top, #e41b24 0%, #810712 100%)!important;
    background: -webkit-linear-gradient(top, #e41b24 0%,#810712 100%)!important;
    background: linear-gradient(to bottom, #e41b24 0%,#810712 100%)!important;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e41b24', endColorstr='#810712',GradientType=0 )!important;
    color: white !important;
}
.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    min-width: 100% !important;
    word-break: break-all !important;
}


table {
    table-layout: fixed;
  
}

th, td {
    padding:1m;
    border: 1px solid;
}

th {
    background-color:#6699FF;
    font-weight:bold;
}

tr {
    height:20px;
}

td {
    white-space: nowrap;
   
    overflow: hidden;
    text-overflow: ellipsis;   
}

td br{
    line-height: 0px;
    display:none;
}


.seifprimary:hover {
    background: #810712 !important;
    background: -moz-linear-gradient(top, #810712 0%, #e41b24 100%)!important;
    background: -webkit-linear-gradient(top, #810712 0%,#e41b24 100%)!important;
    background: linear-gradient(to bottom, #810712 0%,#e41b24 100%)!important;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#810712', endColorstr='#e41b24',GradientType=0 )!important;
}

tr.read.clickable-row {
    background: #b9d3f0;
}
tr.unread.clickable-row {
    background: white;
}


tr.read.clickable-row:hover {
    background: rgba(236, 236, 236, 0.45) !important;
    cursor: pointer;
}


#addevent {
box-shadow: none;
    background-color: #d14836;
    background-image: -webkit-linear-gradient(top,#dd4b39,#d14836);
    background-image: linear-gradient(top,#dd4b39,#d14836);
    border: 1px solid transparent;
    color: #fff;
    text-shadow: 0 1px rgba(0,0,0,0.1);
    text-transform: uppercase;
    padding: 8px;


}

#addevent:hover {
    opacity: 0.9;


}

</style>
 
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




    $("#addevent").click(function(){
        $("#composecontent").show();
    });
    $("#closemess").click(function(){
        $("#composecontent").hide();
    });
});

</script>

	
        <?php $slugme =  $user->username  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
	 		

@if(($user->date_day =='')&&($user->date_month =='')&&($user->date_year == ''))

<!-- Modal -->
<div id="myModal2" class="modal fade-scale fade" role="dialog" style="width:600px !important;    margin: 30px auto !important;">
  <div class="">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body">



        <div class="contain6">
        <center><i class="tossucss fa fa-exclamation-triangle" aria-hidden="true"></i></i></center>
        <p id="carff">
           Please complete your profile by adding carefully your personal details
        </p>
        <p>
          <center><a href="/@<?php echo $slugname ?>/edit" class="btn btn-default" id="commprof"> Complete profile </a></center>
        </p>

        </div>



      </div>

    </div>

  </div>
</div>
@endif
<style type="text/css">
  .xx2 {
    min-width: 70px;
    min-height: 50px !important;
        line-height: 3;
}

</style>
	 			

		     	<div class="row" style="margin:10px;">
					<div class="thumbnail">
						<div class="row" style="margin:20px;">
						<p class="container-fluid text-center">
						


            <div class="container-fluid pull-left">

              <a href="/@<?php echo $slugme; ?>/messages" class="btn btn-default xx2" > <i class="fa fa-long-arrow-left " aria-hidden="true" style="line-height:40px;"></i>INBOX</a>



            </div>


            <div class="container-fluid pull-right">
                          <button href="#" class="btn btn-danger xx2" id="addevent"><center>NEW MESSAGE</center></button>


            </div>


						</p>
						</div>
						<hr>
						<div class="container-fluid row">
							<table class="table">
							  <thead class="thead-default" style="background: #232664;">
							    <tr >
							      <th style="color:white !important;" >From</th>
							      <th style="color:white !important;" colspan="2">Subject</th>
							      <th style="color:white !important;" >action</th>
							      <th style="color:white !important;" >Date & Time</th>

							    </tr>
							  </thead>
							  <tbody>

							  @foreach( $messages as $message)
<?php

		$id_last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','admin')
										->orderBy('created_at','desc')
										->value('id');
										

		$last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','admin')
										->orderBy('created_at','desc')
										->value('seen');


		$last_reply_text = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)

										->orderBy('created_at','desc')
										->value('content');


		$has_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','admin')
										->count() > 0;

		$has_reply2 = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										
										->count() > 0;




		$seen_msg = DB::table('contacts')->where('user_id','=',$message->user_id)
										->where('id','=',$message->id)
										->where('role','=','admin')
										->value('seen') ;


		$exist_img = DB::table('contacts')->where('user_id','=',$message->user_id)
										 ->where('id','=',$message->id)
										 ->where('role','admin')
										 ->orWhere('content', 'LIKE', '%<img%')
										 ->count() > 0 ;
										 

        $img_msg = DB::table('contacts')
							            ->where('user_id','=',$message->user_id)
										->where('id','=',$message->id)
           								->where('content', 'LIKE', '%<img%')
           								->orWhere('content', 'LIKE', '%<link%')
            							->value('id');

        $img_reply = DB::table('reply')
							            ->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
           								->where('content', 'LIKE', '%<img%')
           								->orWhere('content', 'LIKE', '%<link%')
            							->value('id');


    $last_reply_date = DB::table('reply')->where('user_id','=',$message->user_id)
                    ->where('msg_id','=',$message->id)
                    
                    ->orderBy('created_at','desc')
                    ->value('created_at');


?>
@if (($seen_msg =='0') )

	<tr class='read clickable-row'  style="background-color:#CEFFCE;" data-href="/@<?php echo $slugme ?>/messages/e/{{  $message->id }}" >

@elseif (($has_reply =='0') || ($has_reply =='') && ($seen_msg =='1'))
		<tr class='unread clickable-row'  style="background-color:#b9d3f0;"  data-href="/@<?php echo $slugme ?>/messages/e/{{  $message->id }}" >
@else
	@if(($last_reply == '1') )
							    <tr class='read clickable-row' data-href="/@<?php echo $slugme ?>/messages/{{  $message->id }}_{{$id_last_reply}}" >

	@else
								 <tr class='unread clickable-row' style="background-color:#CEFFCE" data-href="/@<?php echo $slugme ?>/messages/{{  $message->id }}_{{$id_last_reply}}" >
	@endif

@endif
							      <td>

							      <b>Admin</b>
							      </td>

								  <td colspan="2">{{ $message->subject }}


							     

							      
								  </td>



									<td>

 {!! Form::open(['action' => 'ContactController@publish_user', 'method' => 'post', 'role' => 'form']) !!} 
<input type="hidden" name="id_messageme" value="{{$message->id}}">

<button class="btn btn-default"> publish</button>
 {!! Form::close() !!}


									</td>

							      <td>
							      <?php $date = new DateTime('now', new DateTimeZone('Europe/London')); 
							     $date_now =  $date->format('d F Y');

							      ?>

							      @if($has_reply2 =='1')
							      		@if ($date_now == date('d F Y', strtotime($last_reply_date)) )
								      	{{ date('H:i', strtotime($last_reply_date)) }}
								      	@else
								      	{{ date('d F Y', strtotime($last_reply_date)) }}
								      	@endif

							      @else
								      @if ($date_now == date('d F Y', strtotime($message->created_at)) )
								      	{{ date('H:i', strtotime($message->created_at)) }}
								      	@else
								      	{{ date('d F Y', strtotime($message->created_at)) }}
								      	@endif
							      @endif
							      </td>
	    
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
