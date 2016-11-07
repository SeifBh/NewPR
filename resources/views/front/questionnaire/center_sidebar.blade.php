


						<ul class="nav navbar-nav" id="navbar-nav5" style="border:1px !important;    background: #e3edf0;">
								<div class="col-md-2 media" id="xxseif">
									<div class="media-left">
										<img class="user-logo" style="background-color:white; border:1px solid grey;" src="/css/android-icon-72x72.png" width="64px" height="64px">
									</div>
									<div class="media-body">
										<h4 class="media-heading">

											 <?php $slugme =  $user->username  ?>
                     						 <b id="profileslug">    @<?php echo $slugme ?>  </b>- <span style="color:#00c000;">Online</span>


										</h4> 
										
										<p>{{ $user->occupation  }}</p>
									</div>
								</div>


										



		                    <li id="liHov">
		                        <a href="/@<?php echo $slugme ?> " id="linkXYZ">
		                            <i class="fa fa-user" id="iconM">
		                                <span class="label"></span>
		                            </i>
		                            <p>Profile</p>
		                        </a>
		                    </li>


		                    <li id="liHov">
		                        <a href="/@<?php echo $slugme ?>/messages" id="linkXYZ">
		                            <i class="fa fa-envelope" id="iconM">
		                                <span class="label"></span>
		                            </i>
		                            <p>Messages</p>
		                        </a>
		                    </li>



		                    <li>
		                        <a href="#" id="linkXYZ">
		                            <i class="fa fa-tasks" id="iconM">
		                                <span class="label"></span>
		                            </i>
		                            <p>Tasks</p>
		                        </a>
		                    </li>

		                    <li id="liHov">
		                        <a href="/@<?php echo $slugme ?>/questionnaires" id="linkXYZ">
		                            <i class="fa fa-question-circle" id="iconM">
		                                <span class="label"></span>
		                            </i>
		                            <p>Questionnaires</p>
		                        </a>
		                    </li>


		                    <li id="liHov">
		                        <a href="#" id="linkXYZ">
		                            <i class="fa fa-calendar" id="iconM">
		                                <span class="label"></span>
		                            </i>
		                            <p>Calendar</p>
		                        </a>
		                    </li>

		                    <li id="liHov">
		                        <a href="#" id="linkXYZ">
		                            <i class="fa fa-at" id="iconM">
		                                <span class="label"></span>
		                            </i>
		                            <p>Contact</p>
		                        </a>
		                    </li>



	               		</ul>	