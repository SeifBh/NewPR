@extends('layouts.defaults')
@section('content')
<title>Profile | TAG</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>



<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal2").modal('show');
  });
</script>
<?php  $slugname = $user->username ?>
<title>Profile | @<?php echo $slugname; ?></title>


<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

// set focus when modal is opened
$('#modal-content').on('shown.bs.modal', function () {
    $("#txtname").focus();
});

// show the modal onload
$('#modal-content').modal({
    show: true
});

// everytime the button is pushed, open the modal, and trigger the shown.bs.modal event
$('#openBtn').click(function () {
    $('#modal-content').modal({
        show: true
    });
});

</script>

<style type="text/css">

#t1 {
    background: rgba(0, 0, 0, 0.01);
    box-shadow: 3px 7px 20px 1px;
    /* border: 2px solid #100000; */
    /* border-radius: 20px; */
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
<style type="text/css">
  
a.nostyle {
  color: inherit;
  text-decoration: none;
  padding: 0;
  margin: 0;
}

div.portfoliocard {
  position: relative;

  background: rgba(255, 255, 255, 1);
  border: 1px solid rgba(0, 0, 0, 0.7);
  box-shadow: 0px -1px 3px rgba(0, 0, 0, 0.1), 0px 2px 6px rgba(0, 0, 0, 0.5);
  border-radius: 6px;
  overflow: hidden;
  z-index: 100;
}

div.portfoliocard div.coverphoto {
  width: 100%;
  height: 120px;
  background: url('http://www.pixelstalk.net/wp-content/uploads/2016/06/Black-And-Red-Background-HD.jpg');
  background-position: center center;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: inset 0px 3px 20px rgba(255, 255, 255, 0.3), 1px 0px 2px rgba(255, 255, 255, 0.7);
  z-index: 99;
}

div.portfoliocard div.left_col,
div.portfoliocard div.right_col {
  float: left;
}

div.portfoliocard div.left_col {
  width: 20%;
  padding-top: 85px;
  box-sizing: border-box;
}

div.portfoliocard div.right_col {
  width: 80%;
  background: rgba(245, 245, 245, 1);
  border-left: 1px solid rgba(230, 230, 230, 1);
  box-shadow: inset 0px 1px 1px rgba(255, 255, 255, 0.7);
  margin-left: -1px;
  border-bottom-right-radius: 5px;
}

div.portfoliocard div.profile_picture {
  width: 110px;
  height: 110px;
  background: rgba(255, 255, 255, 1);
  position: absolute;
  top: 65px;
  left: 40px;
  border-radius: 100%;
  background-image: url('http://cache.spreadshirt.net/Public/Common/images/profile-pic-placeholder_130x130.png');
  background-size: 100% 100%;
  padding: 7px;
  border: 4px solid rgba(255, 255, 255, 1)
}


div.portfoliocard div.profile_picture1 {
  width: 110px;
  height: 110px;
  background: rgba(255, 255, 255, 1);
  position: absolute;
  top: 65px;
  left: 40px;
  border-radius: 100%;
  background-image: url('/images/{{$user->path_picture}}');
  background-size: 100% 100%;
  padding: 7px;
  border: 4px solid rgba(255, 255, 255, 1)
}



div.portfoliocard div.right_col h2.name {
  font-size: 30px;
  font-weight: 300;
  color: rgba(30, 30, 30, 1);
  padding: 0;
  margin: 20px 10px 0px 30px;
}

div.portfoliocard div.right_col h3.location {
    font-size: 15px;
    font-weight: 700;
    color: rgb(212, 40, 40);
    padding: 5px;
    margin: -5px 10px 10px 30px;
}

div.portfoliocard ul.contact_information {
  margin-top: 20px;
  padding-left: 30px;
  list-style-type: none;
}

div.portfoliocard ul.contact_information li {
  height: 25px;
  width: 180px;
  line-height: 25px;
  font-weight: 300;
  font-size: 15px;
  color: rgba(140, 140, 140, 1);
  text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.8);
  padding: 5px 0px;
  background-repeat: no-repeat;
  background-size: 18px 18px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0px 1px 1px rgba(255, 255, 255, 0.6);
  cursor: default;
}

div.portfoliocard ul.contact_information li:before {
  content: "";
  width: 25px;
  height: 25px;
  display: block;
  float: left;
  background-position: center;
  background-size: 18px 18px;
  background-repeat: no-repeat;
  margin-right: 5px;
  opacity: 0.7;
}

div.portfoliocard ul.contact_information li:hover:before {
  opacity: 1;
}

div.portfoliocard ul.contact_information li.work:before {
  background-image: url('http://schulzmarcel.de/x/icons/case_24.png');
}

div.portfoliocard ul.contact_information li.website:before {
  background-image: url('http://schulzmarcel.de/x/icons/globe_24.png');
}

div.portfoliocard ul.contact_information li.mail:before {
  background-image: url('http://schulzmarcel.de/x/icons/paper_plane_24.png');
}

