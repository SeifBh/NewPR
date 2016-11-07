
<head>



    <!-- HD Theme
    <link rel="stylesheet" href="http://itsolutionstuff.com/frontTheme/css/social.css">

    <script src="http://itsolutionstuff.com/frontTheme/hd/hdtheme.js"></script>

    <script src="http://itsolutionstuff.com/frontTheme/js/social.js"></script>
-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" href="http://itsolutionstuff.com/frontTheme/css/social.css">





<script type="text/javascript">
    
        jQuery(document).ready(function () {
            
          /*  setTimeout(function () {
                $("#socialfb").addClass('show');
            }, 13000);*/
            $("#socialfb").click(function () {
                if ($("#socialfb").hasClass('show') == true) {
                    $("#socialfb").removeClass('hide');
                    $("#socialfb").removeClass('show');
                }
                else {
                    $("#socialfb").addClass('show');
                    $("#socialfb").removeClass('hide');
                }
            });

        });
    

</script>
<style type="text/css">
    /**
 * CSSReset.com - How To Keep Footer At Bottom of Page with CSS
 * 
 * Original Tutorial: http://www.cssreset.com/2010/css-tutorials/how-to-keep-footer-at-bottom-of-page-with-css/
 * License: Free - do whatever you like with it! Credit and linkbacks much appreciated.
 *
 * NB: Make sure the value for 'padding-bottom' on #content is equal to or greater than the height of #footer.
 */
::selection { color: white}
::selection { background: red; }

a{
    text-decoration: blink !important;
}
html,
body {
    margin:0;
    padding:0;
    height:100%;
}
.sprite-sharebar-like,
.sprite-sharebar-plusone {
    display: block;
    background: url(http://itsolutionstuff.com/frontTheme/images/btnlike.png) no-repeat
}
.sprite-sharebar-like {
    background-position: -20px -70px;
    width: 50px;
    height: 50px
}
.sprite-sharebar-plusone {
    background-position: -90px -70px;
    width: 50px;
    height: 50px
}
.big_social {
    position: fixed;
    z-index: 9998;
    font-family: 'Segoe UI', Arial
}
.big_social.fb {
    bottom: 300px
}
.big_social.gp {
    bottom: 300px
}
.big_social.feed {
    bottom: 350px
}
.big_social.show {
    animation: .5s ease big_in 0s forwards;
    -webkit-animation: .5s ease big_in 0s forwards;
    z-index: 9999
}
.big_social.hide {
    
    animation: .5s ease big_out 0s!important;
    -webkit-animation: .5s ease big_out 0s!important;
    z-index: 9998
}
.big_social .big_icon {
    height: 200px;
    position: absolute;
    left: 200px;
    cursor: pointer
}
.big_social .long_hand {
    color: #fff;
    text-align: right;
    line-height: normal;
    padding-top: 17px;
    font-size: 20px;
    height: 110px;
    width: 200px;
    position: absolute;
    -moz-box-shadow: inset 120px 0 80px -60px rgba(0, 0, 0, .75);
    -webkit-box-shadow: inset 120px 0 80px -60px rgba(0, 0, 0, .75);
    box-shadow: inset 120px 0 80px -60px rgba(0, 0, 0, .75)
}
.big_social .long_hand.fb {
    top: 90px;
    background: #455c91
}
.big_social .long_hand.gp {
    top: 45px;
    background: #d34231;
    padding-right: 20px
}
.big_social .long_hand.feed {
    top: -25px;
    width: 540px;
    background: #2c3e50;
    padding: 20px 20px 20px 100px;
    height: 250px;
    text-align: left
}
.big_social .long_hand p {
    font-weight: 400;
    line-height: 20px
}
.big_social .long_hand a {
    color: #FF9;
    font-weight: 700;
    margin-left: 60px
}
.big_social .long_hand a:hover {
    border-bottom: 1px solid #fff
}
.big_social .visible_button {
    position: absolute;
    left: 420px;
    top: 75px;
    cursor: pointer;
    opacity: .5;
    transition: all .3s ease 0s
}
.big_social .visible_button.active,
.big_social .visible_button:hover {
    opacity: 1
}
.big_social .like_button {
    position: absolute;
    top: 90px;
    left: 305px
}
.big_social .like_button span {
    vertical-align: top!important
}
.big_social #___follow_0 {
    position: absolute;
    left: 135px;
    top: 40px
}
@keyframes big_in {
    0% {
        left: -540px
    }
    40% {
        left: 0
    }
    100% {
        left: -60px
    }
}
@keyframes big_out {
    0% {
        left: -60px
    }
    70% {
        left: 0
    }
    100% {
        left: -540px
    }
}
@-webkit-keyframes big_in {
    0% {
        left: -540px
    }
    40% {
        left: 0
    }
    100% {
        left: -60px
    }
}
@-webkit-keyframes big_out {
    0% {
        left: -60px
    }
    70% {
        left: 0
    }
    100% {
        left: -540px
    }
}
.long_hand .textbox {
    color: #fff;
    padding-bottom: 10px;
    background: 0 0;
    border: none;
    border-bottom: 1px solid #dadada;
    width: 190px;
    float: left;
    margin-right: 10px
}
.long_hand .comments {
    color: #fff;
    border: none;
    border-bottom: 1px solid #dadada;
    float: left;
    background: rgba(255, 255, 255, .1);
    margin-top: 15px;
    width: 390px;
    height: 120px;
    padding: 10px;
    font-family: 'Segoe UI'
}
.long_hand .rating {
    float: left;
    height: 40px;
    margin-top: 10px;
    font-size: 32px;
    line-height: 33px;
    font-weight: 400
}
.long_hand .rating span {
    float: left;
    cursor: pointer
}
.long_hand .rating span.active {
    color: #f1c40f
}
.long_hand .rating_circle {
    background: #f1c40f;
    width: 30px;
    display: inline-block;
    height: 30px;
    line-height: 25px;
    text-align: center;
    border-radius: 50%;
    margin-left: 10px;
    color: #000;
    transform: rotate(90deg);
    -webkit-transform: rotate(90deg);
    font-weight: 400;
    -moz-box-shadow: inset 0 0 10px 0 #d35400;
    -webkit-box-shadow: inset 0 0 10px 0 #d35400;
    box-shadow: inset 0 0 10px 0 #d35400
}
.long_hand .rating_circle.red {
    background: red!important
}
.long_hand .rating_value {
    height: 40px;
    float: left;
    margin-top: 10px;
    margin-left: 10px;
    font-size: 16px;
    line-height: 40px
}
.long_hand .button {
    margin: 15px 30px 0 10px;
    font-weight: 400;
    border: none!important;
    float: right;
    height: 30px;
    line-height: 30px
}
.long_hand .you_are_awesome {
    overflow: hidden;
    background: #121212;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: left;
    border: 5px solid #2c3e50;
    display: none
}
.long_hand .you_are_awesome .text {
    position: absolute;
    left: 70px;
    top: 40px;
    font-weight: 300;
    font-size: 48px;
    line-height: 48px;
    background: -webkit-linear-gradient(-45deg, #ff3236 0, #ff30f1 17%, #3728ff 33%, #28f4ff 49%, #28ff28 67%, #ffe500 84%, #ff3f00 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent
}

#wrapper {
    position:relative;
}
#header {
    background:#ededed;
}
#contentZZ {
    padding-bottom:20px; /* Height of the footer element */
}
#footer {
    width:100%;
    height:100px;
    position:absolute;
    bottom:0;
    left:0;
}

