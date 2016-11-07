<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	label.inline1 {
    display: block !important;
}
#correctmeX{
            background: green;
    color: white;
    /* padding-bottom: 20px !important; */
    padding: 5px;
    border-radius: 5px;
    margin: 20px !important;
    box-shadow: 1px 1px 1px 1px #142f14;
}
</style>
<!--
<link rel="stylesheet" type="text/css" href="/css/register.css">
<link rel="stylesheet" type="text/css" href="/css/check5.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/style.css">


-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready ( function () {

    $('.next').click(function(){
  var nextId = $(this).parents('.tab-pane').next().attr("id");
  $('[href=#'+nextId+']').tab('show');
  return false;
  
})

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  
  //update progress
  var step = $(e.target).data('step');
  var percent = (parseInt(step) / 10) * 100;
  
  $('.progress-bar').css({width: percent + '%'});
  $('.progress-bar').text("Question " + step + " of 10");
  
  //e.relatedTarget // previous tab
  
})

$('.first').click(function(){

  $('#myWizard a:first').tab('show')

})
});

</script>



   <script src="/noty-2.3.8/demo/jquery-1.7.2.min.js"></script>

    <script type="text/javascript" src="/noty-2.3.8/js/noty/packaged/jquery.noty.packaged.js"></script>
    <script type="text/javascript" src="/noty-2.3.8/demo/notification_html.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/csshome.css">

<link rel="stylesheet" type="text/css" href="/css/myscutomizeCSS.css">


<style type="text/css">
    .quesnumb{
        color: #d42828;
    }
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
<div class="container-fluid">


<!--
@if(Session::has('flash_message'))
<div class="row">
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
</div>
@endif
!-->

<div class="container-fluid" id="myWizard">
  

  
   <div class="progress">
     <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="10" style="width: 10%;">
       Question 1 of 10
     </div>
   </div>
  
   <div class="navbar" style="display:none">
      <div class="navbar-inner">
            <ul class="nav nav-pills">
               <li class="active"><a href="#step1" data-toggle="tab" data-step="1">Step 1</a></li>
               <li><a href="#step2" data-toggle="tab" data-step="2">Step 2</a></li>
               <li><a href="#step3" data-toggle="tab" data-step="3">Step 3</a></li>
               <li><a href="#step4" data-toggle="tab" data-step="4">Step 4</a></li>
               <li><a href="#step5" data-toggle="tab" data-step="5">Step 5</a></li>
               <li><a href="#step6" data-toggle="tab" data-step="6">Step 6</a></li>
               <li><a href="#step7" data-toggle="tab" data-step="7">Step 7</a></li>
               <li><a href="#step8" data-toggle="tab" data-step="8">Step 8</a></li>
               <li><a href="#step9" data-toggle="tab" data-step="9">Step 9</a></li>
               <li><a href="#step10" data-toggle="tab" data-step="10">Step 10</a></li>
            </ul>
      </div>
   </div>
   <div class="tab-content">
   @if ($question1 !== '')
      <div class="tab-pane fade in active" id="step1">
        <div class="well"> 
          
                        <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>1</center></div>
                <div class="col-md-11" id="">
                        
                <label class="quesnumb"><b><u><i>Question 1:</i></u></b> </label>
            <p id="questioncontent">{{ $question1 }}</p>
               

@if ( ($q1_answer1 !== '') && ($q1_r == $q1_answer1) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer1 }}" checked> {{ $q1_answer1 }}
                </label>
@elseif ($q1_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer1 }}" > {{ $q1_answer1 }}
                </label>

@endif




@if ( ($q1_answer2 !== '') && ($q1_r == $q1_answer2) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer2 }}" checked> {{ $q1_answer2 }}
                </label>
@elseif ($q1_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer2 }}" > {{ $q1_answer2 }}
                </label>

@endif



@if ( ($q1_answer3 !== '') && ($q1_r == $q1_answer3) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer3 }}" checked> {{ $q1_answer3 }}
                </label>
@elseif ($q1_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer3 }}" > {{ $q1_answer3 }}
                </label>

@endif



@if ( ($q1_answer4 !== '') && ($q1_r == $q1_answer4) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer4 }}" checked> {{ $q1_answer4 }}
                </label>
