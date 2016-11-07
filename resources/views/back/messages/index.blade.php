
@extends('back.template')

@section('head')
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<title>555555</title>
<link rel="stylesheet" type="text/css" href="/css/messages.css">

	<style type="text/css">
		.table { margin-bottom: 0; }
		.panel-heading { padding: 0 15px; }
	</style>
<link rel="stylesheet" type="text/css" href="/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css">
@stop
@section('main')

 <!-- Entête de page -->
  @include('back.partials.entete', ['title' => trans('back/messages.dashboard'), 'icone' => 'envelope', 'fil' => trans('back/messages.messages')])

						<div class="container-fluid row">
							<table class="table">
							  <thead class="thead-default" style="background: #f1f1f1;">
							    <tr>
                                  <th>TO</th>
                                  <th>SUBJECT</th>
							      <th>DATE/TIME</th>


							      <th>Check</th>
							      <th>Archive</th>
							      <th>Delete</th>
							    </tr>
							  </thead>
							  <tbody>
							  @foreach( $messages as $message)
<?php

		$id_last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','EI')
										->orderBy('created_at','desc')
										->value('id');
										

		$last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','EI')
										->orderBy('created_at','desc')
										->value('seen');

		$has_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','EI')
										->count() > 0;

		$seen_msg = DB::table('contacts')->where('user_id','=',$message->user_id)
										->where('id','=',$message->id)
										->where('role','=','EI')
										
										->value('seen') ;

        $seen_anonymous_message_user=  DB::table('contacts')
                                        ->where('id','=',$message->id)
                                        ->where('path_file3','=','not')
                                       
                                        
                                        ->value('seen') ;
        $user_to_name = DB::table('users')->where('id','=',$message->user_id)
                                        
                                        ->value('username');



?>



@if (($seen_msg =='0'))
    <tr class='unread clickable-row' style="background-color:rgba(241, 234, 0, 0.22);" data-href="/contact/e/{{$message->user_id}}/{{  $message->id }}" >
                                
                                                                <td>{{$user_to_name}}</td>
                                  <td>{{ $message->subject }}</td>
                                  <td>{{ $message->created_at}}</td>




                                  <td>
                                  @if($message->path_file3 =='not')
                                  Not Authenticated
                                  @else
                                  Authenticated
                                  @endif
                                  </td>



                                  <td>
                                <a href="/Archive_admin/{{$message->id}}">Archive</a>
                                </td>

                                  <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('contact.destroy', $message->id))) }}  
                                             {!! Form::submit('delete') !!}
                                    {{ Form::close() }}
                                </td>   


                                    <script type="text/javascript">

                                        jQuery(document).ready(function($) {
                                        $(".clickable-row").click(function() {
                                            window.document.location = $(this).data("href");
                                        });
                                    });
                                    </script>
                                </tr>

@elseif (($seen_anonymous_message_user =='0') )
        <tr class=' clickable-row ' style="background-color:red;color:white;" data-href="/contact/e/{{$message->user_id}}/{{  $message->id }}" >
                                <td>{{$message->user_full_name}}</td>

                                  <td>{{ $message->subject }}</td>
                                  <td>{{ $message->created_at}}</td>




                                  <td>
                                  @if($message->path_file3 =='not')
                                  Not Authenticated
                                  @else
                                  Authenticated
                                  @endif
                                  </td>



                                  <td>
                                <a href="/Archive_admin/{{$message->id}}">Archive</a>
                                </td>

                                  <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('contact.destroy', $message->id))) }}  
                                             {!! Form::submit('delete') !!}
                                    {{ Form::close() }}
                                </td>   


                                    <script type="text/javascript">

                                        jQuery(document).ready(function($) {
                                        $(".clickable-row").click(function() {
                                            window.document.location = $(this).data("href");
                                        });
                                    });
                                    </script>
                                </tr>





