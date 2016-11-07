@extends('layouts.def2')
@section('content')

<title>Contact | TAG</title>
<head>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <style type="text/css">
  body {
  background: url(/img/TAGIMG.png) no-repeat center center fixed !important;
      background-repeat: no-repeat;
    background-size: cover !important; 
  font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
  font-weight:300;
  color:#676767;
}

#contentme{
  color: black;
  font-size: 17px;
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
p#content2 {
    font-weight: 700;
    padding: 10px;
    color: black;
}



.wrap {
  box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
  border-radius: 4px;
}

a:focus,
a:hover,
a:active {
  outline: 0;
  text-decoration: none;
}

.panel {
  border-width: 0 0 1px 0;
  border-style: solid;
  border-color: #fff;
  background: none;
  box-shadow: none;
}

.panel:last-child {
  border-bottom: none;
}

.panel-group > .panel:first-child .panel-heading {
  border-radius: 4px 4px 0 0;
}

.panel-group .panel {
  border-radius: 0;
}

.panel-group .panel + .panel {
  margin-top: 0;
}

.panel-heading {
  background-color: #ebebec;
  border-radius: 0;
  border: none;
  color: #fff;
  padding: 0;
}

.panel-title a {
  display: block;
  color: black;
  padding: 15px;
  position: relative;
  font-size: 16px;
  font-weight: 600;
}

.panel-body {
  background: #fff;
}

.panel:last-child .panel-body {
  border-radius: 0 0 4px 4px;
}

.panel:last-child .panel-heading {
  border-radius: 0 0 4px 4px;
  transition: border-radius 0.3s linear 0.2s;
}

.panel:last-child .panel-heading.active {
  border-radius: 0;
  transition: border-radius linear 0s;
}
/* #bs-collapse icon scale option */

.panel-heading a:before {
  content: '\e146';
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  font-size: 24px;
  transition: all 0.5s;
  transform: scale(1);
}

.panel-heading.active a:before {
  content: '\f055';
  transition: all 0.5s;
  transform: scale(0);
}

#bs-collapse .panel-heading a:after {
  content: '\f055';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
  transform: scale(0);
  transition: all 0.5s;
}

#bs-collapse .panel-heading.active a:after {
  content: '\f055';
  transform: scale(1);
  transition: all 0.5s;
}
/* #accordion rotate icon option */

#accordion .panel-heading a:before {
  content: '\f055';
  font-size: 24px;
  position: absolute;
  font-family: 'Material Icons';
  right: 5px;
  top: 10px;
    color: #bc2126 !important;
  transform: rotate(180deg);
  transition: all 0.5s;
}

#accordion .panel-heading.active a:before {
  transform: rotate(0deg);
  transition: all 0.5s;
}

.panel-heading
{
position:relative;
background:#ebebec !important; 
margin-bottom:5px;
}


.panel-heading:hover a
{
color: white;
}




.panel-heading:hover .link_bg
{
width:100%;
background:#bb0016;
-webkit-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;  
}




