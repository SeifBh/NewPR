<style type="text/css">
	/*Panel tabs*/
.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #ffffff;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #ffffff;
    background-color: transparent;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}

</style>
@extends('back.template')

@section('main')
@include('back.partials.entete', ['title' => trans('back/users.dashboard'), 'icone' => 'user', 'fil' => link_to('user', trans('back/users.Users')) . ' / ' . trans('back/users.card')])

<div class="">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                    
                    <b>{{ $user->title_user  }}</b>{{  $user->first_name  }} {{  $user->last_name  }} 

                    </h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">Personal Details</a></li>
                            <li><a href="#tab2" data-toggle="tab">Contact Adress</a></li>
                            <li><a href="#tab3" data-toggle="tab">Addional Details</a></li>
                            <li><a href="#tab4" data-toggle="tab">Current Refferal Details </a></li>
                            <li><a href="#tab5" data-toggle="tab">Account verification</a></li>
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                                                <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-10 col-lg-10 col-xs-12 col-sm-12">
<p><label><b>Name </b></label> : {{ $user->username  }}</p>
<p><label><b>Email </b></label> : <a href="#">{{ $user->email  }}</a></p>
<p><label><b>Role  </b></label> : {{ $user->role->title }}</p>
<p><label><b>app_ID </b></label> : {{ $user->app_ID }}</p>
<p><label><b>Middle Name </b></label> : {{ $user->middle_name  }}</p>
<p><label><b>Date of birth </b></label> : {{ $user->date_day  }}/{{ $user->date_month  }}/{{ $user->date_year  }}</p>
<p><label><b>Have you been previously know by any other Names? </b></label> : {{ $user->seen_other_names }}</p>

@if($user->seen_other_names =='yes')

<p><label><b>If yes please state </b></label> : {{ $user->yes_state  }}

@endif
<p><label><b>Country born in </b></label> : {{ $user->country_born  }}</p>
<p><label><b>How long have you been a resident in UK </b></label> : {{ $user->how_long_resident }}</p>


<p><label><b>
<i>
{{ $user->confirmed ? trans('back/users.confirmed') : trans('back/users.not-confirmed') }}
</i></b></label></p>

                            </div>

                            <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
                                <p><label><b>Picture</b></label> </p>
                                        
                                      <a href="/images/{{$user->path_picture}}" target="_blank"><img src="/images/{{$user->path_picture}}"  width="100%"></a> 
                            </div>


                            </div>
                        </div>



     	
                        </div>
                        <div class="tab-pane" id="tab2">
<p><label><b>House Name </b></label> : {{ $user->house_name  }}</p>
<p><label><b>House / Flat Number </b></label> : <a href="#">{{ $user->house_flat_number  }}</a></p>
<p><label><b>Street / Road Name  </b></label> : {{ $user->street_road_name }}</p>
<p><label><b>Adress 2 </b></label> : {{ $user->adress2 }}</p>
<p><label><b>Town </b></label> : {{ $user->town  }}</p>
<p><label><b>City</b></label> : {{ $user->city  }}</p>
<p><label><b>Country</b></label> : {{ $user->country }}</p>
<p><label><b>Post Code </b></label> : {{ $user->post_code  }}


                        	
                        </div>
                        <div class="tab-pane" id="tab3">
<p><label><b>Matrial Status </b></label> : {{ $user->matrials_status  }}</p>
<p><label><b>Whats your current Employement status? </b></label> : <a href="#">{{ $user->current_employement_status  }}</a></p>
<p><label><b>Whats your Occupation? </b></label> : {{ $user->occupation }}</p>
<p><label><b>How long have you worked for your current Employer? </b></label> : {{ $user->long_worked_employer }}</p>
<p><label><b> supporting statement </b></label> : {{ $user->supporting_statment  }}</p>



                        </div>
                        <div class="tab-pane" id="tab4">
<p><label><b>Do you currently refer prospects to a Solicitors or CMC?</b></label> : {{ $user->refer  }}</p>
<p><label><b>Soicitors / CMC Name</b></label> : <a href="#">{{ $user->cmc_name  }}</a></p>
<p><label><b>Adress 2 </b></label> : {{ $user->adress2_2 }}</p>
<p><label><b>Town </b></label> : {{ $user->town2  }}</p>
<p><label><b>City</b></label> : {{ $user->city2  }}</p>
<p><label><b>Country</b></label> : {{ $user->country2 }}</p>
<p><label><b>Post Code </b></label> : {{ $user->post_code2  }}
<p><label><b>Authorisation Number </b></label> : {{ $user->auth_number  }}
<p><label><b>Are you currently under formal contract?</b></label> : {{ $user->under_formal_contract  }}

                        </div>


                        <div class="tab-pane" id="tab5">
                        <div class="container-fluid">
                            <div class="row">
                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                <p><label><b>CIN</b></label>  </p>
                                       
                                        <a href="/images/{{$user->path_CIN}}"  target="_blank"><img src="/images/{{$user->path_CIN}}" width="100%"></a> 
                            </div>

                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                <p><label><b>PASSEPORT</b></label> </p>
                                        
                                      <a href="/images/{{$user->path_passeport}}" target="_blank"><img src="/images/{{$user->path_passeport}}"  width="100%"></a> 
                            </div>


                            </div>
                        </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

	



@stop