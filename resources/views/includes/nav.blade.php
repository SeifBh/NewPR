<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">

<style type="text/css">
  .navbar {
height: 60px !important;
}

  .fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    font-size: 20px !important;
    padding-right: 5px !important;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.glyphicon {
    position: relative;
    top: 1px;
    font-size: 18px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    padding-right: 10px;
}

.navbar-nav > li > a {
    padding-top: 10px;
    text-align: center;
    padding-bottom: 10px;
    line-height: 20px;
border: 0px !important;
min-height: 60px;
}
#brand {
    font-weight: 700;
    /* font-family: monospace; */
    line-height: 30px;
    min-height: 60px !important;
    /* background: red; */
}


li#brand2 {
    padding-top: 7px;
    /* padding-bottom: 10px; */
    line-height: 10px;
}

#glblock{
  display: block;
  text-align: center;
}
#lg{
  text-align: center;
  color: #d91a24;
}

.nav > li > a:hover, .nav > li > a:focus {
    text-decoration: none;
    color: white !important;
    background-color: #d91a24 !important;
  -o-transition:.2s;
  -ms-transition:.2s;
  -moz-transition:.2s;
  -webkit-transition:.2s;
  /* ...and now for the proper property */
  transition:.2s;

}

.nav > li > a:hover, .nav > li > span:focus {
    color: white !important;
}
.nav > li > a:hover, .nav > li > i:focus {
    color: white !important;
}



.dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.8;
    color: #333;
    white-space: nowrap;
}
.navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    min-width: 170px !important;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
    background-color: #eee;
    border-color: #337ab7;
    color: white !important;
}


#brand:hover #lg {
  color: white;
}


#brand:hover #glblock {
  color: white;
}

    .dropdown-menu{
          min-width: 165px !important;

    }


.Menuactive{
   background-color: #d91a24 !important;
   color: white !important;

}


.Menuactive a {
   color: white !important;
   
}


.Menuactive i {
   color: white !important;
   
}


.Menuactive span {
   color: white !important;
   
}
</style>


<script type="text/javascript">
  $(document).ready ( function () {




});

</script>
<nav class="navbar navbar-static" style="border-radius:0px !important;margin-bottom:0 !important;    border-bottom: 2px solid red !important;    border-top: 0px solid gold !important;    font-size: 13;">
   <div class="container-fluid">
    <!--<div class="navbar-header">
      <a class="navbar-brand" href="/" target="ext" style="color:white !important;
      text-transform: uppercase;
    font-weight: normal;
    text-shadow: 1px 2px 1px rgba(0,0,0,0.45);
    ">workwith<b id="tagb" style="color:red">TAG</b></a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
      </a>
    </div>!-->
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" > 
            <li  id="brand" {{{ (Request::is('/') ? 'class=Menuactive' : '') }}}>
              <a href="/">
                <span class="glyphicon glyphicon-home" id="lg" ></span>
                <span class="glyphicon-class" id="glblock">Welcome</span>
              </a>
            </li>

            <li  id="brand"  {{{ (Request::is('workwithTAG') ? 'class=Menuactive' : '') }}}>
              <a href="/workwithTAG">
                <span class="fa fa-users"  id="lg" ></span>
                <span class="glyphicon-class" id="glblock">Working with TAG</span>
              </a>
            </li>

            <li  id="brand"  {{{ (Request::is('TheRules') ? 'class=Menuactive' : '') }}}>
              <a href="/TheRules">
                <span class="glyphicon glyphicon-phone"  id="lg" ></span>
                <span class="glyphicon-class" id="glblock">Rules & Regulations</span>
              </a>
            </li>


            <li  id="brand"  {{{ (Request::is('News') ? 'class=Menuactive' : '') }}}>
              <a href="/News">
                <i class="fa fa-newspaper-o" aria-hidden="true" id="lg"></i>
                <span class="glyphicon-class" id="glblock"> News </span>
              </a>
            </li>



            <li  id="brand"  {{{ (Request::is('FAQ') ? 'class=Menuactive' : '') }}}>
              <a href="/FAQ">
                <span class="glyphicon glyphicon-list" id="lg" ></span>
                <span class="glyphicon-class" id="glblock">TAG FAQ's</span>
              </a>
            </li>

            <li id="brand" {{{ (Request::is('Contact_us') ? 'class=Menuactive' : '') }}}>
              <a href="/Contact_us" class="">
                   <span class="fa fa-at"  id="lg" ></span>
                   <span class="glyphicon-class" id="glblock">Contacts us</span>

              </a>

            </li>


        </ul>
        <ul class="nav navbar-right navbar-nav">

          @if (Auth::guest())
            <li  id="brand" {{{ (Request::is('/auth/login') ? 'class=Menuactive' : '') }}}>
              <a href="/auth/login" class="">
                   <span class="fa fa-user"  id="lg" ></span>
                   <span class="glyphicon-class" id="glblock">EI Portal Login</span>

              </a>

            </li>
          @endif


        @if(Auth::check())


            <li class="brand" id="brand">
              <a href="/auth/login" class="">
                   <span class="fa fa-clock-o"  id="lg" ></span>
                   <span class="glyphicon-class" id="glblock">

                <?php

