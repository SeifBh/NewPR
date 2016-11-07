 {{  Form::open(array('action'=>'HomeController@saveTest', 'method' => 'post')) }}  
{{ Auth::user()->id }}
<label>Question : Sexe :</label>

<label>male</label>
<input type="radio" name="gender" value="male">
<br>
<label>female</label>
<input type="radio" name="gender" value="female">
<input type="submit" name="send" value="send.">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

{{  Form::close()  }}  
