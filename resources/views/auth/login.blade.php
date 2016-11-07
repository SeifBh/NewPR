<!DOCTYPE html>
<html lang="en">

    <head>

    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
  </head>
  <body>

 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">


$( document ).ready(function() {
    $('.resetPrice').tooltip();
});
</script>

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
        <link rel="shortcut icon" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png">
        <link  sizes="144x144" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png">
        <link  sizes="114x114" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png">
        <link  sizes="72x72" href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png">
        <link  href="http://theaccidentguys.co.uk/wp-content/uploads/2016/04/10411771_889294141081958_8499827248571476909_n.png">
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

    <body>

@if(Session::has('flash_message3'))

Hello 3333333333

@endif

@if(Session::has('flash_message4'))

Hello 4444444444

@endif

<div class="container">
  <div class="span4 pull-right">
    <div class="alert alert-danger fade">
      <button type="button" class="close" data-dismiss="alert">×</button>
@if(Session::has('flash_message3'))
    <script type="text/javascript">


        function generate(type, text) {

            var n = noty({
                text        : text,
                type        : type,
                dismissQueue: true,
                layout      : 'topLeft',
                closeWith   : ['click'],
                theme       : 'relax',
                maxVisible  : 10,
                animation   : {
                    open  : 'animated bounceInLeft',
                    close : 'animated bounceOutLeft',
                    easing: 'swing',
                    speed : 500
                }
            });
            console.log('html: ' + n.options.id);
        }

        function generateAll() {

            //Mail resend
            generate('success', notification_html[1]);
            
            //generate('warning', notification_html[3]);
           // generate('error', notification_html[1]);
           // generate('information', notification_html[2]);
//            generate('notification');
//            generate('success');
        }

        $(document).ready(function () {

            setTimeout(function() {
                generateAll();
            }, 500);

        });

    </script>
    

@endif
    </div>
  </div>
</div>

        <!-- Top content -->
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
                       <a href="http://theaccidentguys.co.uk/" style="color:black !important;"> www.theaccidentguys.co.uk</a>
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
                                    {!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}   

                    <div class=" body row" style="background:#f2f2f4;padding:5px;">
                        <div class="col-sm-7 left-side">
                            
                           <label id="tt99">Exempt Introducer Profile & Training</label>
                           <hr>
                              @if(session()->has('error'))
                    @include('partials/error', ['type' => 'danger', 'message' => session('error')])
                      @endif
                          <!-- <div class="row"  id="rowme">
                            <div class="col-md-4"><label class="pull-right">Login Type</label></div>
                                <div class="col-md-8">
                                <select class="form-control">
                                    <option>Exepmt Introducer</option>
                                    <option>Solicitor</option>
                                </select>
                            </div>
                           </div>!-->
                            

                           <div class="row" id="rowme">
                            <div class="col-md-4"><label class="pull-right">Username / Email</label></div>
                            <div class="col-md-8">
                                {!! Form::control('text', 12, 'log', $errors) !!}
                            </div>
                           </div>


                           <div class="row" id="rowme">
                            <div class="col-md-4"><label class="pull-right">Password</label></div>
                            <div class="col-md-8">{!! Form::control('password', 12, 'password', $errors) !!}</div>
                           </div>
                           <div class="row">
                          <center> <div class="pull-right">
                                                       <div class="g-recaptcha resetPrice" data-sitekey="6LdePSITAAAAAA4DarWhmCwHMr_00_sFs49jZCvy" data-placement="left" data-toggle="tooltip" href="#" data-original-title="I am not a robot"></div>

                                                <?php
                                                $attributes = [
                                'data-theme' => 'dark',
                                'data-type' =>  'audio',
                            ];
                                                ?>    
                            {!! Form::captcha($attributes) !!}
                                                            @if ($errors->has('g-recaptcha-response'))
                                                                <span class="help-block">
                                                                    <code>{{ $errors->first('g-recaptcha-response') }}</code>
                                                                </span>
                                                            @endif
                                </div></center>
                            </div>
                           <!--<div class="row"  id="rowme">
                            <div class="col-md-4"><label class="pull-right">ID Authentification</label></div>
                            <div class="col-md-8">{!! Form::control('text', 12, 'auth_ID', $errors) !!}</div>
                           </div>!-->

                           <p class="pull-right"><a href="/password/email">Unable to login? click here for help</a></p>
                           <br>
                                 <p>   <div class="pull-right clearfix">
                                        <button type="submit" class="btn btn-lg pull-right" id="seifp">Login</button>
                                    </div>  
                                </p>



                                                {!! Form::close() !!}




                        </div>
                        

                            
                        <div class="col-sm-5 right-side">
                            <div class="container-fluid">
                                <div class="row">   

                                    <span class="pull-left cmp">Login Notices and Information</span>
                                    <span class="pull-right">
                                        <img class="resetPrice" src="/img/iconinfo.png" width="50px" height="50px;" data-placement="top" data-toggle="tooltip" href="#" data-original-title="CMP Notice information">

                                    </span>

                                </div>
                                <hr>

                                <div class="row">
                                    <label>24.07.2016</label>
                                    <p>Welcome and thanks for visiting.<br>

                                    All systems are working as normal.</p>

                                    <p class="pull-right">TAG Admin</p>
                                </div>
                            </div>                             

                        </div>

                    </div>

                   

                    
                    
                </div>
            </div>
            
        </div>
<br>
        <!-- Footer -->
        <footer style="text-align:center">
        <div class="container">
        <p>
The Accident Guys are trading styles of Claims Legal Ltd, UK Company 07377456

Oak Hill Court 171 Bury New Road Prestwich Manchester M25 9ND - Telephone 0800-8- 654321

The Accident Guys are regulated by the Claims Management Regulator in respect of regulated claims management activities.

            
        </div>

        </footer>

        <!-- Javascript -->
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="/assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>