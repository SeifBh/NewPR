@extends('back.template')

@section('main')
<style type="text/css">
	.form-control{
		width:100% !important;
	}
</style>
<h1>Edit Survey</h1>

{{ Form::model($survey, array('method' => 'PATCH', 'route' => array('surveys.update', $survey->id))) }}


@if($survey->status == 'on')
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="status" type="checkbox" checked="checked" />
                            <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>
@else
                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="status" type="checkbox" value="on" />
                            <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>
@endif

<ul>


        <li>
            {{ Form::label('title_survey', 'title_survey:') }}
            {{ Form::text('title_survey', null, ['class' => 'form-control']) }}
        </li>

        <li>Details</li>
        <li>  

           {{ Form::textarea('details', null, ['class' => 'form-control'])}}
        </li>
</ul>



    <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr>

                        <th class="text-center">
                            Question
                        </th>
                        <th class="text-center">
                            Answer 1
                        </th>
                        <th class="text-center">
                            Answer 2
                        </th>
                        <th class="text-center">
                            Answer 3
                        </th>
                        <th class="text-center">
                            Answer 4
                        </th>

                        <th class="text-center">
                            Answer 5
                        </th>




                    </tr>
                </thead>
                <tbody>

                    <tr id="addr1">
                      <td>
                        {{ Form::text('question1') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q1_correct  =='q1_answer1')
                            <input type="radio" name="q1_correct" value="q1_answer1" checked>
                            @else
                           <input type="radio" name="q1_correct" value="q1_answer1" >
                           @endif

                          </span>
                          {{ Form::text('q1_answer1', null, ['class' => 'form-control']) }}

                           
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q1_correct  =='q1_answer2')
                            <input type="radio" name="q1_correct" value="q1_answer2" checked>
                            @else
                           <input type="radio" name="q1_correct" value="q1_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q1_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q1_correct  =='q1_answer3')
                            <input type="radio" name="q1_correct" value="q1_answer3" checked>
                            @else
                           <input type="radio" name="q1_correct" value="q1_answer3" >
                           @endif

                          </span>{{ Form::text('q1_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q1_correct  =='q1_answer4')
                            <input type="radio" name="q1_correct" value="q1_answer4" checked>
                            @else
                           <input type="radio" name="q1_correct" value="q1_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q1_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q1_correct  =='q1_answer5')
                            <input type="radio" name="q1_correct" value="q1_answer5" checked>
                            @else
                           <input type="radio" name="q1_correct" value="q1_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q1_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>



                    <tr id="addr1">
                      <td>
                        {{ Form::text('question2') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q2_correct  =='q2_answer1')
                            <input type="radio" name="q2_correct" value="q2_answer1" checked>
                            @else
                           <input type="radio" name="q2_correct" value="q2_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q2_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q2_correct  =='q2_answer2')
                            <input type="radio" name="q2_correct" value="q2_answer2" checked>
                            @else
                           <input type="radio" name="q2_correct" value="q2_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q2_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q2_correct  =='q2_answer3')
                            <input type="radio" name="q2_correct" value="q2_answer3" checked>
                            @else
                           <input type="radio" name="q2_correct" value="q2_answer3" >
                           @endif

                          </span>{{ Form::text('q2_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q2_correct  =='q2_answer4')
                            <input type="radio" name="q2_correct" value="q2_answer4" checked>
                            @else
                           <input type="radio" name="q2_correct" value="q2_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q2_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q2_correct  =='q2_answer5')
                            <input type="radio" name="q2_correct" value="q2_answer5" checked>
                            @else
                           <input type="radio" name="q2_correct" value="q2_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q2_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


                    <tr id="addr1">
                      <td>
                        {{ Form::text('question3') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q3_correct  =='q3_answer1')
                            <input type="radio" name="q3_correct" value="q3_answer1" checked>
                            @else
                           <input type="radio" name="q3_correct" value="q3_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q3_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q3_correct  =='q3_answer2')
                            <input type="radio" name="q3_correct" value="q3_answer2" checked>
                            @else
                           <input type="radio" name="q3_correct" value="q3_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q3_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q3_correct  =='q3_answer3')
                            <input type="radio" name="q3_correct" value="q3_answer3" checked>
                            @else
                           <input type="radio" name="q3_correct" value="q3_answer3" >
                           @endif

                          </span>{{ Form::text('q3_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q3_correct  =='q3_answer4')
                            <input type="radio" name="q3_correct" value="q3_answer4" checked>
                            @else
                           <input type="radio" name="q3_correct" value="q3_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q3_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q3_correct  =='q3_answer5')
                            <input type="radio" name="q3_correct" value="q3_answer5" checked>
                            @else
                           <input type="radio" name="q3_correct" value="q3_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q3_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>



        <!--     <tr id="addr1">
                      <td>
                        {{ Form::text('question4') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer1')
                            <input type="radio" name="q4_correct" value="q4_answer1" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q4_answer1') }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer2')
                            <input type="radio" name="q4_correct" value="q4_answer2" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q1_answer2') }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q4_correct  =='q4_answer3')
                            <input type="radio" name="q4_correct" value="q4_answer3" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer3" >
                           @endif

                          </span>{{ Form::text('q1_answer3') }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer4')
                            <input type="radio" name="q4_correct" value="q4_answer4" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q4_answer4') }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer5')
                            <input type="radio" name="q4_correct" value="q4_answer5" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer5" >
                           @endif
                          </span> 
                           {{ Form::text('q4_answer5') }}
                        </div>
                      </td>
                    </tr>         !-->           

             <tr id="addr1">
                      <td>
                        {{ Form::text('question4') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer1')
                            <input type="radio" name="q4_correct" value="q4_answer1" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q4_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer2')
                            <input type="radio" name="q4_correct" value="q4_answer2" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q4_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q4_correct  =='q4_answer3')
                            <input type="radio" name="q4_correct" value="q4_answer3" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer3" >
                           @endif

                          </span>{{ Form::text('q4_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer4')
                            <input type="radio" name="q4_correct" value="q4_answer4" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q4_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q4_correct  =='q4_answer5')
                            <input type="radio" name="q4_correct" value="q4_answer5" checked>
                            @else
                           <input type="radio" name="q4_correct" value="q4_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q4_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


               <tr id="addr1">
                      <td>
                        {{ Form::text('question5') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q5_correct  =='q5_answer1')
                            <input type="radio" name="q5_correct" value="q5_answer1" checked>
                            @else
                           <input type="radio" name="q5_correct" value="q5_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q5_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q5_correct  =='q5_answer2')
                            <input type="radio" name="q5_correct" value="q5_answer2" checked>
                            @else
                           <input type="radio" name="q5_correct" value="q5_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q5_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q5_correct  =='q5_answer3')
                            <input type="radio" name="q5_correct" value="q5_answer3" checked>
                            @else
                           <input type="radio" name="q5_correct" value="q5_answer3" >
                           @endif

                          </span>{{ Form::text('q5_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q5_correct  =='q5_answer4')
                            <input type="radio" name="q5_correct" value="q5_answer4" checked>
                            @else
                           <input type="radio" name="q5_correct" value="q5_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q5_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q5_correct  =='q5_answer5')
                            <input type="radio" name="q5_correct" value="q5_answer5" checked>
                            @else
                           <input type="radio" name="q5_correct" value="q5_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q5_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>                  

              <tr id="addr1">
                      <td>
                        {{ Form::text('question6') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q6_correct  =='q6_answer1')
                            <input type="radio" name="q6_correct" value="q6_answer1" checked>
                            @else
                           <input type="radio" name="q6_correct" value="q6_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q6_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q6_correct  =='q6_answer2')
                            <input type="radio" name="q6_correct" value="q6_answer2" checked>
                            @else
                           <input type="radio" name="q6_correct" value="q6_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q6_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q6_correct  =='q6_answer3')
                            <input type="radio" name="q6_correct" value="q6_answer3" checked>
                            @else
                           <input type="radio" name="q6_correct" value="q6_answer3" >
                           @endif

                          </span>{{ Form::text('q6_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q6_correct  =='q6_answer4')
                            <input type="radio" name="q6_correct" value="q6_answer4" checked>
                            @else
                           <input type="radio" name="q6_correct" value="q6_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q6_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q6_correct  =='q6_answer5')
                            <input type="radio" name="q6_correct" value="q6_answer5" checked>
                            @else
                           <input type="radio" name="q6_correct" value="q6_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q6_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>
                    

              <tr id="addr1">
                      <td>
                        {{ Form::text('question7') }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q7_correct  =='q7_answer1')
                            <input type="radio" name="q7_correct" value="q7_answer1" checked>
                            @else
                           <input type="radio" name="q7_correct" value="q7_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q7_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q7_correct  =='q7_answer2')
                            <input type="radio" name="q7_correct" value="q7_answer2" checked>
                            @else
                           <input type="radio" name="q7_correct" value="q7_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q7_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q7_correct  =='q7_answer3')
                            <input type="radio" name="q7_correct" value="q7_answer3" checked>
                            @else
                           <input type="radio" name="q7_correct" value="q7_answer3" >
                           @endif

                          </span>{{ Form::text('q7_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q7_correct  =='q7_answer4')
                            <input type="radio" name="q7_correct" value="q7_answer4" checked>
                            @else
                           <input type="radio" name="q7_correct" value="q7_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q7_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q7_correct  =='q7_answer5')
                            <input type="radio" name="q7_correct" value="q7_answer5" checked>
                            @else
                           <input type="radio" name="q7_correct" value="q7_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q7_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>
                    

             <tr id="addr1">
                      <td>
                        {{ Form::text('question8', null, ['class' => 'form-control']) }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q8_correct  =='q8_answer1')
                            <input type="radio" name="q8_correct" value="q8_answer1" checked>
                            @else
                           <input type="radio" name="q8_correct" value="q8_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q8_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q8_correct  =='q8_answer2')
                            <input type="radio" name="q8_correct" value="q8_answer2" checked>
                            @else
                           <input type="radio" name="q8_correct" value="q8_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q8_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q8_correct  =='q8_answer3')
                            <input type="radio" name="q8_correct" value="q8_answer3" checked>
                            @else
                           <input type="radio" name="q8_correct" value="q8_answer3" >
                           @endif

                          </span>{{ Form::text('q8_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q8_correct  =='q8_answer4')
                            <input type="radio" name="q8_correct" value="q8_answer4" checked>
                            @else
                           <input type="radio" name="q8_correct" value="q8_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q8_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q8_correct  =='q8_answer5')
                            <input type="radio" name="q8_correct" value="q8_answer5" checked>
                            @else
                           <input type="radio" name="q8_correct" value="q8_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q8_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>

             <tr id="addr1">
                      <td>
                        {{ Form::text('question9', null, ['class' => 'form-control']) }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q9_correct  =='q9_answer1')
                            <input type="radio" name="q9_correct" value="q9_answer1" checked>
                            @else
                           <input type="radio" name="q9_correct" value="q9_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q9_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q9_correct  =='q9_answer2')
                            <input type="radio" name="q9_correct" value="q9_answer2" checked>
                            @else
                           <input type="radio" name="q9_correct" value="q9_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q9_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q9_correct  =='q9_answer3')
                            <input type="radio" name="q9_correct" value="q9_answer3" checked>
                            @else
                           <input type="radio" name="q9_correct" value="q9_answer3" >
                           @endif

                          </span>{{ Form::text('q9_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q9_correct  =='q9_answer4')
                            <input type="radio" name="q9_correct" value="q9_answer4" checked>
                            @else
                           <input type="radio" name="q9_correct" value="q9_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q9_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q9_correct  =='q9_answer5')
                            <input type="radio" name="q9_correct" value="q9_answer5" checked>
                            @else
                           <input type="radio" name="q9_correct" value="q9_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q9_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>

              <tr id="addr1">
                      <td>
                        {{ Form::text('question10', null, ['class' => 'form-control']) }}
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q10_correct  =='q10_answer1')
                            <input type="radio" name="q10_correct" value="q10_answer1" checked>
                            @else
                           <input type="radio" name="q10_correct" value="q10_answer1" >
                           @endif

                          </span>
                            {{ Form::text('q10_answer1', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q10_correct  =='q10_answer2')
                            <input type="radio" name="q10_correct" value="q10_answer2" checked>
                            @else
                           <input type="radio" name="q10_correct" value="q10_answer2" >
                           @endif
                          </span>
                             {{ Form::text('q10_answer2', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">

                          @if ( $survey->q10_correct  =='q10_answer3')
                            <input type="radio" name="q10_correct" value="q10_answer3" checked>
                            @else
                           <input type="radio" name="q10_correct" value="q10_answer3" >
                           @endif

                          </span>{{ Form::text('q10_answer3', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q10_correct  =='q10_answer4')
                            <input type="radio" name="q10_correct" value="q10_answer4" checked>
                            @else
                           <input type="radio" name="q10_correct" value="q10_answer4" >
                           @endif
                          </span>
                           {{ Form::text('q10_answer4', null, ['class' => 'form-control']) }}
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                          @if ( $survey->q10_correct  =='q10_answer5')
                            <input type="radio" name="q10_correct" value="q10_answer5" checked>
                            @else
                           <input type="radio" name="q10_correct" value="q10_answer5" >
                           @endif
                          </span> 
                          <input type="text" name="q10_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>                                       

                </tbody>
            </table>
        </div>
        </div>
</div>
 <center>






   


<div class="form-group ">
				<input class="btn btn-warning" type="submit" value="Update">
			</div>

            {{ link_to_route('surveys.show', 'Cancel', $survey->id, array('class' => 'btn')) }}
  

       </center>



{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop