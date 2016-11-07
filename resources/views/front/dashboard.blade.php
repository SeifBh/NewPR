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


<title>Dashboard | TAG</title>
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

    #t1{
            background: #e8e8e9;
    box-shadow: 3px 7px 20px 1px;
    border: 2px solid white;
    border-radius: 20px;
    }

    div#headerportal {
    background: #5d5e60;
    color: white;
    /* text-align: center; */
    /* margin: 10px; */
    border-radius: 0px !important;
    padding: 10px;
}

.panel-default {
    border-color: #ddd;
    border: 1px solid #5d5e60;
    border-radius: 0px;
}
label#tit44 {
    color: #337ab7;
}



.choose_file{
    position:relative;
    display:inline-block;    
    border-radius:8px;
    border:#ebebeb solid 1px;
    width:250px; 
    padding: 4px 6px 4px 8px;
    font: normal 14px Myriad Pro, Verdana, Geneva, sans-serif;
    color: #7f7f7f;
    margin-top: 2px;
    background:white
}
.choose_file input[type="file"]{
    -webkit-appearance:none; 
    position:absolute;
    top:0; left:0;
    opacity:0; 
}

#pan1{
    border-color: #f68b1f;
    border-radius: 0px !important;
}
.panel-primary>#profilepanel {
    color: #fff;
    background-color: #f68b1f;
    border-color: #428bca;
    border: 0px solid black !important;
        border-radius: 0px !important;
}
#suiteright{
    color: #f68b1f;
}






#pan2{
    border-color: #129656;
        border-radius: 0px !important;
}
.panel-primary>#profilepanel2 {
    color: #fff;
    background-color: #129656;
    border-color: #129656 !important;
    border: 0px solid black !important;
        border-radius: 0px !important;
}
#suiterigh2{
    color: #129656;
}








#pan3{
    border-color: #221f61;
        border-radius: 0px !important;
}
.panel-primary>#profilepanel3 {
    color: #fff;
    background-color: #221f61;
    border-color: #221f61 !important;
    border: 0px solid black !important;
        border-radius: 0px !important;
}
#suiterigh3{
    color: #221f61;
}






#pan4{
    border-color: #b91f23;
        border-radius: 0px !important;
}
.panel-primary>#profilepanel4 {
    color: #fff;
    background-color: #b91f23;
    border-color: #b91f23 !important;
    border: 0px solid black !important;
        border-radius: 0px !important;
}
#suiterigh4{
    color: #b91f23;
}




#pan5{
    border-color: #52114a;
        border-radius: 0px !important;
}
.panel-primary>#profilepanel5 {
    color: #fff;
    background-color: #52114a;
    border-color: #52114a !important;
    border: 0px solid black !important;
        border-radius: 0px !important;
}
#suiterigh5{
    color: #52114a;
}




#pan6{
    border-color: #652d91;
        border-radius: 0px !important;
}
.panel-primary>#profilepanel6 {
    color: #fff;
    background-color: #652d91;
    border-color: #652d91 !important;
    border: 0px solid black !important;
        border-radius: 0px !important;
}
#suiterigh6{
    color: #652d91;
}








.col-xs-4.text-right {
    font-size: 17px;
    font-weight: 700;
}

div#textco {
    font-size: 22px;
}



#pan1:hover .pull-left  {
color: white !important;
}

#pan1:hover #footer1 {
    background-color: #f68b1f;
    border: 0px !important;
    border-radius: 0px !important;
}

#pan1:hover #suiteright  {
color: white !important;
}



#pan2:hover .pull-left  {
color: white !important;
}

#pan2:hover #footer2 {
    background-color: #129656;
    border: 0px !important;
    border-radius: 0px !important;
}

#pan2:hover #suiterigh2  {
color: white !important;
}



#pan3:hover .pull-left  {
color: white !important;
}

#pan3:hover #footer3 {
    background-color: #221f61;
    border: 0px !important;
    border-radius: 0px !important;
}

#pan3:hover #suiterigh3  {
color: white !important;
}




#pan4:hover .pull-left  {
color: white !important;
}

#pan4:hover #footer4 {
    background-color: #b91f23;
    border: 0px !important;
    border-radius: 0px !important;
}