@elseif ($q1_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer4 }}" > {{ $q1_answer4 }}
                </label>

@endif



@if ( ($q1_answer5 !== '') && ($q1_r == $q1_answer5) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer5 }}" checked> {{ $q1_answer5 }}
                </label>
@elseif ($q1_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer5 }}" > {{ $q1_answer5 }}
                </label>

@endif


@if ( ($q1_answer6 !== '') && ($q1_r == $q1_answer6) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer6 }}" checked> {{ $q1_answer6 }}
                </label>
@elseif ($q1_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer6 }}" > {{ $q1_answer6 }}
                </label>

@endif



@if ( ($q1_answer7 !== '') && ($q1_r == $q1_answer7) )
                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer7 }}" checked> {{ $q1_answer7 }}
                </label>
@elseif ($q1_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question1"  value="{{ $q1_answer7 }}" > {{ $q1_answer7 }}
                </label>

@endif
                

                @if($q1_r == $x1)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q1_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x1 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
            
        </div>

         <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>

    @endif
    @if ($question2 !== '')

      <div class="tab-pane fade" id="step2">
         <div class="well"> 
          
                        <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>2</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 2:</i></u></b> </label>

            <p id="questioncontent">{{ $question2 }}</p>
               

@if ( ($q2_answer1 !== '') && ($q2_r == $q2_answer1) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer1 }}" checked> {{ $q2_answer1 }}
                </label>
@elseif ($q2_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer1 }}" > {{ $q2_answer1 }}
                </label>

@endif




@if ( ($q2_answer2 !== '') && ($q2_r == $q2_answer2) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer2 }}" checked> {{ $q2_answer2 }}
                </label>
@elseif ($q2_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer2 }}" > {{ $q2_answer2 }}
                </label>

@endif



@if ( ($q2_answer3 !== '') && ($q2_r == $q2_answer3) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer3 }}" checked> {{ $q2_answer3 }}
                </label>
@elseif ($q2_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer3 }}" > {{ $q2_answer3 }}
                </label>

@endif



@if ( ($q2_answer4 !== '') && ($q2_r == $q2_answer4) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer4 }}" checked> {{ $q2_answer4 }}
                </label>
@elseif ($q2_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer4 }}" > {{ $q2_answer4 }}
                </label>

@endif



@if ( ($q2_answer5 !== '') && ($q2_r == $q2_answer5) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer5 }}" checked> {{ $q2_answer5 }}
                </label>
@elseif ($q2_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer5 }}" > {{ $q2_answer5 }}
                </label>

@endif


@if ( ($q2_answer6 !== '') && ($q2_r == $q2_answer6) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer6 }}" checked> {{ $q2_answer6 }}
                </label>
@elseif ($q2_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer6 }}" > {{ $q2_answer6 }}
                </label>

@endif



@if ( ($q2_answer7 !== '') && ($q2_r == $q2_answer7) )
                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer7 }}" checked> {{ $q2_answer7 }}
                </label>
@elseif ($q2_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question2"  value="{{ $q2_answer7 }}" > {{ $q2_answer7 }}
                </label>

@endif
                

                @if($q2_r == $x2)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q2_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x2 }} "</span>
              
                @endif
                @endif
                </div>
            </div>

            
         </div>
         <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
      @endif


      @if ($question3 !== '')
      <div class="tab-pane fade" id="step3">
        <div class="well"> 
                       <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>3</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 3:</i></u></b> </label>

            <p id="questioncontent">{{ $question3 }}</p>
               

@if ( ($q3_answer1 !== '') && ($q3_r == $q3_answer1) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer1 }}" checked> {{ $q3_answer1 }}
                </label>
@elseif ($q3_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer1 }}" > {{ $q3_answer1 }}
                </label>

@endif




@if ( ($q3_answer2 !== '') && ($q3_r == $q3_answer2) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer2 }}" checked> {{ $q3_answer2 }}
                </label>
@elseif ($q3_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer2 }}" > {{ $q3_answer2 }}
                </label>

@endif



@if ( ($q3_answer3 !== '') && ($q3_r == $q3_answer3) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer3 }}" checked> {{ $q3_answer3 }}
                </label>
@elseif ($q3_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer3 }}" > {{ $q3_answer3 }}
                </label>

@endif



