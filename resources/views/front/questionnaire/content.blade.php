<!DOCTYPE html>
<html>
<head>
<!--
<link rel="stylesheet" type="text/css" href="/css/register.css">
<link rel="stylesheet" type="text/css" href="/css/check5.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/style.css">


-->
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/buttons.css"/>
    <link rel="stylesheet" type="text/css" href="/noty-2.3.8/demo/animate.css"/>
    
    <link rel="stylesheet" href="/noty-2.3.8/demo/font-awesome/css/font-awesome.min.css"/>

<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>



   <script src="noty-2.3.8/demo/jquery-1.7.2.min.js"></script>

    <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
    <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/csshome.css">

<link rel="stylesheet" type="text/css" href="/css/myscutomizeCSS.css">


<style type="text/css">
    
    .btn-success {
    color: #fff;
    background-color: #008000 !important;
    border-color: #4cae4c;
    width: 130px !important;
    font-size: 18px !important;
}


</style>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <title>{{ $title }}</title>

</head>
<body>
{{ Form::open(['action' => 'SurveyController@savetoHistory', 'method' => 'post', 'class' => 'navbar-form']) }}
<input type="hidden" name="survey_id" value="{{ $survey_id }}">
<div class="container-fluid-fluid">
	<div class="row" id="titlesur">
    <?php $slugname = Auth::user()->username; ?> 
                    <p class="pull-left"><a href="/@<?php echo $slugname ?>/questionnaires">All Lists</a></p>

        <center>{{ $title }}</center></div>
	<div class="row" id="detailsur">
	{{ $details }}
	</div>

<!--
@if(Session::has('flash_message'))
<div class="row">
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
</div>
@endif
!-->




	<div class="row" id="greyco">
		<div class="container-fluid">
@if ($question1 !== '')
			<div class="row" id="colordiv">
				<div class="col-md-1"  id="colordiv2"><center>1</center></div>
				<div class="col-md-11" id="">
            <p id="questioncontent">{{ $question1 }}</p>
				<hr>

@if ( ($q1_answer1 !== '') && ($q1_r == $q1_answer1) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer1 }}" checked> {{ $q1_answer1 }}
                </label>
@elseif ($q1_answer1 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer1 }}" > {{ $q1_answer1 }}
                </label>

@endif




@if ( ($q1_answer2 !== '') && ($q1_r == $q1_answer2) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer2 }}" checked> {{ $q1_answer2 }}
                </label>
@elseif ($q1_answer1 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer2 }}" > {{ $q1_answer2 }}
                </label>

@endif



@if ( ($q1_answer3 !== '') && ($q1_r == $q1_answer3) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer3 }}" checked> {{ $q1_answer3 }}
                </label>
@elseif ($q1_answer3 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer3 }}" > {{ $q1_answer3 }}
                </label>

@endif



@if ( ($q1_answer4 !== '') && ($q1_r == $q1_answer4) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer4 }}" checked> {{ $q1_answer4 }}
                </label>
@elseif ($q1_answer4 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer4 }}" > {{ $q1_answer4 }}
                </label>

@endif



@if ( ($q1_answer5 !== '') && ($q1_r == $q1_answer5) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer5 }}" checked> {{ $q1_answer5 }}
                </label>
@elseif ($q1_answer5 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer5 }}" > {{ $q1_answer5 }}
                </label>

@endif


@if ( ($q1_answer6 !== '') && ($q1_r == $q1_answer6) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer6 }}" checked> {{ $q1_answer6 }}
                </label>
@elseif ($q1_answer6 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer6 }}" > {{ $q1_answer6 }}
                </label>

@endif



@if ( ($q1_answer7 !== '') && ($q1_r == $q1_answer7) )
				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer7 }}" checked> {{ $q1_answer7 }}
                </label>
@elseif ($q1_answer7 !== '') 

				<label class="radio-inline">
                     <input type="radio" name="question1"  value="{{ $q1_answer7 }}" > {{ $q1_answer7 }}
                </label>

@endif
                

                @if($q1_r == $x1)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q1_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x1 }} "</code>
              
                @endif
                @endif
				</div>
			</div>
@endif

@if ($question2 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>2</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question2 }}</p>
                <hr>

@if ( ($q2_answer1 !== '') && ($q2_r == $q2_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer1 }}" checked> {{ $q2_answer1 }}
                </label>
@elseif ($q2_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer1 }}" > {{ $q2_answer1 }}
                </label>

