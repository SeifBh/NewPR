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

html,
body {
    margin:0;
    padding:0;
    height:100%;
}
#wrapper {
    min-height:100%;
    position:relative;
}
#header {
    background:#ededed;
}
#contentZZ {
    padding-bottom:50px; /* Height of the footer element */
}
#footer {
    width:100%;
    height:100px;
    position:absolute;
    bottom:0;
    left:0;
}

</style>
<?php 
$user = Auth::User();

?>
        <?php $slugme =  $user->username  ?>

    @include('includes.head')
        <div id="header">
            @include('includes.nav')
        </div>

            <div id="wrapper" id="contentme">

        <div id="contentZZ">
            <section class="home" id="home">
                <div class="container-fluid" >
                    <div id="contentZZ" class="col-md-12">
            <?php  $slugname = $user->username ?>

    <div class="container-fluid" id="hellome">
                          <?php $slugme =  $user->username  ?>


        <div class="row" style="margin-top:10px;">
        @include('front.questionnaire.left_sidebar')
<body>
                    <div id="bodySD" class=" col-xs-12 col-md-9 col-lg-9 col-sm-12" style="">

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