@if ( ($q3_answer4 !== '') && ($q3_r == $q3_answer4) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer4 }}" checked> {{ $q3_answer4 }}
                </label>
@elseif ($q3_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer4 }}" > {{ $q3_answer4 }}
                </label>

@endif



@if ( ($q3_answer5 !== '') && ($q3_r == $q3_answer5) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer5 }}" checked> {{ $q3_answer5 }}
                </label>
@elseif ($q3_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer5 }}" > {{ $q3_answer5 }}
                </label>

@endif


@if ( ($q3_answer6 !== '') && ($q3_r == $q3_answer6) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer6 }}" checked> {{ $q3_answer6 }}
                </label>
@elseif ($q3_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer6 }}" > {{ $q3_answer6 }}
                </label>

@endif



@if ( ($q3_answer7 !== '') && ($q3_r == $q3_answer7) )
                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer7 }}" checked> {{ $q3_answer7 }}
                </label>
@elseif ($q3_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question3"  value="{{ $q3_answer7 }}" > {{ $q3_answer7 }}
                </label>

@endif
                

                @if($q3_r == $x3)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q3_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x3 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
         <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
      @endif

@if ($question4 !== '')
      <div class="tab-pane fade" id="step4">
        <div class="well"> 
                       <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>4</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 4:</i></u></b> </label>

            <p id="questioncontent">{{ $question4 }}</p>
               

@if ( ($q4_answer1 !== '') && ($q4_r == $q4_answer1) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer1 }}" checked> {{ $q4_answer1 }}
                </label>
@elseif ($q4_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer1 }}" > {{ $q4_answer1 }}
                </label>

@endif




@if ( ($q4_answer2 !== '') && ($q4_r == $q4_answer2) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer2 }}" checked> {{ $q4_answer2 }}
                </label>
@elseif ($q4_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer2 }}" > {{ $q4_answer2 }}
                </label>

@endif



@if ( ($q4_answer3 !== '') && ($q4_r == $q4_answer3) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer3 }}" checked> {{ $q4_answer3 }}
                </label>
@elseif ($q4_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer3 }}" > {{ $q4_answer3 }}
                </label>

@endif



@if ( ($q4_answer4 !== '') && ($q4_r == $q4_answer4) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer4 }}" checked> {{ $q4_answer4 }}
                </label>
@elseif ($q4_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer4 }}" > {{ $q4_answer4 }}
                </label>

@endif



@if ( ($q4_answer5 !== '') && ($q4_r == $q4_answer5) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer5 }}" checked> {{ $q4_answer5 }}
                </label>
@elseif ($q4_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer5 }}" > {{ $q4_answer5 }}
                </label>

@endif


@if ( ($q4_answer6 !== '') && ($q4_r == $q4_answer6) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer6 }}" checked> {{ $q4_answer6 }}
                </label>
@elseif ($q4_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer6 }}" > {{ $q4_answer6 }}
                </label>

@endif



@if ( ($q4_answer7 !== '') && ($q4_r == $q4_answer7) )
                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer7 }}" checked> {{ $q4_answer7 }}
                </label>
@elseif ($q4_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question4"  value="{{ $q4_answer7 }}" > {{ $q4_answer7 }}
                </label>

@endif
                

                @if($q4_r == $x4)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q4_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x4 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
         <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
@endif
@if ($question5 !== '')
      <div class="tab-pane fade" id="step5">
        <div class="well">
                       <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>5</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 5:</i></u></b> </label>

            <p id="questioncontent">{{ $question5 }}</p>
               

@if ( ($q5_answer1 !== '') && ($q5_r == $q5_answer1) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer1 }}" checked> {{ $q5_answer1 }}
                </label>
@elseif ($q5_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer1 }}" > {{ $q5_answer1 }}
                </label>

@endif




@if ( ($q5_answer2 !== '') && ($q5_r == $q5_answer2) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer2 }}" checked> {{ $q5_answer2 }}
                </label>
@elseif ($q5_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer2 }}" > {{ $q5_answer2 }}
                </label>

@endif



@if ( ($q5_answer3 !== '') && ($q5_r == $q5_answer3) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer3 }}" checked> {{ $q5_answer3 }}
                </label>
@elseif ($q5_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer3 }}" > {{ $q5_answer3 }}
                </label>

