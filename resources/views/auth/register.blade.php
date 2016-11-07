<html>
<head>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<title>
    
    Register | TAG
</title>
<script>
$( "#first_name" )
  .keyup(function() {
    var value = $( this ).val();
    $( "p" ).text( value );
  })
  .keyup();
</script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.10.1/css/bootstrap-tour.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.10.1/js/bootstrap-tour.js"></script>
<style type="text/css">
    .navbar-inverse a{
  color: white !important;


}




.popover{
    top: 379px;
    left: 497px;
    display: block;
    border-radius: 0;
    border: 0 !important;
    background: #d91a24;

    /* background: red; */
}


.popover-title {
    margin: 0;
    padding: 8px 14px;
    font-size: 14px;
    border: 0 !important;
    border-radius: 0pc;
    color: white;
    font-weight: 700 !important;
    font-weight: 400;
    line-height: 18px;
    background-color: #d91a24 !important;
    /* border-bottom: 1px solid #ebebeb; */
    /* border-radius: 5px 5px 0 0; */
}


a#startTour {
    font-size: 11px;
    /* outline: blanchedalmond; */
}

  #myLab{
        font-size: 15px;
    font-weight: 700;
    color: #252525;
  }
</style>
<script type="text/javascript">
    $(document).ready(function(){
  'use strict';
  
  var tour = new Tour({
  steps: [
  {
    element: "#step-one",
    title: "Title of my step",
    content: "you can find your APP ID here ...",
    placement: "right",
    backdrop: true
  },
    {
    element: "#step-two",
    title: "Title of my step",
    content: "Please put your APP ID here",
        placement: "left",
    backdrop: true

  }

]});

// Initialize the tour
tour.init();

  $("#startTour").click(function() {
        // Start the tour
        tour.restart();  
  })

});

</script>

    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.8.1/js/bootstrap-tour.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.8.1/css/bootstrap-tour.min.css">
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .has-feedback label~.form-control-feedback {
    top: 25px;
    padding-right: 40px !important;
}

</style>
<style type="text/css">
    body {
    padding: 50px;
}
input, button.btn {
    margin-bottom: 30px;
}
</style>
<script type="text/javascript">
    $(function () {
    var tour = new Tour() ;
    
    tour.addSteps([{
            element: "#one",
            title: "Title of my step",
            content: "Content of my step"
        }, {
            element: "#two",
            title: "Title of my step",
            content: "Content of my step"
        }, {
            element: "#three",
            title: "Title of my step",
            content: "Content of my step"
        }]);

    // Initialize the tour
    tour.init();

    $('#tour-go').click(function () {
        // Start the tour
        tour.start();
    });
});

</script>

<!--All Files !-->
    <link rel="stylesheet" href="/f11_files/demo.css">
    <link rel="stylesheet" href="/f11_files/font-awesome.min.css">
    <link rel="stylesheet" href="/f11_files/j-forms.css">
    
    <script src="/f11_files/jquery.1.11.1.min.js"></script>
    <script src="/f11_files/jquery.validate.min.js"></script>
    <script src="/f11_files/additional-methods.min.js"></script>
    <script src="/f11_files/jquery.form.min.js"></script>
   <!-- <script src="/f11_files/j-forms.min.js"></script>!-->


<!--STYLE.CSS !-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/register.css">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


@include('front.EI.head_EI')
</head>
<body>
@include('includes.nav')
<div class="container">
    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
        <img  style="background-color:rgba(255, 255, 255, 0) !important;border: 1px solid rgba(221, 221, 221, 0) !important;" class="img-thumbnail" src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/TAG-Logo-Large.png" width="250px" height="170px;">
        <img id="step-one" src="/img/image_phone.png" class="img-thumbnail" style="background-color:rgba(255, 255, 255, 0) !important;border: 1px solid rgba(221, 221, 221, 0) !important;max-height: 600px;
    max-width: 500px;" >
    </div>
    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
    <div class="row">
        <div class=" pull-right">
                    <form method="GET" action="http://workwithtag.theaccidentguys.co.uk/blog/search" accept-charset="UTF-8" role="form" class="navbar-form">  
                        <div class="form-group col-lg-12" >
                            <div id="custom-search-input">
                                <div class="input-group col-md-12">
                                    <input type="text" class="form-control" placeholder="Search Site" name="search" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info btn-lg" type="button">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>

                        </div>                  
                    </form>
        </div>
    </div>
    <div class="row">
        <div class="thumbnail">
            <div class="container-fluid">

    



    
    
    <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.10.1/js/bootstrap-tour.js"></script>
    <script language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.10.1/js/bootstrap-tour.js"></script>

                                <p class="titleregister2" style="    font-size: 17px;">STEP 1 - Register Details</p>
                {!! Form::open(['url' => 'auth/register', 'method' => 'post', 'role' => 'form' ,'id'=>'movieForm']) !!} 

    <p style="font-size: 15px;
    font-weight: 500 !important;padding-bottom: 10px;">Please enter the details below for registraion, any fields marked with an * are required</p>
        <div class="" id="cusrow">
            <div class="col-md-8 col-lg-8 col-sm-12 col-xm-12">
            <label  id="myLab">Title:</label>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xm-12" style="padding-bottom: 10px;" >
                <select class="form-control control" name="title_user" id="cusrow" >
                    <option value="Mr." >Mr.</option>
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Dr">Dr</option>
                    <option value="Ms">Ms</option>
                </select>

            </div>
        </div>

                <div class="row" id="cusrow">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            <label  id="myLab">First Name:</label>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
                <div class="form-group col-lg-12 ">
                    <input class="form-control" placeholder="" name="first_name" id="first_name" type="text">
                </div>
            </div>
        </div>

                <div class="row" id="cusrow">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            <label  id="myLab">Surname:</label>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            {!! Form::control('text', 12, 'last_name', $errors) !!}
            </div>
        </div>




 

        <div class="row" id="cusrow">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            <label  id="myLab">Email Address:</label>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            {!! Form::control('text', 12, 'email', $errors) !!}
            </div>
        </div>




        <div class="row" id="cusrow">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            <label  id="myLab">Confirm your Email Address:</label>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            {!! Form::control('email', 12, 'confirmemail', $errors) !!}
            </div>
        </div>




        <div class="row" id="cusrow">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            <label  id="myLab">Password:</label>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
                        {!! Form::control('password', 12, 'password', $errors) !!}
            </div>
        </div>




        <div class="row" id="cusrow">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
            <label id="myLab">Confirm your Password</label>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xm-12">
                        {!! Form::control('password', 12, 'password_confirmation', $errors) !!}
            </div>
        </div>


         <div >
                        <p id="styleme">Please enter your unique Mobile Application ID that you received when you downloaded and registered with The Accident Guys to become an Exempt Introducer.  If you have forgotten this Identification number then please call The Accident Guys on 0800-8-654321.</p><br>
                <p class="titleregister2">Where to find your unique Mobile ID Number</p>
                <p id="styleme">Once you have downloaded the Mobile Application from the Apple or Android store you will be prompted to Register to become an Exempt Introducer with The Accident Guys and once you have completed submission you will be brought to the Application Submission Information area where you will find your Application ID.</p>

            <div class="row"  id="step-two" >

                    <label style="     color: #cc181f;   margin: 10px;margin-left:13px;text-align:center:color:red;font-weight:700">PLEASE ENTER YOUR UNIQUE MOBILE APPLICATION NUMBER<a id="startTour"> ( How can I get my App ID ) </a><br></label>
                    <div class="form-group col-lg-12 ">
                        {!! Form::control('text', 12, 'app_ID', $errors) !!}
                    </div>
            </div>

                           <div class="row">
                          <center> <div class="pull-right">
                                                       <div class="g-recaptcha" data-sitekey="6LdePSITAAAAAA4DarWhmCwHMr_00_sFs49jZCvy"></div>

                                                <?php
                                                $attributes = [
                                'data-theme' => 'dark',
                                'data-type' =>  'audio',
                            ];
                                                ?>    
                            {!! Form::captcha($attributes) !!}
                                                            @if ($errors->has('g-recaptcha-response'))
                                                                <span class="help-block">
                                                                    <code>{{ $errors->first('g-recaptcha-response') }}</code>
                                                                </span>
                                                            @endif
                                </div></center>
                            </div>

                            <br>
            @if(Session::has('flash_message5'))
                <code>Error : Captcha not selected</code>
            @endif
            <div class="row">
            <!--<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>!-->

            </div>
        </div> 


                    <div class="row">
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12"></div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

                            <input class="btn btn-primary pull-right" type="reset" value="Reset Information">
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <input class="btn btn-primary pull-right" type="submit" value="Continue">
                        </div>
                    </div>

                    </div>    
       
</div>





        </div>
    </div>
    
    
{!! Form::close() !!}

        </div>
    </div>
    </div>
</div>










</body>


<footer style="min-width: 400px; background: #1e295d; min-height: 90px;">
    <div class="container-fluid">
    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" style="padding-top:10px;">
            <center style="color:white;line-height: 17px;">
                    The Accident Guys are trading styles of Claims Legal Ltd, UK Company 07377456 Raven House, 113 Fairfield Street, Manchester 
                    Central, M12 6EL - Telephone 0800-8- 654321 The Accident Guys are regulated by the Claims Management Regulator in respect
                    of regulated claims management activities.
            </center>

    </div>
    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" style="padding-top:10px;">
        <p style="padding-top: 20px;text-align: center;">
            <a id="tir566" href="https://www.facebook.com/TheAccidentGuys/" onclick="window.open(this.href); return false;">
                <img id="imgyt1" href="https://www.facebook.com/TheAccidentGuys/" style="margin-top:-20px;" src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/04/fbpng.png" width="50" height="50">
            </a>
            <a id="tir566" href="https://twitter.com/TheAccidentGuys" onclick="window.open(this.href); return false;">
                <img id="imgyt1" href="https://twitter.com/Sickness_Claims" style="margin-top:-20px;" src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/04/twit2png.png" width="50" height="50">
            </a>
            <a id="tir566" href="http://www.youtube.com/c/TheAccidentGuys" onclick="window.open(this.href); return false;">
                <img id="imgyt1" href="http://www.youtube.com/c/TheAccidentGuys" style="margin-top:-20px;     margin-right: 20px;" src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/04/yout32.png" width="50" height="50">
            </a>
       </p>
    </div>   
    </div>
</footer>


</html>