$date = new DateTime('now', new DateTimeZone('Europe/London'));


 echo $date->format('g:i a');
                ?>

              |
                <?php
 echo $date->format('d-m-Y');

                  
                ?>



                   </span>

              </a>

            </li>


           @endif
        @if(Auth::check())


  
          <li class="brand dropdown"  id="brand">
            <a href="#" class=" opdown-toggle" data-toggle="dropdown">
              @if(Auth::user()->path_picture  =='')
              <img src="http://www.freelanceme.net/Images/default%20profile%20picture.png"  width="40" height="40" style="vertical-align:top !important;">
              @else
              <img src="/images/{{Auth::user()->path_picture }}" style="vertical-align:top !important;" width="40" height="40">
              @endif              
                <?php $slugme = Auth::user()->username; echo '@' . $slugme ; ?>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/@<? echo $slugme; ?>/dashboard "><i class="fa fa-tachometer" aria-hidden="true"></i>
 Dashboard</a></li>

               <li><a href="/News"><i class="fa fa-tachometer" aria-hidden="true"></i>
 News  & Updates</a></li>


              <li><a href="/@<? echo $slugme; ?>/questionnaires"><i class="fa fa-question-circle" id="facus"></i>Questionnaires</a></li>
                                @if(session('statut') == 'admin')
                                    <li>
                                       <a href="http://workwithtag.theaccidentguys.co.uk/admin"><i class="fa fa-black-tie" aria-hidden="true"></i>
Administration</a>
                                       
                                    </li>
                                @elseif(session('statut') == 'redac')
                                    <li>
                                      <a href="http://workwithtag.theaccidentguys.co.uk/blog">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
Redaction</a>
                                        
                                    </li>
                                @endif
              <li class="divider"></li>
              <li><a href="/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
             </ul>
          </li>  
       
          @endif

     <!--   <li>
            {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'navbar-form']) !!}  
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}

                          

            {!! Form::close() !!}

          </li>!-->
       @if (Auth::guest())



      <!--  <li>
            {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'navbar-form']) !!}  
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}

                          

            {!! Form::close() !!}
          </li>!-->

        <li>
                                @if(session('statut') == 'admin')
                                    <li>
                                        {!! link_to_route('admin', 'Administration') !!}
                                    </li>
                                @elseif(session('statut') == 'redac')
                                    <li>
                                        {!! link_to('blog', trans('front/site.redaction')) !!}
                                    </li>
                                @endif
        </li>
@if(Auth::check())
        <li>
              <?php
              $date->setTimezone(new DateTimeZone('Pacific/Chatham'));

                 print date("g.i a", time());
              ?>
            </a>
            <a href="#">

        </li>
@endif
       
          @endif

        </ul>
      </div>
    </div>
</nav><!-- /.navbar -->