@endif




@if ( ($q2_answer2 !== '') && ($q2_r == $q2_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer2 }}" checked> {{ $q2_answer2 }}
                </label>
@elseif ($q2_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer2 }}" > {{ $q2_answer2 }}
                </label>

@endif



@if ( ($q2_answer3 !== '') && ($q2_r == $q2_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer3 }}" checked> {{ $q2_answer3 }}
                </label>
@elseif ($q2_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer3 }}" > {{ $q2_answer3 }}
                </label>

@endif



@if ( ($q2_answer4 !== '') && ($q2_r == $q2_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer4 }}" checked> {{ $q2_answer4 }}
                </label>
@elseif ($q2_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer4 }}" > {{ $q2_answer4 }}
                </label>

@endif



@if ( ($q2_answer5 !== '') && ($q2_r == $q2_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer5 }}" checked> {{ $q2_answer5 }}
                </label>
@elseif ($q2_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer5 }}" > {{ $q2_answer5 }}
                </label>

@endif


@if ( ($q2_answer6 !== '') && ($q2_r == $q2_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer6 }}" checked> {{ $q2_answer6 }}
                </label>
@elseif ($q2_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer6 }}" > {{ $q2_answer6 }}
                </label>

@endif



@if ( ($q2_answer7 !== '') && ($q2_r == $q2_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer7 }}" checked> {{ $q2_answer7 }}
                </label>
@elseif ($q2_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question2"  value="{{ $q2_answer7 }}" > {{ $q2_answer7 }}
                </label>

@endif
                

                @if($q2_r == $x2)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q2_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x2 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif




@if ($question3 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>3</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question3 }}</p>
                <hr>

@if ( ($q3_answer1 !== '') && ($q3_r == $q3_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer1 }}" checked> {{ $q3_answer1 }}
                </label>
@elseif ($q3_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer1 }}" > {{ $q3_answer1 }}
                </label>

@endif




@if ( ($q3_answer2 !== '') && ($q3_r == $q3_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer2 }}" checked> {{ $q3_answer2 }}
                </label>
@elseif ($q3_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer2 }}" > {{ $q3_answer2 }}
                </label>

@endif



@if ( ($q3_answer3 !== '') && ($q3_r == $q3_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer3 }}" checked> {{ $q3_answer3 }}
                </label>
@elseif ($q3_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer3 }}" > {{ $q3_answer3 }}
                </label>

@endif



@if ( ($q3_answer4 !== '') && ($q3_r == $q3_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer4 }}" checked> {{ $q3_answer4 }}
                </label>
@elseif ($q3_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer4 }}" > {{ $q3_answer4 }}
                </label>

@endif



@if ( ($q3_answer5 !== '') && ($q3_r == $q3_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer5 }}" checked> {{ $q3_answer5 }}
                </label>
@elseif ($q3_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer5 }}" > {{ $q3_answer5 }}
                </label>

@endif


@if ( ($q3_answer6 !== '') && ($q3_r == $q3_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer6 }}" checked> {{ $q3_answer6 }}
                </label>
@elseif ($q3_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer6 }}" > {{ $q3_answer6 }}
                </label>

@endif



@if ( ($q3_answer7 !== '') && ($q3_r == $q3_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer7 }}" checked> {{ $q3_answer7 }}
                </label>
@elseif ($q3_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question3"  value="{{ $q3_answer7 }}" > {{ $q3_answer7 }}
                </label>

@endif
                

                @if($q3_r == $x3)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q3_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x3 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif


@if ($question4 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>4</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question4 }}</p>
                <hr>

@if ( ($q4_answer1 !== '') && ($q4_r == $q4_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer1 }}" checked> {{ $q4_answer1 }}
                </label>
@elseif ($q4_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer1 }}" > {{ $q4_answer1 }}
                </label>

@endif




@if ( ($q4_answer2 !== '') && ($q4_r == $q4_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer2 }}" checked> {{ $q4_answer2 }}
                </label>
@elseif ($q4_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer2 }}" > {{ $q4_answer2 }}
                </label>

@endif



@if ( ($q4_answer3 !== '') && ($q4_r == $q4_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer3 }}" checked> {{ $q4_answer3 }}
                </label>
@elseif ($q4_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer3 }}" > {{ $q4_answer3 }}
                </label>

@endif



@if ( ($q4_answer4 !== '') && ($q4_r == $q4_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer4 }}" checked> {{ $q4_answer4 }}
                </label>
