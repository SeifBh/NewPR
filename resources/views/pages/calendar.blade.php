@extends('layouts.defaults')
@section('content')
<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<title>Calendar | TAG</title>
<style type="text/css">
	
.endcol {
    background: #d42828;
    color: white;
}
.startcol {
    color: white;
    background: #449d44;
}
.contain6 {
    border: 1px solid black;
    /* padding: 5px; */
    /* padding: 30px; */
    text-align: center;
    background-color: #fafafa;
    border: 1px solid #e5e5e5;
    /* border-radius: 3px; */
    margin: 10px;
    box-shadow: inset 0 0 10px rgba(0,0,0,0.05);
    /* line-height: 5px; */
}


	#padcol{
		padding-bottom: 5px;
	}
	#addevent{
		color: #449d44;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid #449d44;
	}

		#addevent:hover{
		color: #fff;
		background-color: #449d44;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid #449d44;
	}


	#mana{
		color: #d42828;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid #d42828;
	}

		#mana:hover{
		color: #fff;
		background-color:#d42828;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid #d42828;
	}




#btTAG{
	    color: #fff;
    background-color: #449d44;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid black;

}
input.btn.btn-default {
    margin: 5px;
}
</style>
    <style>
        /* ... */
    </style>
</head>
<div class="container-fluid col-md-12 col-lg-12" style="background:white;padding:10px;"> 






<!-- Modal -->



<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog" style="width:600px !important;    margin: 30px auto !important;">
  <div class="">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Event</h4>
      </div>
      <div class="modal-body">

@foreach($res as $r1)

<div class="contain6">
<div class="">
  <div class="col-md-12 col-lg-12" id="padcol">
  <label>{{$r1->title}}</label>
  </div>
</div>


<div class="">
  <div class="startcol col-md-6 col-lg-6" id="padcol" >
  <label>{{$r1->start}}</label>
  </div>


  <div class="endcol col-md-6 col-lg-6" id="padcol">
  <label>{{$r1->end}}</label>
  </div>


</div>


<div class="">

  	   	          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('calendar.destroy', $r1->id))) }}  
<br>
<center>                     
        {!! Form::submit('delete') !!}
        </center>
                        {{ Form::close() }}

</div>
</div>





@endforeach

<br>

       



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ssssssssssssssss !-->































<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="width:600px !important;    margin: 30px auto !important;">
  <div class="">
        {!! Form::open(['action' => 'CalendarController@saveme', 'method' => 'post', 'role' => 'form']) !!} 

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Event</h4>
      </div>
      <div class="modal-body">


      <div class="row">
        	<div class="col-md-3 col-lg-3" id="padcol">
        		<label>Title Event</label>
        	</div>
        	<div class="col-md-6 col-lg-6" id="padcol">
        		<input type="text" name="nameEv" class="form-control" placeholder="Name Event" required>
        	</div>
       </div>




      <div class="row">
        	<div class="col-md-3 col-lg-3" id="padcol">
        		<label>Start Event</label>
        	</div>
        	<div class="col-md-6 col-lg-6" id="padcol">
        		<input type="date" name="startev" class="form-control" required>
        	</div>
       </div>



      <div class="row">
        	<div class="col-md-3 col-lg-3" id="padcol">
        		<label>End Event</label>
        	</div>
        	<div class="col-md-6 col-lg-6" id="padcol">
        		<input type="date" name="endev" class="form-control" placeholder="Name Event" required>
        	</div>
       </div>

<br>
      <div class="row">
        	<center><div class="">
        		<button class="btn btn-success" id="btTAG">Save</button>
        	</div></center>

       </div>

         {!! Form::close() !!}



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div class="row">

<div class="col-lg-4">
<button class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal" style="width:100% " id="addevent">Add Event</button>
</div>



<div class="col-lg-8">
<button class="btn btn-default " type="button" data-toggle="modal" data-target="#myModal2"  style="width:100% " id="mana">Manage</button>
</div>



</div>
<hr>
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
</div>
@stop