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


?>
@endforeach

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

                    <div id="replyssUS">

                                @foreach( $replys as $reply)
                                <div class="" id="">
                                    @if($reply->status != 'admin')
                  <div class="row">
                        <div class="thubmnail4 col-lg-offset- col-md-8 col-lg-8" >
                            <div class=""  title="{{$reply->created_at}}">
                                   <b> Me  :</b> {!! $reply->content !!}
                                   <br>
                                 <span class="pull-right">{{ date('d F, Y - H:i', strtotime($reply->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                                    @else
                  <div class="row">
                        <div class="col-lg-offset-4 col-md-8 col-lg-8" id="panme">
                            <div class="thubmnail" title="{{$reply->created_at}}" >
                                  <b> Admin  :</b>  {!! $reply->content !!}
                                  <br>
                                 <span class="pull-right">{{ date('d F, Y - H:i ', strtotime($reply->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                                    @endif
                                </div>
                                @endforeach

                    </div>