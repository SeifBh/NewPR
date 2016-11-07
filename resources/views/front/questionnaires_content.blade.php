<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal2").modal('show');
  });
</script>

<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>




    <title> TEST  </title>
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



<!-- for Facebook -->          
<meta property="og:title" content="WELCOME TO WORK WITH TAG" />
<meta property="og:type" content="article" />
<meta property="og:image" content="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/hand.png" />
<meta property="og:url" content="http://theaccidentguys.co.uk/App/workwithTAG/INDEX.PHP" />
<meta property="og:description" content="Download our app" />
<link rel="icon" type="image/png" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png" sizes="16x16">

<!-- for Twitter -->          
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="" />
<link rel="stylesheet" type="text/css" href="/css/csshome.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/type.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/csshome.css">

<link rel="stylesheet" type="text/css" href="/css/myscutomizeCSS.css">
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>

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
#tossuss{
       font-size: 185px !important;
    color: rgb(255, 167, 0);   
}
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

    div#tryei {
    background: #fdfdfd;
    margin-bottom: 30px;
    padding: 20px;
    box-shadow: 10px 5px 20px 1px;
    border: 1px solid #000000;
    /* color: beige; */
    /* color: beige; */
}

#tag {
    color: rgb(212, 40, 40);
    /*    font-weight: bold;
    text-shadow: 2px 0 0 #cb2626, -2px 0 0 #d02828, 0 2px 0 #d52828, 0 -2px 0 #d52828, 1px 1px #d52828, -1px -1px 0 #d42828, 1px -1px 0 #cb2626, -1px 1px 0 #d02828;*/
    font-size: 30px;
    font: small-caps;
    font-kerning: initial;
    /* font-family: cursive; */
    font-stretch: extra-condensed;
    font-style: oblique;
    font-variant: small-caps;
    font-variant-ligatures: initial;
    font-weight: 900;
}
#detailsur{

    color: black;
}

</style>
</head>
<body>
        <?php $slugname =  $user->username  ?>

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
        <center><i id="tossuss" class="tossucss fa fa-exclamation-triangle" aria-hidden="true"></i></i></center>
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

        

@include('front.EI.head_EI')

@include('includes.nav')
    <div class="container-fluid">

        
        <div class="row" style="margin-top:10px;">
        @include('front.questionnaire.left_sidebar')

                  <div class="col-xs-12 col-md-9 col-lg-9 col-sm-12">
        <br>
                        <div class="container-fluid">
                            <div class="row" id="tryei">
                                    <div class="container-fluid row" id="titlesur">
                                    <?php $slugname = Auth::user()->username; ?> 
                                        <p class="pull-left"><a href="/@<?php echo $slugname ?>/questionnaires">All Lists</a></p>
                                            <center id="tag">{{ $title }}</center>
                                   </div>

                                    <div class="container-fluid row" id="detailsur">
                                    {{ $details }}
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="">
                                @include('front.list_questionnaires')
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="thumbnail"> 
                                        @include('front.Survey.content1')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>



</body>
</html>