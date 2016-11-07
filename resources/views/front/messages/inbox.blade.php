@extends('layouts.def2')
@section('content')
<head>
<title>Inbox</title>

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
s
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
a{
        word-wrap: break-word;
}

div#panme {
    /* background: #fafafa; */
    padding: 5px;
    box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
    color: white;
    padding: 15px 20px;
    /* border: 1px solid #e5e5e5; */
    background-color: #d42828;
    border-radius: 20px 0px 20px 20px;
    margin-bottom: 10px;
        word-break: break-all;
}





.thubmnail4 {
    background: red;
    background: #fafafa;
    padding: 5px;
        word-break: break-all;
    box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
    box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
    /* color: white; */
    padding: 15px 20px;
    margin-bottom: 10px;
    /* border: 1px solid #e5e5e5; */
    /* background-color: #2095FE; */
    border-radius: 20px 0px 20px 20px;
    border: 1px solid #e5e5e5;
       border-radius: 0px 20px 20px 20px !important;
}
textarea {
  width: 100%;
  padding: 0.5rem;
  font-size: 15px;
  border: 1px solid #D9D9D9;
  border-radius: 3px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
  min-height: 100px;
  margin-bottom: 1rem;
}
#headhead {
    background-color: #262261;
    color: white;
    font-size: 25px;
    text-align: center;
    font-weight: 700;
}

