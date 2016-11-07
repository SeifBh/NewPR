
<head>
    
    <head>
<script src='https://www.google.com/recaptcha/api.js'></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>workwithTAG - Connexion</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/form-elements.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
<style type="text/css">

#seifp{
    font-size: 20px!important;
    background: #e41b24 !important;
    background: -moz-linear-gradient(top, #e41b24 0%, #810712 100%)!important;
    background: -webkit-linear-gradient(top, #e41b24 0%,#810712 100%)!important;
    background: linear-gradient(to bottom, #e41b24 0%,#810712 100%)!important;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e41b24', endColorstr='#810712',GradientType=0 )!important;
    color: white !important;
}
#rowme{
    padding: 10px;
}
span.pull-left.cmp {
    font-size: 20px;

    padding: 10px;
}

.body{
        display: table;
    background-color: green;
    width: 100%;
}
.left-side {
    float: none;
    display: table-cell;
}

.right-side {
    background-color: #fbfcfe;
    float: none;
    display: table-cell;
    border: 1px solid;
}


</style>
</head>

        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
 

                <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <a href="http://theaccidentguys.co.uk/">
                    <img src="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/TAG-Logo-Large.png" height="200px;">
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12" >
                <span class="pull-right" style="color:black;">


                    <label style="display:block !important">
                        <img src="/img/hi.png" width="30px;">
                       <a href="http://theaccidentguys.co.uk/"> www.theaccidentguys.co.uk</a>
                    </label> 


                    <label style="display:block !important">
                        <img src="/img/ei.png" width="30px;">
                        info@theaccidentguys.co.uk
                    </label> 



                    <label style="display:block !important">
                        <img src="/img/li.png" width="30px;">
                        Free from Landlines and Mobiles 0800-8-654321
                    </label> 


                </span>
 
                </div>
                </div>

                    <div class=" body row" style="background:#f2f2f4;padding:5px;">
                        <div class="col-sm-7 left-side">
                                                    
                           <label id="tt99">Reset Password </label>
                           <hr>
	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				@if(session()->has('error'))
					@include('partials/error', ['type' => 'danger', 'message' => session('error')])
				@endif	

				<p>{{ trans('front/password.reset-info') }}</p>		

				{!! Form::open(['url' => 'password/reset', 'method' => 'post', 'role' => 'form']) !!}	

					<div class="row">

						{!! Form::hidden('token', $token) !!}
						{!! Form::control('email', 12, 'email', $errors, trans('front/password.email')) !!}
						{!! Form::control('password', 6, 'password', $errors, trans('front/password.password'), null, [trans('front/password.warning'), trans('front/password.warning-password')]) !!}
						{!! Form::control('password', 6, 'password_confirmation', $errors, trans('front/password.confirm-password')) !!}
						<center>
<div class="form-group col-lg-12">
                <input class="btn btn-default" type="submit" value="Send" style="    border: 0;
    border-radius: 0px !important;
    color: #fff;
    background-color: #449d44;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid black;">
            </div> </center>

					</div>

				{!! Form::close() !!}

			</div>
		</div>
	</div>

                        <a href="/" class=" pull-right btn btn-primary" style="border:0;border-radius:0px !important;"> Back to home </a>
                           <!--<div class="row"  id="rowme">
                            <div class="col-md-4"><label class="pull-right">ID Authentification</label></div>
                            <div class="col-md-8">{!! Form::control('text', 12, 'auth_ID', $errors) !!}</div>
                           </div>!-->




                                               



                        </div>
                        

                            
                        <div class="col-sm-5 right-side">
                            <div class="container-fluid">
                                <div class="row">   

                                    <span class="pull-left cmp">CMP Notice information</span>
                                    <span class="pull-right">
                                        <img src="/img/iconinfo.png" width="50px" height="50px;">

                                    </span>

                                </div>
                                <hr>

                                <div class="row">
                                    <label>22.06.2016</label>
                                    <p>CMP Portal update will be implemented at 23:00 Hours, during this time the portal will be down for maintenance</p>

                                    <p class="pull-right">TAG Admin</p>
                                </div>
                            </div>                             

                        </div>

                    </div>

                   

                    
                    
                </div>
            </div>
            
        </div>