@endif



@if ( ($q5_answer4 !== '') && ($q5_r == $q5_answer4) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer4 }}" checked> {{ $q5_answer4 }}
                </label>
@elseif ($q5_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer4 }}" > {{ $q5_answer4 }}
                </label>

@endif



@if ( ($q5_answer5 !== '') && ($q5_r == $q5_answer5) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer5 }}" checked> {{ $q5_answer5 }}
                </label>
@elseif ($q5_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer5 }}" > {{ $q5_answer5 }}
                </label>

@endif


@if ( ($q5_answer6 !== '') && ($q5_r == $q5_answer6) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer6 }}" checked> {{ $q5_answer6 }}
                </label>
@elseif ($q5_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer6 }}" > {{ $q5_answer6 }}
                </label>

@endif



@if ( ($q5_answer7 !== '') && ($q5_r == $q5_answer7) )
                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer7 }}" checked> {{ $q5_answer7 }}
                </label>
@elseif ($q5_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question5"  value="{{ $q5_answer7 }}" > {{ $q5_answer7 }}
                </label>

@endif
                

                @if($q5_r == $x5)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q5_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x5 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
                  <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
@endif



@if ($question6 !== '')
      <div class="tab-pane fade" id="step6">
        <div class="well">
                      
              	           <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>6</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 6:</i></u></b> </label>

            <p id="questioncontent">{{ $question6 }}</p>
                

@if ( ($q6_answer1 !== '') && ($q6_r == $q6_answer1) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer1 }}" checked> {{ $q6_answer1 }}
                </label>
@elseif ($q6_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer1 }}" > {{ $q6_answer1 }}
                </label>

@endif




@if ( ($q6_answer2 !== '') && ($q6_r == $q6_answer2) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer2 }}" checked> {{ $q6_answer2 }}
                </label>
@elseif ($q6_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer2 }}" > {{ $q6_answer2 }}
                </label>

@endif



@if ( ($q6_answer3 !== '') && ($q6_r == $q6_answer3) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer3 }}" checked> {{ $q6_answer3 }}
                </label>
@elseif ($q6_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer3 }}" > {{ $q6_answer3 }}
                </label>

@endif



@if ( ($q6_answer4 !== '') && ($q6_r == $q6_answer4) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer4 }}" checked> {{ $q6_answer4 }}
                </label>
@elseif ($q6_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer4 }}" > {{ $q6_answer4 }}
                </label>

@endif



@if ( ($q6_answer5 !== '') && ($q6_r == $q6_answer5) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer5 }}" checked> {{ $q6_answer5 }}
                </label>
@elseif ($q6_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer5 }}" > {{ $q6_answer5 }}
                </label>

@endif


@if ( ($q6_answer6 !== '') && ($q6_r == $q6_answer6) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer6 }}" checked> {{ $q6_answer6 }}
                </label>
@elseif ($q6_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer6 }}" > {{ $q6_answer6 }}
                </label>

@endif



@if ( ($q6_answer7 !== '') && ($q6_r == $q6_answer7) )
                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer7 }}" checked> {{ $q6_answer7 }}
                </label>
@elseif ($q6_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question6"  value="{{ $q6_answer7 }}" > {{ $q6_answer7 }}
                </label>

@endif
                

                @if($q6_r == $x6)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q6_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x6 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
                  <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
@endif



@if ($question7 !== '')
      <div class="tab-pane fade" id="step7">
        <div class="well">
                      
            <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>7</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 7:</i></u></b> </label>

            <p id="questioncontent">{{ $question7 }}</p>
                

@if ( ($q7_answer1 !== '') && ($q7_r == $q7_answer1) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer1 }}" checked> {{ $q7_answer1 }}
                </label>
@elseif ($q7_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer1 }}" > {{ $q7_answer1 }}
                </label>

@endif




@if ( ($q7_answer2 !== '') && ($q7_r == $q7_answer2) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer2 }}" checked> {{ $q7_answer2 }}
                </label>
@elseif ($q7_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer2 }}" > {{ $q7_answer2 }}
                </label>

@endif



@if ( ($q7_answer3 !== '') && ($q7_r == $q7_answer3) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer3 }}" checked> {{ $q7_answer3 }}
                </label>