@elseif ($q4_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer4 }}" > {{ $q4_answer4 }}
                </label>

@endif



@if ( ($q4_answer5 !== '') && ($q4_r == $q4_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer5 }}" checked> {{ $q4_answer5 }}
                </label>
@elseif ($q4_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer5 }}" > {{ $q4_answer5 }}
                </label>

@endif


@if ( ($q4_answer6 !== '') && ($q4_r == $q4_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer6 }}" checked> {{ $q4_answer6 }}
                </label>
@elseif ($q4_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer6 }}" > {{ $q4_answer6 }}
                </label>

@endif



@if ( ($q4_answer7 !== '') && ($q4_r == $q4_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer7 }}" checked> {{ $q4_answer7 }}
                </label>
@elseif ($q4_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question4"  value="{{ $q4_answer7 }}" > {{ $q4_answer7 }}
                </label>

@endif
                

                @if($q4_r == $x4)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q4_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x4 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif

@if ($question5 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>5</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question5 }}</p>
                <hr>

@if ( ($q5_answer1 !== '') && ($q5_r == $q5_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer1 }}" checked> {{ $q5_answer1 }}
                </label>
@elseif ($q5_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer1 }}" > {{ $q5_answer1 }}
                </label>

@endif




@if ( ($q5_answer2 !== '') && ($q5_r == $q5_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer2 }}" checked> {{ $q5_answer2 }}
                </label>
@elseif ($q5_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer2 }}" > {{ $q5_answer2 }}
                </label>

@endif



@if ( ($q5_answer3 !== '') && ($q5_r == $q5_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer3 }}" checked> {{ $q5_answer3 }}
                </label>
@elseif ($q5_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer3 }}" > {{ $q5_answer3 }}
                </label>

@endif



@if ( ($q5_answer4 !== '') && ($q5_r == $q5_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer4 }}" checked> {{ $q5_answer4 }}
                </label>
@elseif ($q5_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer4 }}" > {{ $q5_answer4 }}
                </label>

@endif



@if ( ($q5_answer5 !== '') && ($q5_r == $q5_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer5 }}" checked> {{ $q5_answer5 }}
                </label>
@elseif ($q5_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer5 }}" > {{ $q5_answer5 }}
                </label>

@endif


@if ( ($q5_answer6 !== '') && ($q5_r == $q5_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer6 }}" checked> {{ $q5_answer6 }}
                </label>
@elseif ($q5_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer6 }}" > {{ $q5_answer6 }}
                </label>

@endif



@if ( ($q5_answer7 !== '') && ($q5_r == $q5_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer7 }}" checked> {{ $q5_answer7 }}
                </label>
@elseif ($q5_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question5"  value="{{ $q5_answer7 }}" > {{ $q5_answer7 }}
                </label>

@endif
                

                @if($q5_r == $x5)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q5_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x5 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif


@if ($question6 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>6</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question6 }}</p>
                <hr>

@if ( ($q6_answer1 !== '') && ($q6_r == $q6_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer1 }}" checked> {{ $q6_answer1 }}
                </label>
@elseif ($q6_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer1 }}" > {{ $q6_answer1 }}
                </label>

@endif




@if ( ($q6_answer2 !== '') && ($q6_r == $q6_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer2 }}" checked> {{ $q6_answer2 }}
                </label>
@elseif ($q6_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer2 }}" > {{ $q6_answer2 }}
                </label>

@endif



@if ( ($q6_answer3 !== '') && ($q6_r == $q6_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer3 }}" checked> {{ $q6_answer3 }}
                </label>
@elseif ($q6_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer3 }}" > {{ $q6_answer3 }}
                </label>

@endif



@if ( ($q6_answer4 !== '') && ($q6_r == $q6_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer4 }}" checked> {{ $q6_answer4 }}
                </label>
@elseif ($q6_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer4 }}" > {{ $q6_answer4 }}
                </label>

@endif



@if ( ($q6_answer5 !== '') && ($q6_r == $q6_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer5 }}" checked> {{ $q6_answer5 }}
                </label>
@elseif ($q6_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer5 }}" > {{ $q6_answer5 }}
                </label>

@endif


@if ( ($q6_answer6 !== '') && ($q6_r == $q6_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer6 }}" checked> {{ $q6_answer6 }}
                </label>
@elseif ($q6_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer6 }}" > {{ $q6_answer6 }}
                </label>