.var_nav
{
position:relative;
background:#ccc; 
width:300px;
height:70px;
margin-bottom:5px;
}
.link_bg
{
  content: 'Q';
 width:70px;
 height:47px;
 position:absolute;
 color:#fff;
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

/*
form {
  display: inline-block;
  margin: 0 auto;
}
*/
.pseudo-search {
  border: 2px solid #ccc;
  padding: 10px 15px;
  transition: background-color 0.5 ease-in-out;
}
.pseudo-search input {
  width: 75% !important;
  border: 0;
  background-color: transparent;
}
.pseudo-search input:focus {
 border-bottom: 1px dotted black;
  outline: none;
}
.pseudo-search button,
.pseudo-search i {
  border: none;
  background: none;
  cursor: pointer;
}
.pseudo-search select {
  border: none;
}


.btn-default {
    color: #333;
    background-color: #eaeaea;
    border-color: #000;
    border-radius: 0px;
    /* border: 0px solid red !important; */
    min-width: 120px;
}

.btn-success {
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid black;
}

textarea.form-control {
    height: auto;
    border-radius: 0;
    border: 2px solid #cccccc;
}


textarea.form-control {
    height: auto;
    border-radius: 0;
    border: 2px solid #cccccc;
}

.pseudo-search:focus  {

background: red;
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


.tossucss{
      font-size: 185px !important;
    color:#129656;
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
    background: #129656;
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


<script type="text/javascript">
  

  $( document ).ready(function() {
$('.closeall').click(function(){
  $('.panel-collapse.in')
    .collapse('hide');
});
$('.openall').click(function(){
  $('.panel-collapse:not(".in")')
    .collapse('show');
});
});
</script>
<title>Contact us</title>
</head>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
      <img src="/img/TAGLOGO.png" width="100%">
    </div>

    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
      <div class="row thubmnail" style="border: 1px solid red; padding-left: 10px; background: white; margin-top: 30px;">
          <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
              <img src="/img/Contactus.png" width="250px" class="pull-right" height="200px">
          </div>
          <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="padding-top:20px">
              <span id="whyjoin">Contacting The Accident Guys</span>
              <p><i><img src="/img/hoho.png" width="20" height="20" style="margin-right:10px"></i>Oak Hill Court, 171 Bury New Road, Prestwich, Manchester, M25 9ND</p>
              <p><i><img src="/img/userLogin.png" width="20" height="20" style="margin-right:10px"></i>0800-8-654321 : Lines are open Mon to Fri 9:00am till 5:30pm</p>
              <p><i><img src="/img/coco.png" width="20" height="20" style="margin-right:10px"></i>workwithtag@theaccidentguys.co.uk</p>
              <p><i><img src="http://nydla.org/wp-content/uploads/2015/07/intl-icon.png" width="20" height="20" style="margin-right:10px"></i><a style="color: #40484e;text-decoration: underline !important;" href="www.theaccidentguys.co.uk">www.theaccidentguys.co.uk</a></p>
          </div>
      </div>
    </div>

  </div>
  <br>
  <div class="row">
    <p><span id="whyjoin">CONTACT FORM</span></p>

  </div>

  <div class="row">
    <div class="">
            {!! Form::open(['action' => 'ContactController@GuestContact_Execution', 'method' => 'post', 'role' => 'form']) !!} 


      <div class="thumbnail" style="border:1px solid red">


        <div class="container-fluid row">

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

              <div class="row" style="padding:5px;">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="color:black" >
                    Enquiry Subject:
                </div>

                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="color:black">
                        <div class="pseudo-search">
                                              <button class="fa fa-pencil-square-o" ></button>

                      <input type="text" name="subject"  required>
                      
                  </div>
                </div>


              </div>



              <div class="row" style="padding:5px;">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="color:black" >
                    Your Name:
                </div>


                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="color:black">
                        <div class="pseudo-search">
                                              <button class="fa fa-pencil" ></button>

                      <input type="text" name="name"   required>
                      
                  </div>
                </div>


              </div>



              <div class="row" style="padding:5px;">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="color:black" >
                    Landline Number:
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="color:black">

                        <div class="pseudo-search">
                                              <button class="fa fa-phone" ></button>

                      <input type="text" name="landline_number"   required>
                      
                  </div>
                </div>


              </div>




              <div class="row" style="padding:5px;">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="color:black" >
                    Mobile Number:
                </div>


                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="color:black">
                        <div class="pseudo-search">
                                              <button class="fa fa-mobile" ></button>

                      <input type="text" name="mobile_number"   required>
                      
                  </div>
                </div>


              </div>




              <div class="row" style="padding:5px;">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="color:black" >
                    Email Address:
                </div>


                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="color:black">
                        <div class="pseudo-search">
                                              <button class="fa fa-at" ></button>

                      <input type="text" name="email_adr"   required>
                      
                  </div>
                </div>


              </div>





            </div>

            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            
              <textarea rows="13" class="form-control" name="msg_content" placeholder="Please tell us briefly your enquiry"></textarea>
                
              
              <div class="pull-right" style="margin-top:10px;">
              <button class="btn btn-default" type="reset">clear</button>
              <button class="btn btn-success" type="submit">send</button>

              </div>
            </div>


     </div>
</div>

         {!! Form::close() !!}

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal2").modal('show');
  });
</script>


@if(Session::has('contact_anno'))


<!-- Modal -->
<div id="myModal2" class="modal fade-scale fade" role="dialog" style="width:600px !important;    margin: 30px auto !important;">
  <div class="">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">SUCCESS</h4>
      </div>
      <div class="modal-body">



        <div class="contain6">
        <center><i class="tossucss fa fa-check-square-o" aria-hidden="true"></i></center>
        <p id="carff">
           Your message has been sent successfully
        </p>
        <p>
          <center><a href="/" class="btn btn-default" id="commprof"> HOME</a></center>
        </p>

        </div>



      </div>

    </div>

  </div>
</div>

@endif


@stop