@elseif ($q7_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer3 }}" > {{ $q7_answer3 }}
                </label>

@endif



@if ( ($q7_answer4 !== '') && ($q7_r == $q7_answer4) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer4 }}" checked> {{ $q7_answer4 }}
                </label>
@elseif ($q7_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer4 }}" > {{ $q7_answer4 }}
                </label>

@endif



@if ( ($q7_answer5 !== '') && ($q7_r == $q7_answer5) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer5 }}" checked> {{ $q7_answer5 }}
                </label>
@elseif ($q7_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer5 }}" > {{ $q7_answer5 }}
                </label>

@endif


@if ( ($q7_answer6 !== '') && ($q7_r == $q7_answer6) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer6 }}" checked> {{ $q7_answer6 }}
                </label>
@elseif ($q7_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer6 }}" > {{ $q7_answer6 }}
                </label>

@endif



@if ( ($q7_answer7 !== '') && ($q7_r == $q7_answer7) )
                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer7 }}" checked> {{ $q7_answer7 }}
                </label>
@elseif ($q7_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question7"  value="{{ $q7_answer7 }}" > {{ $q7_answer7 }}
                </label>

@endif
                

                @if($q7_r == $x7)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q7_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x7 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
                  <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
@endif



@if ($question8 !== '')
      <div class="tab-pane fade" id="step8">
        <div class="well">
                      
              	           <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>8</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 8:</i></u></b> </label>

            <p id="questioncontent">{{ $question8 }}</p>
                

@if ( ($q8_answer1 !== '') && ($q8_r == $q8_answer1) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer1 }}" checked> {{ $q8_answer1 }}
                </label>
@elseif ($q8_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer1 }}" > {{ $q8_answer1 }}
                </label>

@endif




@if ( ($q8_answer2 !== '') && ($q8_r == $q8_answer2) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer2 }}" checked> {{ $q8_answer2 }}
                </label>
@elseif ($q8_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer2 }}" > {{ $q8_answer2 }}
                </label>

@endif



@if ( ($q8_answer3 !== '') && ($q8_r == $q8_answer3) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer3 }}" checked> {{ $q8_answer3 }}
                </label>
@elseif ($q8_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer3 }}" > {{ $q8_answer3 }}
                </label>

@endif



@if ( ($q8_answer4 !== '') && ($q8_r == $q8_answer4) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer4 }}" checked> {{ $q8_answer4 }}
                </label>
@elseif ($q8_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer4 }}" > {{ $q8_answer4 }}
                </label>

@endif



@if ( ($q8_answer5 !== '') && ($q8_r == $q8_answer5) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer5 }}" checked> {{ $q8_answer5 }}
                </label>
@elseif ($q8_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer5 }}" > {{ $q8_answer5 }}
                </label>

@endif


@if ( ($q8_answer6 !== '') && ($q8_r == $q8_answer6) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer6 }}" checked> {{ $q8_answer6 }}
                </label>
@elseif ($q8_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer6 }}" > {{ $q8_answer6 }}
                </label>

@endif



@if ( ($q8_answer7 !== '') && ($q8_r == $q8_answer7) )
                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer7 }}" checked> {{ $q8_answer7 }}
                </label>
@elseif ($q8_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question8"  value="{{ $q8_answer7 }}" > {{ $q8_answer7 }}
                </label>

@endif
                

                @if($q8_r == $x8)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q8_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x8 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
                  <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>
      </div>
@endif

@if ($question9 !== '')

      <div class="tab-pane fade" id="step9">
        <div class="well">
                    <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>9</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 9:</i></u></b> </label>

            <p id="questioncontent">{{ $question9 }}</p>
                

@if ( ($q9_answer1 !== '') && ($q9_r == $q9_answer1) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer1 }}" checked> {{ $q9_answer1 }}
                </label>
@elseif ($q9_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer1 }}" > {{ $q9_answer1 }}
                </label>

@endif




@if ( ($q9_answer2 !== '') && ($q9_r == $q9_answer2) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer2 }}" checked> {{ $q9_answer2 }}
                </label>
@elseif ($q9_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer2 }}" > {{ $q9_answer2 }}
                </label>

@endif



@if ( ($q9_answer3 !== '') && ($q9_r == $q9_answer3) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer3 }}" checked> {{ $q9_answer3 }}
                </label>
