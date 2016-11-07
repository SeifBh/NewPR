@extends('back.template')
@section('main')
<!--
<table border="1" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID users</th>
			<th>Mail user</th>		
		</tr>
	</thead>

	<tbody>
		@foreach($users as $user)
			<tr>
				<td>
					{{$user->id}}
				</td>

				<td>
					{{$user->email}}
				</td>


			</tr>
		@endforeach
	</tbody>
</table>
!-->
<div class="container-fluid">

<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<div class="row">
 {!! Form::open(['action' => 'ContactController@multiplemsg', 'method' => 'post', 'role' => 'form']) !!} 

<p>
<input type="text" name="subject_message" class="form-control" placeholder="Subject" required="">
</p>
<p>
<textarea name="content_message" class="form-control" placeholder="Content..." required=""></textarea> 
</p>
<p>
<button class="btn btn-success">Send message</button>
</p>
 {!! Form::close() !!}

</div>
</div>
<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
<table border="1" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID users</th>
			<th>EI mail</th>		
		</tr>
	</thead>

	<tbody>
		@foreach($users as $user)
			<tr>
				<td>
					{{$user->id}}
				</td>

				<td>
					{{$user->email}}
				</td>


			</tr>
		@endforeach
	</tbody>
</table>
</div>


</div>
@stop