#pan4:hover #suiterigh4  {
color: white !important;
}


#pan5:hover .pull-left  {
color: white !important;
}

#pan5:hover #footer5 {
    background-color: #52114a;
    border: 0px !important;
    border-radius: 0px !important;
}

#pan5:hover #suiterigh5  {
color: white !important;
}




#pan6:hover .pull-left  {
color: white !important;
}

#pan6:hover #footer6 {
    background-color: #652d91;
    border: 0px !important;
    border-radius: 0px !important;
}

#pan6:hover #suiterigh6  {
color: white !important;
}






#footer6:hover{
    background-color: #652d91;
    border: 0px !important;
        border-radius: 0px !important;

}

</style>
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#upload').hide();
         $('#files').change(function() 
    { 
        if( document.getElementById("files").files.length != 0 ){
                $('#upload').show();
            }
            else{
                                $('#upload').hide();

            }
        });
    });
</script>
<script type="text/javascript">
        $('#form').submit(function(e) { // capture submit
            alert('fdfdf');
        e.preventDefault();
        var fd = new FormData(this); // XXX: Neex AJAX2
        
        // You could show a loading image for example...
    
        $.ajax({
          url: $(this).attr('action'),
          xhr: function() { // custom xhr (is the best)
               
               var xhr = new XMLHttpRequest();
               var total = 0;
                        
               // Get the total size of files
               $.each(document.getElementById('files').files, function(i, file) {
                      total += file.size;
               });
    
               // Called when upload progress changes. xhr2
               xhr.upload.addEventListener("progress", function(evt) {
                      // show progress like example
                      var loaded = (evt.loaded / total).toFixed(2)*100; // percent

                      $('#progress').text('Uploading... ' + loaded + '%' );
               }, false);
    
               return xhr;
          },
          type: 'post',
          processData: false,
          contentType: false,
          data: fd,
          success: function(data) {
               // do something...
               alert('uploaded');
          }
        });
    });


</script>

            <?php  $slugname = $user->username ?>


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
<!-- ssssssssssssssss !-->

        <div class="">
            <div class="row" id="rowS1">
                <div  class="thumbnail" id="contentuser">     
                    <div class="container-fluid">
                      <div class="">
                        <div class="">
                           
                                <div class="container-fluid" style="padding:50px;">
<p><b><h5>PLEASE SELECT AN OPTION TO VIEW</h5></b></p>
<?php


$nb_ques =   DB::table('surveys')->where('status','=','on')->count() ;



?>
<?php

      $id_user = Auth::user()->id;
        //return $id;


    $messages = DB::table('contacts')->where('user_id','=',$id_user)
                     
                     ->orderBy('updated_at', 'desc')->get();
                     
                      $j = 0 ;
$count_new_msg = 0;
?>
                                @foreach( $messages as $message)

<?php
              $count_new_msg = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('seen','=','0')
                     ->where('role','admin')
                     ->count();

                             $last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
                                        ->where('msg_id','=',$message->id)
                                        ->where('status','=','admin')
                                        ->orderBy('created_at','desc')
                                        ->value('seen');


                if($last_reply =='0')
                {
                  $j++ ;
                }



?>
   @endforeach
                             <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary" id="pan1">

                                                      <?php  $slugname = $user->username ?>
                                                      <?php  $slugme = $user->username ?>

                                            <div class="panel-heading" id="profilepanel">
                                                <div class="row">
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4 text-right">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <span class="fa fa-user" style="font-size:35px !important;"></span>
                                                    </div>
                                                    <div class="col-xs-8 ">
                                                   <a href="/@<?php echo $slugme ; ?>" style="color:white !important"> <div id="textco">Your Profile</div> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/@<?php echo $slugme ; ?>">
                                            <div class="panel-footer" id="footer1">
                                                <span class="pull-left"  style="color:black">View and update your profile</span>
                                                <span class="pull-right fa fa-arrow-circle-right" id="suiteright"></span>
                                                <div class="clearfix"></div>
                                            </div>
                                           </a>
                                        </div>
                                        
                                    </div>




                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary" id="pan2">
                                            <div class="panel-heading" id="profilepanel2">
                                                <div class="row">
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4 text-right">
                                                        <?php $resultme = $count_new_msg + $j  ?>

                                                    <?php echo $resultme; ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <span class="fa fa-envelope" style="font-size:35px !important;"></span>
                                                    </div>
                                                    <div class="col-xs-8 ">
                                                    <a href="/@<?php echo $slugme ; ?>/messages" style="color:white !important">  <div id="textco">Messages</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/@<?php echo $slugme ; ?>/messages">
                                            <div class="panel-footer" id="footer2">
                                                <span class="pull-left"  style="color:black">Access your messages</span>
                                                <span class="pull-right fa fa-arrow-circle-right" id="suiterigh2"></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>




                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary" id="pan3">
                                            <div class="panel-heading" id="profilepanel3">
                                                <div class="row">
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4 text-right"><?php echo $nb_ques ; ?></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <span class="fa fa-building" style="font-size:35px !important;"></span>
                                                    </div>
                                                    <div class="col-xs-8 ">
                                                     <a href="/@<?php echo $slugme ; ?>/questionnaires" style="color:white !important"> <div id="textco">Questionnaires</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/@<?php echo $slugme ; ?>/questionnaires">
                                            <div class="panel-footer" id="footer3">
                                                <span class="pull-left"  style="color:black">View current questionnaires</span>
                                                <span class="pull-right fa fa-arrow-circle-right" id="suiterigh3"></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>







                                    </div>

 



                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary" id="pan4">
                                            <div class="panel-heading" id="profilepanel4">
                                                <div class="row">
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4 text-right">
                                                        <i class="fa fa-plus" aria-hidden="true"></i>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <span class="fa fa-calendar" style="font-size:35px !important;"></span>
                                                    </div>
                                                    <div class="col-xs-8 ">
                                                   <a href="/@<?php echo $slugme ; ?>/calendar" style="color:white !important"> <div id="textco">Calendar</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#">
                                            <div class="panel-footer" id="footer4">
                                                <span class="pull-left"  style="color:black">View and add calendar tasks</span>
                                                <span class="pull-right fa fa-arrow-circle-right" id="suiterigh4"></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>




                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary" id="pan5">
                                            <div class="panel-heading" id="profilepanel5">
                                                <div class="row">
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4 text-right">
                                                        <i class="fa fa-search" aria-hidden="true"></i>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <span class="fa fa-newspaper-o" style="font-size:35px !important;"></span>
                                                    </div>
                                                    <div class="col-xs-8 ">
                                                   <a href="/News" style="color:white !important"><div id="textco">News</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="/News">
                                            <div class="panel-footer" id="footer5">
                                                <span class="pull-left"  style="color:black">Check our news</span>
                                                <span class="pull-right fa fa-arrow-circle-right" id="suiterigh5"></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>




                                    <div class="col-lg-4 col-md-6">
                                        <div class="panel panel-primary" id="pan6">
                                            <div class="panel-heading" id="profilepanel6">
                                                <div class="row">
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4"></div>
                                                    <div class="col-xs-4 text-right">
                                                        <i class="fa fa-search" aria-hidden="true"></i>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <span class="fa fa-internet-explorer" style="font-size:35px !important;"></span>
                                                    </div>
                                                    <div class="col-xs-8 ">
                                                    <a href="http://theaccidentguys.co.uk/" style="color:white !important"><div id="textco">TAG Website</div></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="http://theaccidentguys.co.uk/" >
                                            <div class="panel-footer" id="footer6">
                                                <span class="pull-left"  style="color:black">The Accident Guys Home</span>
                                                <span class="pull-right fa fa-arrow-circle-right" id="suiterigh6"></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>







                                    </div>








                                </div>
                            
<div class="container-fluid">

                                        <div class="panel panel-primary" style="border-radius:0px !important;border:1px solid black">
                                            <div class="panel-heading" style="background-color:#ebebec !important;color:black;border:0px solid black !important">
                                            NEWS & CURRENT UPDATES
                                            </div>
                                            
                                            <div class="panel-body">
                                            body here
                                            </div>
                                           
                                        </div>

</div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