@elseif ($q9_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer3 }}" > {{ $q9_answer3 }}
                </label>

@endif



@if ( ($q9_answer4 !== '') && ($q9_r == $q9_answer4) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer4 }}" checked> {{ $q9_answer4 }}
                </label>
@elseif ($q9_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer4 }}" > {{ $q9_answer4 }}
                </label>

@endif



@if ( ($q9_answer5 !== '') && ($q9_r == $q9_answer5) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer5 }}" checked> {{ $q9_answer5 }}
                </label>
@elseif ($q9_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer5 }}" > {{ $q9_answer5 }}
                </label>

@endif


@if ( ($q9_answer6 !== '') && ($q9_r == $q9_answer6) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer6 }}" checked> {{ $q9_answer6 }}
                </label>
@elseif ($q9_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer6 }}" > {{ $q9_answer6 }}
                </label>

@endif



@if ( ($q9_answer7 !== '') && ($q9_r == $q9_answer7) )
                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer7 }}" checked> {{ $q9_answer7 }}
                </label>
@elseif ($q9_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question9"  value="{{ $q9_answer7 }}" > {{ $q9_answer7 }}
                </label>

@endif
                

                @if($q9_r == $x9)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q9_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x9 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
                          <a class="pull-right btn btn-danger btn-lg next" href="#">Continue</a>

      </div>
@endif 

@if ($question10 !== '')
      <div class="tab-pane fade" id="step10">
        <div class="well">
                  <div class="row" id="colordiv">
                <div class="col-md-1"  id="colordiv2" style="display:none"><center>10</center></div>
                <div class="col-md-11" id="">
                <label class="quesnumb"><b><u><i>Question 10:</i></u></b> </label>

            <p id="questioncontent">{{ $question10 }}</p>
                

@if ( ($q10_answer1 !== '') && ($q10_r == $q10_answer1) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer1 }}" checked> {{ $q10_answer1 }}
                </label>
@elseif ($q10_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer1 }}" > {{ $q10_answer1 }}
                </label>

@endif




@if ( ($q10_answer2 !== '') && ($q10_r == $q10_answer2) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer2 }}" checked> {{ $q10_answer2 }}
                </label>
@elseif ($q10_answer1 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer2 }}" > {{ $q10_answer2 }}
                </label>

@endif



@if ( ($q10_answer3 !== '') && ($q10_r == $q10_answer3) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer3 }}" checked> {{ $q10_answer3 }}
                </label>
@elseif ($q10_answer3 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer3 }}" > {{ $q10_answer3 }}
                </label>

@endif



@if ( ($q10_answer4 !== '') && ($q10_r == $q10_answer4) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer4 }}" checked> {{ $q10_answer4 }}
                </label>
@elseif ($q10_answer4 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer4 }}" > {{ $q10_answer4 }}
                </label>

@endif



@if ( ($q10_answer5 !== '') && ($q10_r == $q10_answer5) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer5 }}" checked> {{ $q10_answer5 }}
                </label>
@elseif ($q10_answer5 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer5 }}" > {{ $q10_answer5 }}
                </label>

@endif


@if ( ($q10_answer6 !== '') && ($q10_r == $q10_answer6) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer6 }}" checked> {{ $q10_answer6 }}
                </label>
@elseif ($q10_answer6 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer6 }}" > {{ $q10_answer6 }}
                </label>

@endif



@if ( ($q10_answer7 !== '') && ($q10_r == $q10_answer7) )
                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer7 }}" checked> {{ $q10_answer7 }}
                </label>
@elseif ($q10_answer7 !== '') 

                <label class="inline1">
                     <input type="radio" name="question10"  value="{{ $q10_answer7 }}" > {{ $q10_answer7 }}
                </label>

@endif
                

                @if($q10_r == $x10)
                <span id="correctmeX">Correct</code>
                @else
                    @if($q10_r == "")
                    
                    @else
                    <code>Wrong</code>
                    <span id="correctmeX">Correct Answer : " {{ $x10 }} "</span>
              
                @endif
                @endif
                </div>
            </div>
        </div>
				<div class="pull-right" style="    margin: 20px;">
					<input type="submit" value="Submit" class="btn btn-success">

				</div>
        </div>
@endif

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