@endif



@if ( ($q6_answer7 !== '') && ($q6_r == $q6_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer7 }}" checked> {{ $q6_answer7 }}
                </label>
@elseif ($q6_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question6"  value="{{ $q6_answer7 }}" > {{ $q6_answer7 }}
                </label>

@endif
                

                @if($q6_r == $x6)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q6_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x6 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif


@if ($question7 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>7</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question7 }}</p>
                <hr>

@if ( ($q7_answer1 !== '') && ($q7_r == $q7_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer1 }}" checked> {{ $q7_answer1 }}
                </label>
@elseif ($q7_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer1 }}" > {{ $q7_answer1 }}
                </label>

@endif




@if ( ($q7_answer2 !== '') && ($q7_r == $q7_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer2 }}" checked> {{ $q7_answer2 }}
                </label>
@elseif ($q7_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer2 }}" > {{ $q7_answer2 }}
                </label>

@endif



@if ( ($q7_answer3 !== '') && ($q7_r == $q7_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer3 }}" checked> {{ $q7_answer3 }}
                </label>
@elseif ($q7_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer3 }}" > {{ $q7_answer3 }}
                </label>

@endif



@if ( ($q7_answer4 !== '') && ($q7_r == $q7_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer4 }}" checked> {{ $q7_answer4 }}
                </label>
@elseif ($q7_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer4 }}" > {{ $q7_answer4 }}
                </label>

@endif



@if ( ($q7_answer5 !== '') && ($q7_r == $q7_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer5 }}" checked> {{ $q7_answer5 }}
                </label>
@elseif ($q7_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer5 }}" > {{ $q7_answer5 }}
                </label>

@endif


@if ( ($q7_answer6 !== '') && ($q7_r == $q7_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer6 }}" checked> {{ $q7_answer6 }}
                </label>
@elseif ($q7_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer6 }}" > {{ $q7_answer6 }}
                </label>

@endif



@if ( ($q7_answer7 !== '') && ($q7_r == $q7_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer7 }}" checked> {{ $q7_answer7 }}
                </label>
@elseif ($q7_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question7"  value="{{ $q7_answer7 }}" > {{ $q7_answer7 }}
                </label>

@endif
                

                @if($q7_r == $x7)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q7_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x7 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif



@if ($question8 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>8</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question8 }}</p>
                <hr>

@if ( ($q8_answer1 !== '') && ($q8_r == $q8_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer1 }}" checked> {{ $q8_answer1 }}
                </label>
@elseif ($q8_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer1 }}" > {{ $q8_answer1 }}
                </label>

@endif




@if ( ($q8_answer2 !== '') && ($q8_r == $q8_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer2 }}" checked> {{ $q8_answer2 }}
                </label>
@elseif ($q8_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer2 }}" > {{ $q8_answer2 }}
                </label>

@endif



@if ( ($q8_answer3 !== '') && ($q8_r == $q8_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer3 }}" checked> {{ $q8_answer3 }}
                </label>
@elseif ($q8_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer3 }}" > {{ $q8_answer3 }}
                </label>

@endif



@if ( ($q8_answer4 !== '') && ($q8_r == $q8_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer4 }}" checked> {{ $q8_answer4 }}
                </label>
@elseif ($q8_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer4 }}" > {{ $q8_answer4 }}
                </label>

@endif



@if ( ($q8_answer5 !== '') && ($q8_r == $q8_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer5 }}" checked> {{ $q8_answer5 }}
                </label>
@elseif ($q8_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer5 }}" > {{ $q8_answer5 }}
                </label>

@endif


@if ( ($q8_answer6 !== '') && ($q8_r == $q8_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer6 }}" checked> {{ $q8_answer6 }}
                </label>
@elseif ($q8_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer6 }}" > {{ $q8_answer6 }}
                </label>

@endif



@if ( ($q8_answer7 !== '') && ($q8_r == $q8_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer7 }}" checked> {{ $q8_answer7 }}
                </label>
@elseif ($q8_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question8"  value="{{ $q8_answer7 }}" > {{ $q8_answer7 }}
                </label>

@endif
                

                @if($q8_r == $x8)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q8_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x8 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif



@if ($question9 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>9</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question9 }}</p>
                <hr>

@if ( ($q9_answer1 !== '') && ($q9_r == $q9_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer1 }}" checked> {{ $q9_answer1 }}
                </label>
@elseif ($q9_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer1 }}" > {{ $q9_answer1 }}
                </label>

