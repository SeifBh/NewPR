        <?php $slugme =  $user->username  ?>


<?php

      $id_user = Auth::user()->id;
        //return $id;


    $messages = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('status','<>','archived')
                     ->orderBy('updated_at', 'desc')->get();
                      $j = 0 ;
                                            $count_new_msg = 0 ;


?>
                                @foreach( $messages as $message)
<?php
    $last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
                    ->where('msg_id','=',$message->id)
                    ->where('status','=','admin')
                    ->orderBy('created_at','desc')
                    ->value('seen');




                if($last_reply =='0')
                {
                  $j++ ;
                }
              $count_new_msg = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('seen','=','0')
                     ->where('role','admin')
                     ->count();


?>
@endforeach
<?php $resultme = $count_new_msg + $j  ?>
<title>
@if ($resultme !='0')
(<?php echo $resultme; ?>)
@endif
Messages </title>



						<div class="container-fluid row" id="contentmessages">

							<table class="table">
							  <thead class="thead-default" style="background: #232664;">
							    <tr >
							      <th style="color:white !important;" >From</th>
							      <th style="color:white !important;" colspan="2">Subject</th>
							      <th style="color:white !important;" >Archive</th>
							      <th style="color:white !important;" >Date & Time</th>

							    </tr>
							  </thead>
							  <tbody>

							  @foreach( $messages as $message)
<?php

		$id_last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','admin')
										->orderBy('created_at','desc')
										->value('id');
										

		$last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','admin')
										->orderBy('created_at','desc')
										->value('seen');


		$last_reply_text = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)

										->orderBy('created_at','desc')
										->value('content');


		$has_reply = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										->where('status','=','admin')
										->count() > 0;

		$has_reply2 = DB::table('reply')->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
										
										->count() > 0;




		$seen_msg = DB::table('contacts')->where('user_id','=',$message->user_id)
										->where('id','=',$message->id)
										->where('role','=','admin')
										->value('seen') ;


		$exist_img = DB::table('contacts')->where('user_id','=',$message->user_id)
										 ->where('id','=',$message->id)
										 ->where('role','admin')
										 ->orWhere('content', 'LIKE', '%<img%')
										 ->count() > 0 ;
										 

        $img_msg = DB::table('contacts')
							            ->where('user_id','=',$message->user_id)
										->where('id','=',$message->id)
           								->where('content', 'LIKE', '%<img%')
           								->orWhere('content', 'LIKE', '%<link%')
            							->value('id');

        $img_reply = DB::table('reply')
							            ->where('user_id','=',$message->user_id)
										->where('msg_id','=',$message->id)
           								->where('content', 'LIKE', '%<img%')
           								->orWhere('content', 'LIKE', '%<link%')
            							->value('id');


    $last_reply_date = DB::table('reply')->where('user_id','=',$message->user_id)
                    ->where('msg_id','=',$message->id)
                    
                    ->orderBy('created_at','desc')
                    ->value('created_at');


?>
@if (($seen_msg =='0') )

	<tr class='read clickable-row'  style="background-color:#CEFFCE;" data-href="/@<?php echo $slugme ?>/messages/e/{{  $message->id }}" >

@elseif (($has_reply =='0') || ($has_reply =='') && ($seen_msg =='1'))
		<tr class='unread clickable-row'  style="background-color:#b9d3f0;"  data-href="/@<?php echo $slugme ?>/messages/e/{{  $message->id }}" >
@else
	@if(($last_reply == '1') )
							    <tr class='read clickable-row' data-href="/@<?php echo $slugme ?>/messages/{{  $message->id }}_{{$id_last_reply}}" >

	@else
								 <tr class='unread clickable-row' style="background-color:#CEFFCE" data-href="/@<?php echo $slugme ?>/messages/{{  $message->id }}_{{$id_last_reply}}" >
	@endif

@endif
							      <td>

							      <b>Admin</b>
							      </td>

								  <td colspan="2">{{ $message->subject }}


							     

							      
								  </td>



									<td>

 {!! Form::open(['action' => 'ContactController@archive_user', 'method' => 'post', 'role' => 'form']) !!} 
<input type="hidden" name="id_messageme" value="{{$message->id}}">

<button class="btn btn-default"> archive</button>
 {!! Form::close() !!}


									</td>

							      <td>
							      <?php $date = new DateTime('now', new DateTimeZone('Europe/London')); 
							     $date_now =  $date->format('d F Y');

							      ?>

							      @if($has_reply2 =='1')
							      		@if ($date_now == date('d F Y', strtotime($last_reply_date)) )
								      	{{ date('H:i', strtotime($last_reply_date)) }}
								      	@else
								      	{{ date('d F Y', strtotime($last_reply_date)) }}
								      	@endif

							      @else
								      @if ($date_now == date('d F Y', strtotime($message->created_at)) )
								      	{{ date('H:i', strtotime($message->created_at)) }}
								      	@else
								      	{{ date('d F Y', strtotime($message->created_at)) }}
								      	@endif
							      @endif
							      </td>
	    
							  		<script type="text/javascript">

										jQuery(document).ready(function($) {
									    $(".clickable-row").click(function() {
									        window.document.location = $(this).data("href");
									    });
									});
									</script>
							    </tr>

							    @endforeach




							  </tbody>
							</table>
									

						</div>