</style>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7&appId=336711179813108";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div id="socialfb" class="big_social fb">
        <div class="visible_button show_big_social sprite-sharebar-like">
        </div>
        <img class="big_icon" src="http://itsolutionstuff.com/frontTheme/images/big_like.png" alt="Big Like" height="200" width="220">
        <div class="long_hand fb">
             Join With US
            <p style="color:White;margin-top:5px">

                <br>

            </p>
        </div>
        <div class="fb-like like_button">

            <span style="vertical-align: bottom; width: 49px; height: 61px;">
<div class="fb-like" data-href="https://www.facebook.com/TheAccidentGuys/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>            </span>
        </div>
    </div>
<?php 

$user = Auth::User();

?>
@if (Auth::check())
        <?php $slugme =  $user->username  ?>
@endif
    @include('includes.head')
        <div id="header">
            @include('includes.nav')
        </div>

            <div id="wrapper" id="contentme">

        <div id="contentZZ">
            <section class="home" id="home">
                <div class="container-fluid" >
                    <div id="contentZZ" class="col-md-12">

                        @yield('content')
                        </div>
                    </div>
                    <div  class="">
                        
                    </div>
                </div>   
            </section>
        </div>
        <div id="footer" style=" background: #f9fafa; background: -moz-linear-gradient(-45deg, #f9fafa 0%, #dcddde 100%); background: -webkit-linear-gradient(-45deg, #f9fafa 0%,#dcddde 100%); background: linear-gradient(135deg, #f9fafa 0%,#dcddde 100%); color: black; min-height: 90px; position: relative;">
             @include('includes.footer')
        </div>
    </div>

    
</body>