div.portfoliocard ul.contact_information li.phone:before {
  background-image: url('http://schulzmarcel.de/x/icons/phone_24.png');
}

div.portfoliocard ul.contact_information li.resume:before {
  background-image: url('http://schulzmarcel.de/x/icons/inbox_24.png');
}

div.portfoliocard div.followers,
div.portfoliocard div.following {
  margin: 15px 0px 0px 35px;
  font-weight: 300;
  font-size: 16px;
  color: rgba(30, 30, 30, 1);
}

div.portfoliocard div.follow_count {
  font-weight: 400;
  font-size: 25px;
  color: rgba(140, 140, 140, 1);
}

#containerfluid{
  padding-left: 0px !important;
  padding-right: 0px !important;
  margin-right: 0px !important;
  margin-left: 0px !important;
}

#panpan{
      border: 1px solid black;
    margin: 5px;
    border-radius: 0px;
}
#headhead{

      background-color: #262261;
    color: white;
    font-size: 25px;
    text-align: center;
    font-weight: 700;
}
span#claim {
    font-size: 25px;
    font-weight: 700;
    color: #262261;
}
span#ei {
    color: black;
    font-size: 16px;
    font-weight: 700;
}

.blankslate {
    position: relative;
    padding: 30px;
    text-align: center;
    background-color: #fafafa;
    border: 1px solid #e5e5e5;
    border-radius: 3px;
    box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
}

label{
  font-size: 12px;
}


.right-side {
    float: none;
    display: table-cell;
}


.left-side {
    display: table-cell;
}
#updateproff:hover{
  background-color: #262261;
  color: white;
    border: 0;

}

#sendmess:hover{
  background-color: #129656;
  color: white;
    border: 0;

}


#uploadpicc:hover{
  background-color: #d42828;
  color: white;
  border: 0;
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


</style>
      <?php  $slugname = $user->username ?>
<?php $slugme =  $user->username  ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>






<div class="container-fluid" style="padding-top:140px !important;">

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







  <div class="row" style="">
    <div class="col-lg-4" style="">
            <a  href="/@<?php echo $slugname ?>/edit" class="btn btn-default" id="updateproff" style="    border-left: 7px solid #262261;width:100%;margin-bottom: 10px;border-radius: 0;">
<i class="fa fa-pencil" aria-hidden="true"></i>

              Update  profile

            </a>
    </div>

    <div class="col-lg-4" style="">
            <a  href="/@<?php echo $slugname ?>/messages"  class="btn btn-default" id="sendmess" style="    border-left: 7px solid #129656;margin-bottom: 10px;width:100%;border-radius: 0;">

              <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  Send Message
            </a>

    </div>

    <div class="col-lg-4" style="">
            <div class="form-group">
              <form method='post' name="form" id="form" action='/uploadfileprofile' enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <label class="btn btn-default btn-file" id="uploadpicc" style="width:100%;border-radius:0;border:0;border-left: 7px solid #d42828;">
                  <i class="fa fa-upload" aria-hidden="true"></i>
              Upload Picture <input type="file" name="files" id="files" style="display: none;margin-bottom: 10px;" class="btn btn-primary" required>
              </label>
                  <span><input type='submit' name='upload' id='upload' value='Save me' class="btn btn-success" 
                    style="display: inline-block; width: 100%; border: 0; border-radius: 0; /* border-right: 7px solid white; */ background: #d42828;"/></span>
              </form>
            </div>

    </div>


  </div>
  <div class="row" >
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

          THE ACCIDENT GUYS
        </div>

        <div class="row panel-body">

            <div class="col-md-4 col-lg-4 ">


              @if($user->path_picture !='')
              <img src="/images/{{$user->path_picture}}"  width="120px" height="150px" id="" >
              @else
              <img src="http://www.freelanceme.net/Images/default%20profile%20picture.png"  width="120px" height="150px" id="">
              @endif            

            </div>
            <div class="col-md-8 col-lg-8">
              <div class="row">
                  <div class="col-md-4 col-lg-4">
                  <label>Name</label>
                  </div>

                  <div class="col-md-8 col-lg-8">
                  {{$user->title_user}}  {{$user->first_name}} {{$user->last_name}} 
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4 col-lg-4">
                  <label>D.O.B</label>
                  </div>

                  <div class="col-md-8 col-lg-8">
                                      @if (($user->date_day != '') && ($user->date_month != '') && ($user->date_year != ''))
                      {{ $user->date_day }} / {{ $user->date_month }} / {{ $user->date_year }} 
                    @else
                      none
                    @endif
                  </div>
              </div>


              <div class="row">
                  <div class="col-md-4 col-lg-4">
                  <label>Registered:</label>
                  </div>

                  <div class="col-md-8 col-lg-8">
                 {{$user->created_at}}
                  </div>
              </div>


