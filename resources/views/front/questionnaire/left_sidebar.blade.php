 <?php $slugme =  $user->username  ?>                         
<style type="text/css">
	
	a.list-group-item, button.list-group-item {
    color: #000 !important;
}
a.list-group-item:hover, button.list-group-item:hover, a.list-group-item:focus, button.list-group-item:focus {
    color: #555;
    text-decoration: none;
    background-color: #d42828;
}


a.list-group-item:hover, button.list-group-item:hover, a.list-group-item:focus, button.list-group-item:focus a {
color: white !important;
}
.list-group-item :hover{
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
    border: 0px solid #ddd !important;
}

a.list-group-item:hover, button.list-group-item:hover, a.list-group-item:focus, button.list-group-item:focus a {
    color: white !important;
    border: 0px !important;
}

#backmeup{
	    background: rgba(255, 0, 0, 0);
}

.Menuactive2{
    /* background-color: #d91a24 !important; */
    /* color: white !important; */
    position: relative;
    display: block;
    padding: 10px 15px;
background-color: #e9e9e9;    /* border: 1px solid #ddd; */
  color: black !important;
}

.Menuactive2:hover{
    text-decoration: none;

}

.Menuactive2 i{
  text-decoration: none;
  color: black !important;
}




</style>
            <?php  $slugname = $user->username ?>



		  <div class="col-xs-12 col-md-3 col-lg-3 col-sm-12" >
		    <div  class="thumbnail"  id="backmeup" style="border:0px solid black !important;">

				<img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/TAG-Logo-Large.png">

				    <div class="mini-submenu">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </div>
				    <div class="list-group" style="border: 1px solid #5d5e60;">
				        <!--<span href="#" class="list-group-item active">
				            Submenu
				            <span class="pull-right" id="slide-submenu">
				                <i class="fa fa-times"></i>
				            </span>
				        </span>!-->



				        <a href="#" class="list-group-item"  style="background-color:#d42828;;color:white !important;padding-top: 15px; padding-bottom: 15px;border:0px solid red !important;border-radius:0px !important">
				            <i class="fa fa-align-center" id="facus0"></i> EI PORTAL MENU
				        </a>
                <?php
                  $fullpath_dash= '@' . $slugme . '/dashboard';
                ?>



				        <a href="/@<?php echo $slugme ?>/dashboard"  id="dashboard"  {{{ (Request::is($fullpath_dash) ? 'class=Menuactive2' : 'class=list-group-item') }}}>
				            <i class="fa fa-tachometer" id="facus"></i> Main Dashobard
				        </a>
<?php

      $id_user = Auth::user()->id;
        //return $id;
$nb_ques =  DB::table('surveys')->where('status','=','on')->count() ;


    $messages = DB::table('contacts')->where('user_id','=',$id_user)
                     
                     ->orderBy('updated_at', 'desc')->get();
                     
                      $j = 0 ;
$count_new_msg = 0;
?>
                                @foreach( $messages as $message)

<?php





    $seen_msg = DB::table('contacts')->where('user_id','=',$message->user_id)
                    ->where('id','=',$message->id)
                    ->where('role','=','admin')
                    ->value('seen') ;




    $last_reply = DB::table('reply')->where('user_id','=',$message->user_id)
                    ->where('msg_id','=',$message->id)
                    ->where('status','=','admin')
                    ->orderBy('created_at','desc')
                    ->value('seen');

              $count_new_msg = DB::table('contacts')->where('user_id','=',$id_user)
                     ->where('seen','=','0')
                     ->where('role','admin')
                     ->count();

        $count_new_reply = DB::table('reply')->where('user_id','=',$message->user_id)
                                        
                                        ->where('seen','0')
                                        ->where('status','admin')
                                        ->value('seen');



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


                if($last_reply =='0')
                {
                  $j++ ;
                }




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
                  $fullpath_pro= '@' . $slugme;
                ?>

				        <a href="/@<?php echo $slugme ?> "  {{{ (Request::is($fullpath_pro) ? 'class=Menuactive2' : 'class=list-group-item') }}} id="prof11">
				            <i class="fa fa-user" id="facus"></i>Your Profile
				        </a>
                <?php
                  $fullpath_mes= '@' . $slugme . '/messages'; 
                ?>
				        <a href="/@<?php echo $slugme ?>/messages"  {{{ (Request::is($fullpath_mes) ? 'class=Menuactive2' : 'class=list-group-item') }}} id="mess1" >
				            <i class="fa fa-envelope" id="facus"></i>
                      <?php $resultme = $count_new_msg + $j  ?>
                     Messages
                        @if ($resultme !='0')
                     <span id="nbms" class="badge" style="background-color:red !important;">
                     <?php echo $resultme; ?>
                     </span>
                     @endif
				        </a>

              <?php
                  $fullpath_ques= '@' . $slugme . '/questionnaires'; 
                ?>
			        <a href="/@<?php echo $slugme; ;?>/questionnaires" {{{ (Request::is($fullpath_ques) ? 'class=Menuactive2' : 'class=list-group-item') }}} id="quess1">
				            <i class="fa fa-question-circle" id="facus"></i>Questionnaires<span class="badge"><?php echo $nb_ques ; ?></span>
				        </a>


                <?php
                  $fullpath_cal= '@' . $slugme . '/calendar'; 
                ?>


				        <a href="/@<?php echo $slugme ?>/calendar" {{{ (Request::is($fullpath_cal) ? 'class=Menuactive2' : 'class=list-group-item') }}}>
				            <i class="fa fa-calendar" id="facus"></i>Calendar<span class="badge" style="background-color:red !important;color:white!important;">NEW</span>
				        </a>

				        <a href="/News" class="list-group-item">
				            <i class="fa fa-newspaper-o" aria-hidden="true" id="facus"></i>News & Updates
				        </a>




				        <a href="/auth/logout" class="list-group-item">
				            <i class="fa fa-sign-out" id="facus"></i>Logout Portal
				        </a>




				    </div>        

		    </div>

		    <div class="thumbnail" id="contentuser">
		    <center><b style="font-weight:800;">		CLAIMS PORTAL LOGIN	</b></center>
		    	<div class="container-fluid">
		    	<a href="http://holidaysicknessclaims.co.uk/" target="_blank" >
		    		<img src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/05/Logo-2016.png" class="img-thumbnail">
		    	</a>

		    	<a href="http://holidaysicknessclaims.co.uk/" target="_blank" >
		    		<img src="http://holidaysicknessclaims.co.uk/wp-content/uploads/2016/05/Logo-2016.png" class="img-thumbnail">
		    	</a>

		    	</div>
		    </div>

		  </div>

		  <div class="col-lg-9" >

		  </div>