table{
    width: 100% !important;
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



    $("#addevent").click(function(){
        $("#composecontent").show();
    });
    $("#closemess").click(function(){
        $("#composecontent").hide();
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


?>
@endforeach

    <div class="container-fluid">
        <div class="row" style="margin-top:10px;">
            @include('front.questionnaire.left_sidebar')
             <div class="col-xs-12 col-md-9 col-lg-9 col-sm-12">
                
                                          <?php $slugme =  $user->username  ?>

                <div class="row" style="margin:10px;">
                    <div class="thumbnail">

<style type="text/css">
  .xx2 {
    min-width: 70px;
    min-height: 50px !important;
        line-height: 3;
}

</style>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <?php $slugname =  Auth::user()->username  ?>



     <?
        $has_replyz = DB::table('reply')->where('user_id','=',$id_user)
                                        ->where('msg_id','=',$id_message)
                                        ->where('status','=','admin')
                                        ->count() > 0;
     ?>                   
          @if($has_replyz)
                    
<script>





$(document).ready(function(){
    $("#refreshMes, #powerme").on("click", function() {

<?php

      $id_user = Auth::user()->id;
        //return $id;


    $messages = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('status','<>','archived')
                     ->orderBy('updated_at', 'desc')->get();
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

  $("#refreshMes").removeClass('btn-primary');
  $("#refreshMes").addClass('btn-warning');
  $("#powerme").removeClass('btn-primary');
  $("#powerme").addClass('btn-warning');
  $("#refbt").addClass('fa-spin');
  $("#refbt2").addClass('fa-spin');
  $( "#contentmessages" ).html('' );
  $( "#contentmessages" ).html('<center><i class="fa fa-spinner fa-spin fa-5x" aria-hidden="true" style="font-size:105px !important;"></i></center>' );

  <?php
        $id_lr = DB::table('reply')->where('user_id','=',$id_user)
                                        ->where('msg_id','=',$id_message)
                                        ->where('status','=','admin')
                                        ->orderBy('id','desc')
                                        ->value('id');

                                        ?>



$.ajax({
        type:"get",
        resultme :<?php echo $resultme ;  ?>,
        url:"http://workwithtag.theaccidentguys.co.uk/@<?php echo $slugname ;  ?>/messages/loadreply/{{$id_message}}_{{$id_lr}}",

success:function(data){

  console.log(data);
  $( "#replyssUS" ).html( data );
  $("#powerme").addClass('btn-primary');
  $("#powerme").removeClass('btn-warning');
  $("#refreshMes").addClass('btn-primary');
  $("#refreshMes").removeClass('btn-warning');
  $("#refbt").removeClass('fa-spin');
  $("#refbt2").removeClass('fa-spin');

        }
    }); 
    });
});
</script>

@else
<script>
<?php
 $id_user = Auth::user()->id;
$messages = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('status','<>','archived')
                     ->orderBy('updated_at', 'desc')->get();
$j = 0 ;
$count_new_msg = 0 ;
?>
$(document).ready(function(){
    $("#refreshMes, #powerme").on("click", function() {
	$("#refbt").addClass('fa-spin');
	$("#refbt2").addClass('fa-spin');

	$("#refreshMes").removeClass('btn-primary');
	$("#refreshMes").addClass('btn-warning');

              $("#powerme").removeClass('btn-primary');
              $("#powerme").addClass('btn-warning');


    $.ajax({
            type:"get",
            url:"http://workwithtag.theaccidentguys.co.uk/@<?php echo $slugname ;  ?>/messages/testthisfun/{{$id_message}}",
                 



        success:function(data){
		console.log(data);
  		$( "#replyssUS" ).html( data );
			 $("#refbt").removeClass('fa-spin');
             $("#refbt2").removeClass('fa-spin');


              $("#powerme").addClass('btn-primary');
              $("#powerme").removeClass('btn-warning');



              $("#refreshMes").addClass('btn-primary');
  $("#refreshMes").removeClass('btn-warning');

        }
    }); 
    });
});
</script>
@endif




            <div class="container-fluid pull-left">

              <a href="/@<?php echo $slugme; ?>/messages" class="btn btn-default xx2" id="btnahref"> <i class="fa fa-long-arrow-left " aria-hidden="true" style="line-height:40px;"></i></a>

              <button href="#" class="btn btn-primary xx2" id="refreshMes"><center><i id="refbt" class="fa fa-refresh" aria-hidden="true"></i></center></button>
              <a href="/@<?php echo $slugme; ?>/messages/archive" class="btn btn-default xx2" >Archived message(s)</a>
            </div>


            <div class="container-fluid pull-right">
                          <button href="#" class="btn btn-danger xx2" id="addevent"><center>NEW MESSAGE</center></button>


            </div>


                       

             
                        <div class="container-fluid">
                             <div class="col-md-12 col-lg-12">
                                <div class="row">
                                   <div class="pull-left">
                                        <h2><b id="inboxstyle" style="padding:15px;">{{ $subject }} </b></h2>
                                   </div>

                                   <div class="pull-right">
                                        <u> {{ date('d F, Y - H:i', strtotime($created_at)) }} </u>
                                   </div>
                                   
                                </div>
                            </div>
                        </div>
                      <hr>       
                        



                        <div class="container-fluid" style="margin:15px;">
                            <div class="row" >
                                
                                    <pre>{!! $content !!}</pre>
                                
                            </div>
                        </div>
                    </div>


                    <div id="replyssUS">

                                @foreach( $replys as $reply)
                                <div class="" id="">
                                    @if($reply->status != 'admin')
                  <div class="row">
                        <div class="thubmnail4 col-lg-offset- col-md-8 col-lg-8" >
                            <div class=""  title="{{$reply->created_at}}">
                                   <b> Me  :</b> {!! $reply->content !!}
                                   <br>
                                 <span class="pull-right">{{ date('d F, Y - H:i', strtotime($reply->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                                    @else
                  <div class="row">
                        <div class="col-lg-offset-4 col-md-8 col-lg-8" id="panme">
                            <div class="thubmnail" title="{{$reply->created_at}}" >
                                  <b> Admin  :</b>  {!! $reply->content !!}
                                  <br>
                                 <span class="pull-right">{{ date('d F, Y - H:i ', strtotime($reply->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                                    @endif
                                </div>
                                @endforeach

                    </div>


                          <div class="row">
                          <center>  <button  class="btn btn-primary xx2" id="powerme"><center><i id="refbt2" class="fa fa-spinner" aria-hidden="true"></i>LOAD NEW MESSAGES</center></button></center>
                          </div>
                          <br>

                <div class="row thumbnail">
        {!! Form::open(['action' => 'ContactController@ReplyUserToAdmin', 'method' => 'post', 'role' => 'form']) !!} 
                        <input type="hidden" name="id_message" value="{{ $id_message }}"> 
                        <input type="hidden" name="id_admin" value="1">
<textarea id="message"  name="content_reply" placeholder="Write your message here..." required></textarea>
             <center>
             <button class=" btn btn-primary" style="margin:5px;">
                 REPLY
             </button>
             </center>

         {!! Form::close() !!}
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

        ]
    };




    CKEDITOR.replace( 'content_reply', config);

    $("#title").keyup(function(){
            var str = sansAccent($(this).val());
            str = str.replace(/[^a-zA-Z0-9\s]/g,"");
            str = str.toLowerCase();
            str = str.replace(/\s/g,'-');
            $("#permalien").val(str);        
        });

  </script>


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