@elseif (($seen_anonymous_message_user =='1') )
        <tr class=' clickable-row ' style="background-color:white;color:red;" data-href="/contact/e/{{$message->user_id}}/{{  $message->id }}" >
                                <td>{{$message->user_full_name}}</td>

                                  <td>{{ $message->subject }}</td>
                                  <td>{{ $message->created_at}}</td>




                                  <td>
                                  @if($message->path_file3 =='not')
                                  Not Authenticated
                                  @else
                                  Authenticated
                                  @endif
                                  </td>



                                  <td>
                                <a href="/Archive_admin/{{$message->id}}">Archive</a>
                                </td>

                                  <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('contact.destroy', $message->id))) }}  
                                             {!! Form::submit('delete') !!}
                                    {{ Form::close() }}
                                </td>   


                                    <script type="text/javascript">

                                        jQuery(document).ready(function($) {
                                        $(".clickable-row").click(function() {
                                            window.document.location = $(this).data("href");
                                        });
                                    });
                                    </script>
                                </tr>

@elseif (($has_reply == '0') || ($has_reply == '') && ($seen_msg =='1'))

                                <tr class='unread clickable-row' style="border-left:1px solid red" data-href="/contact/e/{{$message->user_id}}/{{  $message->id }}" >
                                
                                                                <td>{{$user_to_name}}</td>



                                  <td>{{ $message->subject }}</td>
                                  <td>{{ $message->created_at}}</td>
                                  <td>
                                  @if($message->path_file3 =='not')
                                  Not Authenticated
                                  @else
                                  Authenticated
                                  @endif
                                  </td>

                                  <td>
                                <a href="/Archive_admin/{{$message->id}}">Archive</a>

                                </td>

                                                                  

                                  <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('contact.destroy', $message->id))) }}  
                                             {!! Form::submit('delete') !!}
                                    {{ Form::close() }}
                                </td>                                                           
                                    <script type="text/javascript">

                                        jQuery(document).ready(function($) {
                                        $(".clickable-row").click(function() {
                                            window.document.location = $(this).data("href");
                                        });
                                    });
                                    </script>
                                </tr>


@else
    @if(($last_reply == '1') )
                                <tr class='read clickable-row' data-href="/contact/{{ $message->user_id }}/{{  $message->id }}_{{$id_last_reply}}" >

    @else
                                 <tr class='unread clickable-row' style="background-color:rgba(241, 234, 0, 0.22);" data-href="/contact/{{$message->user_id}}/{{  $message->id }}_{{$id_last_reply}}" >

    @endif

                                                                <td>{{$user_to_name}}</td>

                                  <td>{{ $message->subject }}</td>
                                  <td>{{ $message->created_at}}</td>

                                  <td>
                                  @if($message->path_file3 =='not')
                                  Not Authenticated
                                  @else
                                  Authenticated
                                  @endif
                                  </td>
                                  

                                  <td>
                                <a href="/Archive_admin/{{$message->id}}">Archive</a>

                                </td>

                                

                                  <td>
                                    {{ Form::open(array('method' => 'DELETE', 'route' => array('contact.destroy', $message->id))) }}  
                                             {!! Form::submit('delete') !!}
                                    {{ Form::close() }}
                                </td>                                                           
                                    <script type="text/javascript">

                                        jQuery(document).ready(function($) {
                                        $(".clickable-row").click(function() {
                                            window.document.location = $(this).data("href");
                                        });
                                    });
                                    </script>
                                </tr>
@endif



@endforeach


							  </tbody>
							</table>
									

						</div>


@stop

@section('scripts')

	<script>
		
    $(function() {
			$(':checkbox').change(function() {     
				$(this).parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
				$(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
				var token = $('input[name="_token"]').val();
				$.ajax({
					url: 'contact/' + this.value,
					type: 'PUT',
					data: "seen=" + this.checked + "&_token=" + token
				})
				.done(function() {
					$('.fa-spin').remove();
					$('input[type="checkbox"]:hidden').show();
				})
				.fail(function() {
					$('.fa-spin').remove();
					var chk = $('input[type="checkbox"]:hidden');
					chk.parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
					chk.show().prop('checked', chk.is(':checked') ? null:'checked');
					alert('{{ trans('back/messages.fail') }}');
				});
			});
		});

	</script>

@stop