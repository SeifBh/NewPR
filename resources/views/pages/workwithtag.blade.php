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
	    text-align: justify;
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
.panel{
  margin-bottom: -99999px;
  padding-bottom: 99999px;
}

.row{
  overflow: hidden; 
}


 



.panel{

	border-radius: 0px !important;
}

.panel-heading{
	border: 0px !important;
	border-radius: 0px !important;
}
.panel-body {
    color: black;
    text-align: justify;
    font-weight: 100;
    font-stretch: condensed;
    font-family: inherit;
    font-size: 15;
}

#rows8{
	margin-top: 15px !important;
	margin-bottom: 15px !important;
}
#heading1{
	background: #f68b1f;
	color: white;
}

.p10{
		border-left: 7px solid  #f68b1f;

}
 .p10:hover{
		border-left: 7px double   #f68b1f;

}   

#heading2{
	background: #129656;
	color: white;
}

.p11{
		border-left: 7px solid  #129656;

}

 .p11:hover{
		border-left: 7px double   #129656;

}   

#heading3{
	background: #221f61;
	color: white;
}

.p12{
		border-left: 7px solid  #221f61;

}

 .p12:hover{
		border-left: 7px double   #221f61;

}   


#heading4{
	background: #b91f23;
	color: white;
}
.p13{
		border-left: 7px solid  #b91f23;

}

 .p13:hover{
		border-left: 7px double   #b91f23;

}   


#heading5{
	background: #52114a;
	color: white;
}
.p14{
		border-left: 7px solid  #52114a;

}
 .p14:hover{
		border-left: 7px double   #52114a;

}  
#heading6{
	background: #652d91;
	color: white;
}

.p15{
		border-left: 7px solid  #652d91;

}

 .p15:hover{
		border-left: 7px double   #652d91;

}  


</style>
<title>Working with TAG</title>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
			<img src="/img/TAGLOGO.png" width="100%">
		</div>

		<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
			<div class="row thubmnail" style="border: 1px solid red; padding-left: 10px; background: white; margin-top: 30px;">
			<div class="col-md-7 col-lg-7 ">
			<span id="whyjoin">Why join our team?</span>
				<p><i><img src="/img/ok8.png" width="20" height="20" style="margin-right:10px"></i>Earn a potential £25,000 per year</p>
				<p><i><img src="/img/ok8.png" width="20" height="20" style="margin-right:10px"></i>Become your own boss and work when you want!</p>
				<p><i><img src="/img/ok8.png" width="20" height="20" style="margin-right:10px"></i>No need to quit your current job, this can be extra income</p>
				<p><i><img src="/img/ok8.png" width="20" height="20" style="margin-right:10px"></i>Unique opportunity with huge job prospects</p>
				<p id="outofme"> >> Come and find out more today!</p>
			</div>
					<div class="">
					<img src="/img/JoinOurTeam.png" width="250px" class="pull-right" height="150px">
					</div>
			</div>
		</div>

	</div>
	<br>
	<div class="row">
		<p><span id="whyjoin">Working with TAG and joining us today!</span></p>

	</div>

<div class="row" id="rows8">
  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12" >
	<div class="panel panel-default p10">

		<div class="panel-body">
			At The Accident Guys, we understand that getting back on your own two feet after an accident can be sometimes tiring and difficult to say the least. In addition to any Personal Injuries that have been suffered due to an accident, there are a number of other factors such as financial losses due to not being able to attend your normal employment for a number of weeks or months, and been paid statutory sick pay or even losing your job and income totally. The Accident Guys help everyday people claim the Personal Injury Compensation they deserve and need.
		</div>
	</div>
  </div>
  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12" >
	<div class="panel panel-default p11">

		<div class="panel-body">
At The Accident Guys we strive to be one of the most easily approachable Personal Injury Specialist in the UK, and have helped people from all over the UK through our panel of specialist Personal Injury Solicitors, who work hard on their behalf to secure the maximum amount of compensation they are entitled to. The Accident Guys understand how complex it can seem after sustaining an unforeseen accident, to get things in order, and how to go about making an eligible claim, and that's hopefully where we all can help.

		</div>
	</div>
  </div>

</div>


<div class="row" id="rows8">
  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12" >
	<div class="panel panel-default p12">

		<div class="panel-body">
			We listen! We listen to the circumstances and what evidence is available etc., and match our clients to a specialist panel solicitor who has specific knowledge in the type of accident or injury that occurred. Our panel solicitors work across the UK and have covered almost every type of accident and injury claim you can imagine, and a lot more beside.


		</div>
	</div>
  </div>
  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12" >
	<div class="panel panel-default p13">

		<div class="panel-body">
The Accident Guys service is 100% free for our customers. We get paid marketing fees from solicitors for our unique brand and marketing expertise. As a company we care about access to justice for UK consumers, which is an ever changing environment in the UK. In 2016 we want to be as well-known as all the big brands and make a real difference to people's lives.



		</div>
	</div>
  </div>

</div>



<div class="row" id="rows8">
  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12" >
	<div class="panel panel-default p14">

		<div class="panel-body">
			You must follow our rules and procedures to the line. There's no room for those who cut corners or those who flout the rules. Simply tell people about our services and if they specifically ask for us to contact them in regards to their specific circumstances, you submit their name and telephone number through the App and let us do our work. That's all you have to do! The App tracks your recommendation and if a panel solicitor accepts a client's file and the client gives signed instructions to the solicitor, we pay you a share of our marketing fees.




		</div>
	</div>
  </div>
  <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12" >
	<div class="panel panel-default p15">

		<div class="panel-body">
Have a read through the following pages and learn more, and if you would like to join the team as an Exempt Introducer, simply download the App and register your details and get the application process underway. It's a simple process and no specialist knowledge required. You must register your name, address, date of birth, telephone number and email address, and must read and sign your understanding of the Exempt Introducer agreement, which contains our Terms and Conditions and Privacy Policy. The Accident Guys is a trading style of Claims Legal Ltd, who are regulated by the claims management regulator in respect of regulated claims management activities. Your signed contract and our acceptance of your application will mean you are then legally bound as an Exempt Introducer and must follow our rules of what you can and cannot do.





		</div>
	</div>
  </div>

</div>







</div>


@stop