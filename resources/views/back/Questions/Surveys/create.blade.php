
@extends('back.template')

@section('main')

<h1>Create Survey</h1>

{{ Form::open(array('route' => 'surveys.store')) }}

                        <div class="material-switch pull-right">
                            <input id="someSwitchOptionPrimary" name="status" type="checkbox" checked="checked" />
                            <label for="someSwitchOptionPrimary" class="label-primary"></label>
                        </div>

<div class="pull_right">
  <a href="/survey"> List Surveys</a>
</div>

<ul>

    <li>
            <label>Title survey</label>

            <input type="text" name='title_survey'  placeholder='Title survey' class="form-control"/>


    </li>
    <li>
                  <label>Detail survey</label>
                  <textarea class="form-control"  placeholder="Details" style="width:100% !important;" name="details"></textarea>

    </li>
</ul>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<div class="">
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
                        <textarea name="question1" type="text" placeholder="Question1" class="form-control input-md" required></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q1_correct"  value="q1_answer1">
                          </span>
                            <input type="text" name="q1_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q1_correct" value="q1_answer2" >
                          </span>
                            <input type="text" name="q1_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q1_correct"  value="q1_answer3" >
                          </span> <input type="text" name="q1_answer3" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q1_correct" value="q1_answer4">
                          </span>
                          <input type="text" name="q1_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q1_correct" value="q1_answer5">
                          </span> 
                          <input type="text" name="q1_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


                    <tr id="addr1">
                      <td>
                        <textarea name="question2" type="text" placeholder="question2" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q2_correct" value="q2_answer1">
                          </span>
                            <input type="text" name="q2_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q2_correct" value="q2_answer2">
                          </span>
                            <input type="text" name="q2_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q2_correct" value="q2_answer3">
                          </span> <input type="text" name="q2_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q2_correct" value="q2_answer4">
                          </span>
                          <input type="text" name="q2_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q2_correct" value="q2_answer5">
                          </span> 
                          <input type="text" name="q2_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>

                    <tr id="addr1">
                      <td>
                        <textarea name="question3" type="text" placeholder="question3" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q3_correct" value="q3_answer1">
                          </span>
                            <input type="text" name="q3_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q3_correct" value="q3_answer2">
                          </span>
                            <input type="text" name="q3_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q3_correct" value="q3_answer3">
                          </span> <input type="text" name="q3_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q3_correct" value="q3_answer4">
                          </span>
                          <input type="text" name="q3_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q3_correct" value="q3_answer5">
                          </span> 
                          <input type="text" name="q3_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


                    <tr id="addr1">
                      <td>
                        <textarea name="question4" type="text" placeholder="question4" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q4_correct" value="q4_answer1">
                          </span>
                            <input type="text" name="q4_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q4_correct" value="q4_answer2">
                          </span>
                            <input type="text" name="q4_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q4_correct" value="q4_answer3">
                          </span> <input type="text" name="q4_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q4_correct" value="q4_answer4">
                          </span>
                          <input type="text" name="q4_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q4_correct" value="q4_answer5">
                          </span> 
                          <input type="text" name="q4_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


                    <tr id="addr1">
                      <td>
                        <textarea name="question5" type="text" placeholder="question5" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q5_correct" value="q5_answer1">
                          </span>
                            <input type="text" name="q5_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q5_correct" value="q5_answer2">
                          </span>
                            <input type="text" name="q5_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q5_correct" value="q5_answer3">
                          </span> <input type="text" name="q5_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q5_correct" value="q5_answer4">
                          </span>
                          <input type="text" name="q5_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q5_correct" value="q5_answer5">
                          </span> 
                          <input type="text" name="q5_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>

                    <tr id="addr1">
                      <td>
                        <textarea name="question6" type="text" placeholder="question6" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q6_correct" value="q6_answer1">
                          </span>
                            <input type="text" name="q6_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q6_correct" value="q6_answer2">
                          </span>
                            <input type="text" name="q6_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q6_correct" value="q6_answer3">
                          </span> <input type="text" name="q6_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q6_correct" value="q6_answer4">
                          </span>
                          <input type="text" name="q6_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q6_correct" value="q6_answer5">
                          </span> 
                          <input type="text" name="q6_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


                    <tr id="addr1">
                      <td>
                        <textarea name="question7" type="text" placeholder="question7" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q7_correct" value="q7_answer1">
                          </span>
                            <input type="text" name="q7_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q7_correct" value="q7_answer2">
                          </span>
                            <input type="text" name="q7_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q7_correct" value="q7_answer3">
                          </span> <input type="text" name="q7_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q7_correct" value="q7_answer4">
                          </span>
                          <input type="text" name="q7_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q7_correct" value="q7_answer5">
                          </span> 
                          <input type="text" name="q7_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>

                    <tr id="addr1">
                      <td>
                        <textarea name="question8" type="text" placeholder="question8" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q8_correct" value="q8_answer1">
                          </span>
                            <input type="text" name="q8_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q8_correct" value="q8_answer2">
                          </span>
                            <input type="text" name="q8_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q8_correct" value="q8_answer3">
                          </span> <input type="text" name="q8_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q8_correct" value="q8_answer4">
                          </span>
                          <input type="text" name="q8_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q8_correct" value="q8_answer5">
                          </span> 
                          <input type="text" name="q8_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>


                    <tr id="addr1">
                      <td>
                        <textarea name="question9" type="text" placeholder="question9" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q9_correct" value="q9_answer1">
                          </span>
                            <input type="text" name="q9_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q9_correct" value="q9_answer2">
                          </span>
                            <input type="text" name="q9_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q9_correct" value="q9_answer3">
                          </span> <input type="text" name="q9_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q9_correct" value="q9_answer4">
                          </span>
                          <input type="text" name="q9_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q9_correct" value="q9_answer5">
                          </span> 
                          <input type="text" name="q9_answer5" class="form-control">
                        </div>
                      </td>
                    </tr>



                    <tr id="addr1">
                      <td>
                        <textarea name="question10" type="text" placeholder="question10" class="form-control input-md" required ></textarea>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q10_correct" value="q10_answer1">
                          </span>
                            <input type="text" name="q10_answer1" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q10_correct" value="q10_answer2">
                          </span>
                            <input type="text" name="q10_answer2" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q10_correct" value="q10_answer3">
                          </span> <input type="text" name="q10_answer3" class="form-control" >
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q10_correct" value="q10_answer4">
                          </span>
                          <input type="text" name="q10_answer4" class="form-control">
                        </div>
                      </td>
                      <td>
                        <div class="input-group">
                          <span class="input-group-addon beautiful">
                            <input type="radio" name="q10_correct" value="q10_answer5">
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


</div>


<br>
<center>
    <ul>

        <li>
        {!! Form::submit(trans('front/form.send')) !!}
        </li>
    </ul>
</center>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop