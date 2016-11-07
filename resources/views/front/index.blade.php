@extends('layouts.def2')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

     <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css">
        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css">
        <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css">


       <script src="/noty-2.3.8/demo/jquery-1.7.2.min.js"></script>

        <!-- noty -->
        <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
        <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>

        <!-- Stylesheets -->
        <link rel="stylesheet" href="/f11_files/demo.css">
        <link rel="stylesheet" href="/f11_files/font-awesome.min.css">
        <link rel="stylesheet" href="/f11_files/j-forms.css">


        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css">
        <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css">
        <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css">
        <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
        <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>
        
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal2").modal('show');
  });
</script>

<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>



<title>Welcome - workwithTAG</title>
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



    body {
  background: url(/img/TAGIMG.png) no-repeat center center fixed !important;
      background-repeat: no-repeat;
    background-size: cover !important; 
  font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
  font-weight:300;
  color:#676767;
}


p {
    margin: 0 0 10px;
    line-height: 18px;
    font-size: 14px;
    color: black;
}
.seifprimary{

background: rgba(255, 0, 0, 0);
    font-size: 20px!important;
    /* background: #e41b24 !important; */
    background: -moz-linear-gradient(top, #e41b24 0%, #810712 100%)!important;
    border: 2px solid #dc1a22;
    color: red !important;
    /* background: -webkit-linear-gradient(top, #e41b24 0%,#810712 100%)!important; */
    /* background: linear-gradient(to bottom, #e41b24 0%,#810712 100%)!important; */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e41b24', endColorstr='#810712',GradientType=0 )!important;
    color: #e50007 !important;
    border-radius: 0;
    font-size: 30px !important;
    padding: 20px;
transition: opacity 0.5s;
-webkit-transition: all ease 0.5s;
-moz-transition: all ease 0.5s;
-o-transition: all ease 0.5s;
-ms-transition: all ease 0.5s ;
transition: all ease 0.5s ;

}
#brand:hover{
    background: gold !important;
}
.seifprimary:hover{

background:#d91a24;
color:white !important;
    border: 2px solid #dc1a22;
-webkit-transition: all ease 0.7s;
-moz-transition: all ease 0.7s;
-o-transition: all ease 0.7s;
-ms-transition: all ease 0.7s ;
transition: all ease 0.5s ;


}
body{
   /* background: url(http://theaccidentguys.co.uk/wp-content/uploads/2016/05/caabe25d-7440-46c1-bdbd-acc12f630ae2.png) no-repeat center center fixed;*/
    background-size: cover;
}
p{


margin: 0 0 10px;
    font-size: 17px;
    font-weight: 700*;
    font-weight: 700;
    text-align: justify;
    }
    #custom-search-input{
    border: solid 1px #E4E4E4;
    border-radius: 20px;
    background-color: #fff;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: #666666;
    padding: 0 8px 0 10px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}
#bodyworkwithtag{

    height: 100%;
}
#frontbanner{
    min-height: 100%;
}

#contentme{
    color: black;
    font-size: 17px;
}
#whyjoin {
    font-weight: 700;
    font-size: 23px;
    color: #b72428;
}
p#outofme {
    color: #b72428;
    font-weight: 700;
    font-family: sans-serif;
}

#whyjoin{
    font-weight: 700;
    font-size: 23px;
    color: #b72428;
}

#phonez{
   padding-top: 95px;
    bottom: 0;
}

code {
    padding: 2px 4px;
    font-size: 90%;
    color: #ffffff !important;
    background-color: #ff0049 !important;
    border-radius: 4px;
}


</style>

@if(Auth::check())

<div class="">
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
            //Account Created succefully
            generate('success', notification_html[4]);
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


@if(Session::has('flash_message2'))

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
            //Account Created succefully
            generate('success', notification_html[0]);
            // Verify your email
            generate('warning', notification_html[3]);
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

@if(Session::has('flash_message3'))

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

            generate('success', notification_html[1]);
            
            //generate('warning', notification_html[3]);
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






@if(Session::has('flash_message5'))

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

            generate('success', notification_html[2]);
            
            //generate('warning', notification_html[3]);
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
@if (Auth::check())

@endif






    @if(Auth::check())
        <?php $slugname =  Auth::user()->username  ?>
        @endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
            
@if(Auth::check())

@if((Auth::user()->date_day =='')&&(Auth::user()->date_month =='')&&(Auth::user()->date_year == ''))

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
@endif


<section class="frontbanner">
    <div class="container" >
        <div class="" style="background-color:rgba(255, 255, 255, 0);">
            <div class="row">

                

                    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <img style="background-color:rgba(255, 255, 255, 0) !important;border: 1px solid rgba(221, 221, 221, 0) !important;" class="img-thumbnail" src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/TAG-Logo-Large.png" width="350px" height="170px;">
<div class="row">
        <div class="">
                
                <span id="whyjoin">Welcome to The Accident Guys</span><br><br>
                <p>Thank you for downloading our Mobile App which will give you the potential to earn up to £25,000 per year as an Exempt Introducer.</p>
                <p>In order for us to complete our own Compliance and Due Diligence, we need to collect some further information from you by clicking the "Register today" button below.</p>

                <p>This part of the registration MUST be completed before your Mobile App application is made live and allow you full access to the App and all of it's features.</p>
                <p>The Accident Guys will not share or sell you data, this information is for our own records to ensure compliance is followed at all times, and to <b>prove</b> to our regulator should they require any review of our processes .</p>
                <p>Please take your time and ensure you complete all of the fields.</p>
                <p>There is also a small set of questions and answers to ensure you understand the rules of what you can and cannot do as an Exempt Introducer.</p>
                <p>We are excited to have you on board and there are a whole host of exciting things happening at The Accident Guys throughout 2016 and beyond. We will keep you updated as you application progresses which can be as quick as under 24 hours.</p>
                <p>We look forward to welcoming you to our team.</p>
                <p class="pull-right">
                    <a href="/auth/register">
                        <button class="btn btn-default  btn-lg seifprimary">Register today</button>
                    </a>
                </p>

        </div>
        




    </div>
                    </div>


                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <img id="phonez" src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/hand.png" >

                    </div>


            </div>

        </div>

</section>

@stop