<title>All Avaible Tests</title>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	(function () {
    $(function () {
        return $('[data-toggle]').on('click', function () {
            var toggle;
            toggle = $(this).addClass('active').attr('data-toggle');
            $(this).siblings('[data-toggle]').removeClass('active');
            return $('.surveys').removeClass('grid list').addClass(toggle);
        });
    });
}.call(this));

</script>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/css/csshome.css">

<div class="container">
<div class="col-md-12" id="hina">
All avaible tests
</div>
<span class="toggler active" data-toggle="grid"><span class="entypo-layout"></span></span>
<span class="toggler" data-toggle="list"><span class="entypo-list"></span></span>

<ul class="surveys grid">
@foreach ($surveys as $survey)
@if ($survey->status =='on')
  <li class="survey-item">


    <span class="survey-name">
      <a href="/survey/{{ $survey->id }}">

      	{{ $survey->title_survey }}
      	</a>
    </span>

<?php


$ttp =   DB::table('history')->where('user_id','=',$id_user)->where('survey_id','=', $survey->id)->value('totalPoints') ;
$int_ttp = (int)$ttp;
$int_ttp = $int_ttp * 10 ;

?>


    <div class="pull-right">

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
</div>