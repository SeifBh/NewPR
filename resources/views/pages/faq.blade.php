@extends('layouts.def2')
@section('content')

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



form {
  display: inline-block;
  margin: 0 auto;
}
.pseudo-search {
    display: inline;
    border: 2px solid #fff;
    color: #b90014;
    padding: 10px 15px;
    transition: background-color 0.5 ease-in-out;
}


.pseudo-search input {
  font-weight: 700;
      font-style: italic;

    border: 0;
    color: #bb0015;
    background-color: rgba(255, 255, 255, 0);
    width: 200px;
}
.pseudo-search input:focus {
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
</style>

<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>FAQ's</title>

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
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
      <img src="/img/TAGLOGO.png" width="100%">
    </div>

    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
      <div class="row thubmnail" style="border: 1px solid red; padding-left: 10px; background: white; margin-top: 5px;">
      <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
          <img src="/img/FAQ's.png" width="250px" class="pull-right" height="150px">
      </div>
          <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                  <span id="whyjoin">TAG FAQs</span>
                  <p id="content2">Here you will find all of the most commonly asked questions in relation

to working with The Accident Guys, if you have any questions that need

answering but cannot find it on this page then please drop us line and

we will be glad to help you.</p>
          </div>
      </div>
    </div>

  </div>
  <br>
  <div class="row">

    <div class="pull-left">
    <span class="pull-left" style="    padding-top: 10px;" id="whyjoin">FREQUENTLY ASKED QUESTIONS</span>
    </div>



<div class="pull-right">
        <div class="row">
          <div class="container-fluid pull-right">
<form method="GET" action="http://workwithtag.theaccidentguys.co.uk/blog/search" accept-charset="UTF-8" role="form" class="navbar-form" style="    padding-top: 10px;">
  

  <div class="pseudo-search">
    <input type="text" name="search" placeholder="Search..."  required>
    
    <button class="fa fa-search" type="submit"></button>
  </div>

</form>
          </div>
        </div>

</div>
  </div>
<br>
  <div class="row">
    <div class="">
      <div class="thumbnail" style="border:1px solid red">


      
        <div class="row">
          <div class="container-fluid pull-right">
            <a href="#" class="btn btn-link openall">Expand all</a> | <a href="#" class="btn btn-link closeall">Collapse All</a>
          </div>
        </div>
        <div class="row">
          <div class="container-fluid">
            
              <div class="col-md-12 col-sm-12">
  
    <div class="panel-group wrap" id="bs-collapse">

      <div class="panel">
        <div class="panel-heading"><div class="link_bg"></div>
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#one">
          Do I need any experience or legal qualifications to be an Exempt Introducer?
        </a>
      </h4>
        </div>
        <div id="one" class="panel-collapse collapse">
          <div class="panel-body">
            No. You are not there to give legal support of advice. Your role is to tell people about The Accident Guys, how we

work and how we can support a client with our panel of specialist solicitors.
          </div>
        </div>

      </div>
      <!-- end of panel -->




      <div class="panel">
        <div class="panel-heading"><div class="link_bg"></div>
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#panB">
         Are there any fees payable by me to be an Exempt introducer?
        </a>
      </h4>
        </div>
        <div id="panB" class="panel-collapse collapse">
          <div class="panel-body">
            No. It’s free to download the App, register and use it. We are not here to make money from you in fees. As an

Exempt Introducer, your role is to spread the word about our brand and services.
          </div>
        </div>
      </div>





      <div class="panel">
        <div class="panel-heading"><div class="link_bg"></div>
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#panC">
         What devices can the App be used on?
        </a>
      </h4>
        </div>
        <div id="panC" class="panel-collapse collapse">
          <div class="panel-body">
            The App is currently available on the Apple App Store and the Android App Store.
          </div>
        </div>
      </div>







      <div class="panel">
        <div class="panel-heading"><div class="link_bg"></div>
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#panD">
         How much time to I need to devote to being an Exempt Introducer?
        </a>
      </h4>
        </div>
        <div id="panD" class="panel-collapse collapse">
          <div class="panel-body">
            There are no set requirements, as being an Exempt Introducer is a passive part of your daily routine. You must not

advertise or seek our potential claimants, and only as an incidental part of your daily routine, should you come

across someone who has experienced an accident or injury, should you explain about The Accident Guys, and only

enter a person’s details who specifically asks you to do so.
          </div>
        </div>
      </div>



      <div class="panel">
        <div class="panel-heading"><div class="link_bg"></div>
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#panE">
         Can I set up a website or Social Media page, or call people and ask a legal services survey?
        </a>
      </h4>
        </div>
        <div id="panE" class="panel-collapse collapse">
          <div class="panel-body">
            No! Your role as an Exempt Introducer is a passive role. To set up a website or Social media page about claims

management without a direct license is a criminal offence. Cold calling is <u>never</u> allowed. It is intrusive and illegal, and

even more so when ‘fishing’ for accident or injury claimants.
          </div>
        </div>
      </div>



      <div class="panel">
        <div class="panel-heading"><div class="link_bg"></div>
          <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#" href="#panF">
         So, I can only tell people I know or come into contact with directly about The Accident Guys?
        </a>
      </h4>
        </div>
        <div id="panF" class="panel-collapse collapse">
          <div class="panel-body">
    Yes. Accidents and injuries are quite a common factor of life. The human body is delicate and in the world we live in

today, there are many types of accidents and injuries that occur in all walks of life, all types of jobs and schools, all

roads and literally anywhere. Where an accident is caused by someone else’s negligence, either purposely or by

accident, those who are at no fault are entitled to claim compensation.
          </div>
        </div>
      </div>



      <!-- end of panel -->

    </div>
    <!-- end of #bs-collapse  -->



  </div>



          </div>
        </div>



      </div>
    </div>
  </div>
</div>




@stop