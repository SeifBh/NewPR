<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<style type="text/css">
  
  
/*
 *  STYLE 2
 */

#style-2::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

#style-2::-webkit-scrollbar
{
  width: 12px;
  background-color: #F5F5F5;
}

#style-2::-webkit-scrollbar-thumb
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #D62929;
}
</style>

<ul class="trc9 surveys grid" id="style-2">
@foreach ($surveys as $survey)
@if ($survey->status =='on')
  <li class="survey-item">

        <?php $slugme =  $user->username  ?>
        
    <span class="survey-name">
      <a href="/@<?php echo $slugme ?>/questionnaires/{{ $survey->id }}">

      	{{ $survey->title_survey }}
      	</a>
    </span>

<?php


$ttp =   DB::table('history')->where('user_id','=',$id_user)->where('survey_id','=', $survey->id)->value('totalPoints') ;
$int_ttp = (int)$ttp;
$int_ttp = $int_ttp * 10 ;

?>


    <div class="pull-right" >

      <span class="survey-progress">
        <span class="survey-progress-bg">
          <span class="survey-progress-fg" style="<?php echo 'width:' . $int_ttp . '%' ;?>"></span>
      </span>

      <span class="survey-progress-labels">
          <span class="survey-progress-label">
<?php echo $int_ttp; ?> PTS

          </span>

      </span>
      </span>

      <span class="survey-end-date ended">
         {{$survey->updated_at}}
      </span>
      <span class="survey-stage">
        <span class="stage draft">Draft</span>
      <span class="stage awarded">Awarded</span>
      <span class="stage live">Live</span>
      <span class="stage ended active">Last update</span>
      </span>
    </div>
  </li>
@endif
@endforeach

</ul>