<span id="claim">CLAIMS LEGAL</span>
<br>
<span id="ei">EXEMPT INTRODUCER</span>





            </div>
        </div>


      </div>
    </div>







    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" style="background-color: #d42828 !important;">

          CONTACT
        </div>

        <div class="row panel-body">

            <div class="col-md-4 col-lg-4 ">
              <img src="https://pixabay.com/static/uploads/photo/2016/01/28/16/34/contact-1166590_960_720.png" width="120px" height="150px" id="i1" style="/* padding:30px; *//* border-radius: 50%; */">
            </div>
            <div class="col-md-8 col-lg-8">
              <div class="row">
                  <div class="col-md-4 col-lg-4">
                  <label>Home</label>
                  </div>

                  <div class="col-md-8 col-lg-8">
                                     @if ($user->home_number != '')
                      {{ $user->home_number }}
                    @else
                      none
                    @endif
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-4 col-lg-4">
                  <label>Mobile</label>
                  </div>

                  <div class="col-md-8 col-lg-8">
                                     @if ($user->mobile_number != '')
                      {{ $user->mobile_number }}
                    @else
                      none
                    @endif
                  </div>
              </div>


              <div class="row">
                  <div class="col-md-4 col-lg-4">
                  <label>Email</label>
                  </div>

                  <div class="col-md-8 col-lg-8">
                                      @if ($user->email != '')
                      {{ $user->email }}
                    @else
                      none
                    @endif 
                  </div>
              </div>





            </div>
        </div>


      </div>
    </div>




  </div>




<div class="row">


    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 left-side">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

         ADDRESS
        </div>

        <div class="row panel-body">

            <div class="col-md-4 col-lg-4 ">
              <img src="https://cdn0.iconfinder.com/data/icons/engineers-1/421/Untitled-18-512.png" width="120px" height="150px" id="i1" style="/* padding:30px; *//* border-radius: 50%; */">
            </div>
            <div class="col-md-8 col-lg-8">
              <div class="row">
                  <div class="col-md-12 col-lg-12">
                  <label>
                    @if (($user->adress2 != '') || ($user->town != '') || ($user->city != '') || ($user->country != '') || ($user->house_flat_number != '')|| ($user->street_road_name != ''))


                      {{$user->house_flat_number}} {{$user->street_road_name}}<br>{{ $user->city }}<br>  {{ $user->town }}<br>{{ $user->post_code }}   <br> {{ $user->adress2 }} 
                    @else 
                      none
                    @endif

                    </label>


                  </div>


              </div>





            </div>
        </div>


      </div>
    </div>



    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 right-side">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

         Profile Information
        </div>

        <div class="panel-body">

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Known by other name?</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label>                    @if ($user->seen_other_names != '')
                      {{ $user->seen_other_names }}
                    @else
                      none
                    @endif  </label>
                      
                </div>
            </div>


            @if(($user->seen_other_names != 'No') && ($user->yes_state !=''))
              <div class="row">
                  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <span>Other names</span>
                  </div>
                  <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <label>
                             {{$user->yes_state}} 
                         </label>
                        
                  </div>
              </div>
             @endif



            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Employment Status:</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label>

                                          @if ($user->current_employement_status != '')
                      {{ $user->current_employement_status }}
                    @else
                      none
                    @endif  </label>

                      
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Occupation: Managing:</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label>                    @if ($user->occupation != '')
                      {{ $user->occupation }}
                    @else
                      none
                    @endif
                    </label>
                      
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Country of Birth:</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label>                    @if ($user->country_born != '')
                      {{ $user->country_born }}
                    @else
                      none
                    @endif
                    </label>
                      
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Time in UK:</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label>                    @if ($user->how_long_resident != '')
                      {{ $user->how_long_resident }}
                    @else
                      none
                    @endif
                    </label>
                      
                </div>
            </div>



            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Marital Status:</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label>                   @if ($user->matrials_status != '')
                      {{ $user->matrials_status }}
                    @else
                      none
                    @endif
                    </label>
                      
                </div>
            </div>





            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                  <span>Introducer Status:</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                      <label style="color:green">LIVE</label>
                      
                </div>
            </div>







        </div>


      </div>
    </div>





</div>




<div class="row">

    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

          Statement
        </div>

        <div class="row panel-body">
         @if ($user->supporting_statment == '')
          <div class="blankslate">
            none
          </div>
        @else
          <div class="blankslate">
           {{$user->supporting_statment}}
          </div>        
           @endif



        </div>


      </div>
    </div>





</div>


<div class="row">

    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

         <center>Registered On:</center> 
        </div>

        <div class="row panel-body" style="    text-align: center !important;">
        
          
         <label>
         <center>{{$user->created_at}}</center>

         </label>
        

        </div>


      </div>
    </div>



    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

         <center>Mobile App ID</center> 
        </div>

        <div class="row panel-body" style="    text-align: center !important;"> 
         <label><center>{{$user->app_ID}}</center></label>


        </div>


      </div>
    </div>




    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
      <div class="panel" id="panpan" >
        <div class="panel-header" id="headhead" >

          <center>Last Logged On:</center>
        </div>


        <div class="row panel-body" style="    text-align: center !important;">
         <label> <center>{{$user->updated_at}}</center></label>


        </div>


      </div>
    </div>





</div>





</div>

@stop
