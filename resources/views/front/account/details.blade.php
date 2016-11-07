
{!! Form::open(array('action' => 'AccountConrtoller@save', 'method' => 'POST', 'id' => 'lookup', 'class' => 'user_form')) !!}

<input type="text" name="first_name">
<input type="text" name="last_name">
<input type="text" name="middle_name">





					<div class="row">	
						{!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
					</div>



				{!! Form::close() !!}