@endif




@if ( ($q9_answer2 !== '') && ($q9_r == $q9_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer2 }}" checked> {{ $q9_answer2 }}
                </label>
@elseif ($q9_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer2 }}" > {{ $q9_answer2 }}
                </label>

@endif



@if ( ($q9_answer3 !== '') && ($q9_r == $q9_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer3 }}" checked> {{ $q9_answer3 }}
                </label>
@elseif ($q9_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer3 }}" > {{ $q9_answer3 }}
                </label>

@endif



@if ( ($q9_answer4 !== '') && ($q9_r == $q9_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer4 }}" checked> {{ $q9_answer4 }}
                </label>
@elseif ($q9_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer4 }}" > {{ $q9_answer4 }}
                </label>

@endif



@if ( ($q9_answer5 !== '') && ($q9_r == $q9_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer5 }}" checked> {{ $q9_answer5 }}
                </label>
@elseif ($q9_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer5 }}" > {{ $q9_answer5 }}
                </label>

@endif


@if ( ($q9_answer6 !== '') && ($q9_r == $q9_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer6 }}" checked> {{ $q9_answer6 }}
                </label>
@elseif ($q9_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer6 }}" > {{ $q9_answer6 }}
                </label>

@endif



@if ( ($q9_answer7 !== '') && ($q9_r == $q9_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer7 }}" checked> {{ $q9_answer7 }}
                </label>
@elseif ($q9_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question9"  value="{{ $q9_answer7 }}" > {{ $q9_answer7 }}
                </label>

@endif
                

                @if($q9_r == $x9)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q9_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x9 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif

@if ($question10 !== '')
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2"><center>10</center></div>
                <div class="col-md-11" id="">

            <p id="questioncontent">{{ $question10 }}</p>
                <hr>

@if ( ($q10_answer1 !== '') && ($q10_r == $q10_answer1) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer1 }}" checked> {{ $q10_answer1 }}
                </label>
@elseif ($q10_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer1 }}" > {{ $q10_answer1 }}
                </label>

@endif




@if ( ($q10_answer2 !== '') && ($q10_r == $q10_answer2) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer2 }}" checked> {{ $q10_answer2 }}
                </label>
@elseif ($q10_answer1 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer2 }}" > {{ $q10_answer2 }}
                </label>

@endif



@if ( ($q10_answer3 !== '') && ($q10_r == $q10_answer3) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer3 }}" checked> {{ $q10_answer3 }}
                </label>
@elseif ($q10_answer3 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer3 }}" > {{ $q10_answer3 }}
                </label>

@endif



@if ( ($q10_answer4 !== '') && ($q10_r == $q10_answer4) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer4 }}" checked> {{ $q10_answer4 }}
                </label>
@elseif ($q10_answer4 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer4 }}" > {{ $q10_answer4 }}
                </label>

@endif



@if ( ($q10_answer5 !== '') && ($q10_r == $q10_answer5) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer5 }}" checked> {{ $q10_answer5 }}
                </label>
@elseif ($q10_answer5 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer5 }}" > {{ $q10_answer5 }}
                </label>

@endif


@if ( ($q10_answer6 !== '') && ($q10_r == $q10_answer6) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer6 }}" checked> {{ $q10_answer6 }}
                </label>
@elseif ($q10_answer6 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer6 }}" > {{ $q10_answer6 }}
                </label>

@endif



@if ( ($q10_answer7 !== '') && ($q10_r == $q10_answer7) )
                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer7 }}" checked> {{ $q10_answer7 }}
                </label>
@elseif ($q10_answer7 !== '') 

                <label class="radio-inline">
                     <input type="radio" name="question10"  value="{{ $q10_answer7 }}" > {{ $q10_answer7 }}
                </label>

@endif
                

                @if($q10_r == $x10)
                <code style="background:green;color:white">Correct</code>
                @else
                    @if($q10_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <code style="background:green;color:white">Correct Answer : " {{ $x10 }} "</code>
              
                @endif
                @endif
                </div>
            </div>
@endif



<div class="row ">
		<div class="pull-right" style="    margin: 20px;">
			<input type="submit" value="Submit" class="btn btn-success">

		</div>


</div>

		</div>

	</div>
</div>
	
{{Form::close()}}
@if(Session::has('flash_message'))

<div class="container-fluid">
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
            //Updated profile
            generate('success', notification_html[5]);
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
</body>
</html>