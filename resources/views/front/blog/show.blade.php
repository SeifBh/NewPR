<title>{{ $post->title }}  </title>              
<style type="text/css">
.customb a:hover, a:focus {
    color: black;
    text-decoration: underline;
}

/***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

.login-box {
  background: #fff;
  padding: 20px;
  max-width: 480px;
  margin: 25vh auto;
  text-align: center;
  letter-spacing: 1px;
  position: relative;
}

.login-box:hover {
  box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.login-box h2 {
  margin: 20px 0 20px;
  padding: 0;
  text-transform: uppercase;
  color: #4688F1;
}

.social-button {
  background-position: 25px 0px;
  box-sizing: border-box;
  color: rgb(255, 255, 255);
  cursor: pointer;
  display: inline-block;
  height: 50px;
  line-height: 50px;
  text-align: left;
  text-decoration: none;
  text-transform: uppercase;
  vertical-align: middle;
  width: 100%;
  border-radius: 3px;
  margin: 10px auto;
  outline: rgb(255, 255, 255) none 0px;
  padding-left: 20%;
  transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#facebook-connect {
  background: rgb(255, 255, 255) url('http://eswarasai.com/projects/social-buttons/img/facebook.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
  border: 1px solid rgb(60, 90, 154);
}

#facebook-connect:hover {
  border-color: rgb(60, 90, 154);
  background: rgb(60, 90, 154) url('http://eswarasai.com/projects/social-buttons/img/facebook-white.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
  -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#facebook-connect span {
		    text-decoration: blink !important;

  box-sizing: border-box;
  color: rgb(60, 90, 154);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(255, 255, 255);
  outline: rgb(255, 255, 255) none 0px;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#facebook-connect:hover span {
  color: #FFF;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#google-connect {
	    text-decoration: blink !important;
  background: rgb(255, 255, 255) url('http://eswarasai.com/projects/social-buttons/img/google-plus.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
  border: 1px solid rgb(220, 74, 61);
}

#google-connect:hover {
  border-color: rgb(220, 74, 61);
  background: rgb(220, 74, 61) url('http://eswarasai.com/projects/social-buttons/img/google-plus-white.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
  -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#google-connect span {
  box-sizing: border-box;
  color: rgb(220, 74, 61);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(220, 74, 61);
  outline: rgb(255, 255, 255) none 0px;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#google-connect:hover span {
  color: #FFF;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#twitter-connect {
		    text-decoration: blink !important;

  background: rgb(255, 255, 255) url('http://eswarasai.com/projects/social-buttons/img/twitter.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
  border: 1px solid rgb(85, 172, 238);
}

#twitter-connect:hover {
  border-color: rgb(85, 172, 238);
  background: rgb(85, 172, 238) url('http://eswarasai.com/projects/social-buttons/img/twitter-white.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
  -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#twitter-connect span {
  box-sizing: border-box;
  color: rgb(85, 172, 238);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(220, 74, 61);
  outline: rgb(255, 255, 255) none 0px;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#twitter-connect:hover span {
  color: #FFF;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#linkedin-connect {
		    text-decoration: blink !important;

  background: rgb(255, 255, 255) url('/images/youtube.svg') no-repeat scroll 13px 0px / 28px 45px padding-box border-box;
  border: 1px solid rgb(195, 60, 45);
}

#linkedin-connect:hover {
  border-color: rgb(195, 60, 45);
  background: rgb(195, 60, 45) url('/images/you.svg') no-repeat scroll 13px 0px / 28px 45px padding-box border-box;
  -webkit-transition: all .8s ease-out;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease-out;
}

#linkedin-connect span {
  box-sizing: border-box;
  color: rgb(195, 60, 45);
  cursor: pointer;
  text-align: center;
  text-transform: uppercase;
  border: 0px none rgb(0, 119, 181);
  outline: rgb(255, 255, 255) none 0px;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}

#linkedin-connect:hover span {
  color: #FFF;
  -webkit-transition: all .3s ease;
  -moz-transition: all .3s ease;
  -ms-transition: all .3s ease;
  -o-transition: all .3s ease;
  transition: all .3s ease;
}
/* Content */
.content {
    padding-top: 30px;
}

/* Testimonials */
blockquote {
    background: #f8f8f8 none repeat scroll 0 0;
    border: medium none;
    color: #666;
    display: block;
    font-size: 14px;
    line-height: 20px;
    padding: 15px;
    position: relative;
}
blockquote::before {
    width: 0; 
    height: 0;
	right: 0;
	bottom: 0;
	content: " "; 
	display: block; 
	position: absolute;
    border-bottom: 20px solid #fff;    
	border-right: 0 solid transparent;
	border-left: 15px solid transparent;
	border-left-style: inset; /*FF fixes*/
	border-bottom-style: inset; /*FF fixes*/
}
blockquote::after {
    width: 0;
    height: 0;
    right: 0;
    bottom: 0;
    content: " ";
    display: block;
    position: absolute;
    border-style: solid;
    border-width: 20px 20px 0 0;
    border-color: #e63f0c transparent transparent transparent;
}
.carousel-info img {
    border: 1px solid #f5f5f5;
    border-radius: 150px !important;
    height: 75px;
    padding: 3px;
    width: 75px;
}
.carousel-info {
    overflow: hidden;
}
.carousel-info img {
    margin-right: 15px;
}
.carousel-info span {
    display: block;
}
span.testimonials-name {
    color: #e6400c;
    font-size: 16px;
    font-weight: 300;
    margin: 23px 0 7px;
}
span.testimonials-post {
    color: #656565;
    font-size: 12px;
}
.customb {
    padding: 5px;
    color: white;
    text-shadow: -1px 0px 1px #11efef;
    font-weight: bolder;
    border: 1px solid #dd4b39;
    box-shadow: 0px 1px 4px gray;
    background-origin: border-box;
    /* background: #e63f0c; */
    background: -moz-linear-gradient(top, #fce89d 0%, #ffd351 51%, #ffb735 52%, #ffa10e 100%);
    /* background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fce89d), color-stop(51%, #ffd351), color-stop(52%, #ffb735), color-stop(100%, #ffa10e)); */
    /* background: -webkit-linear-gradient(top, #e63f0c 0%, #d91a24 51%, #d91a24 52%, #d91a24 100%); */
    background: -o-linear-gradient(top, #fce89d 0%, #ffd351 51%, #ffb735 52%, #ffa10e 100%);
    background: -ms-linear-gradient(top, #fce89d 0%, #ffd351 51%, #ffb735 52%, #ffa10e 100%);
    background: linear-gradient(top, #fce89d 0%, #ffd351 51%, #ffb735 52%, #ffa10e 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fce89d', endColorstr='#ffa10e',GradientType=0 );
    background-color: #e63f0c;
}
.customb:hover{
	color:white !important;
}

.social a {
  display: block;
  background: #ededed;
  width: 325px;
  margin: 10px;
  position: relative;
  text-decoration: none;
  color: #666666;
  font-size: 18px;
  height: 50px;
  border-radius: 25px;
}
.social a .icon {
  position: absolute;
  left: 0;
  top: 0;
  color: #ffffff;
  height: 50px;
  width: 50px;
  padding: 15px 15px 15px 18px;
  border-radius: 25px;
}
.social a:hover {
  color: #ffffff;
}
.social a:hover .icon {
  -webkit-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
  width: 325px;
}
.social a .text {
  position: absolute;
  top: 17px;
  left: 75px;
  text-transform: uppercase;
}
.social a.facebook .icon {
  background: #45619D;
}
.social a.twitter .icon {
  background: #55ACEE;
}
.social a.google .icon {
  background: #DD4B39;
}


.box{
	word-break: break-all;
}
	.box img{
		width: 100% !important;
	}

	h2.text-center.metitle {
    font-size: 70px;
    font-family: monospace;
    font-weight: 100 !important;
}

</style>
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
<div id="subpage-banner" style="    /* background: gold; */
    overflow-x: hidden;
background-image:url('http://cdn.wonderfulengineering.com/wp-content/uploads/2014/09/white-wallpapers-8.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    line-height: 1.7em;

    /* background: rgba(0, 0, 0, 0.4); */
    padding: 40px 0;
    min-height: 140;
    text-align: center;
    text-transform: uppercase;">
    <div class="container">
        <div class="row">
            <div class="">
                    <h1 class="banner-sub-title">
                    	{{ $post->title }}                    </h1>
            </div> 
        </div>    
    </div>    
</div>
        <div id="contentZZ">
            <section class="home" id="home">
                <div class="container-fluid" >
                    <div id="contentZZ" class="col-md-12">

         


<div class="container-fluid" style="">
	<div class="row">
		<div class="box" style="padding-top:10px;">

			<div class=" col-lg-8 ">
				<div class="thumbnail" style="padding:15px;text-align:justify">
					

					@if($post->tags->count())
						<div class="text-center">
							@if($post->tags->count() > 0)
								<small>Tags : </small> 
								@foreach($post->tags as $tag)
								<a href="/blog/tag?tag={{$tag->id}}" class="customb">{{ $tag->tag }}</a>
								@endforeach
							@endif
						</div>
					@endif
<br>

					<!--<small>{{ $post->user->username }} {{ trans('front/blog.on') }} {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>!-->
					<div class="container-fluid row">
					<blockquote>
<i><h4>{!! $post->summary !!}</h4></i></blockquote>
					
					</div>
					<div class="container-fluid">

					{!! $post->content !!}
					</div>
					

					<hr>
					<h3 class="text-center">{{ trans('front/blog.comments') }}</h3>
					<hr>

					@if($comments->count())
						@foreach($comments as $comment)
							<div class="commentitem">
								<h3>
									<small>{{ $comment->user->username . ' ' . trans('front/blog.on') . ' ' . $comment->created_at }}</small>
									@if($user && $user->username == $comment->user->username) 
										<a id="deletecomment{!! $comment->id !!}" href="#" class="deletecomment"><span class="fa fa-fw fa-trash pull-right" data-toggle="tooltip" data-placement="left" title="{{ trans('front/blog.delete') }}"></span></a>
										<a id="comment{!! $comment->id !!}" href="#" class="editcomment"><span class="fa fa-fw fa-pencil pull-right" data-toggle="tooltip" data-placement="left" title="{{ trans('front/blog.edit') }}"></span></a>
									@endif
								</h3>
								<div id="contenu{!! $comment->id !!}" class="container-fluid">{!! $comment->content !!}</div>
								<hr>
							</div>
						@endforeach
					@endif	

					<div class="row" id="formcreate"> 
						@if(session()->has('warning'))
							@include('partials/error', ['type' => 'warning', 'message' => session('warning')])
						@endif	
						@if(session('statut') != 'visitor')
							{!! Form::open(['url' => 'comment']) !!}	
								{!! Form::hidden('post_id', $post->id) !!}
								{!! Form::control('textarea', 12, 'comments', $errors, trans('front/blog.comment')) !!}
								{!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
							{!! Form::close() !!}
						@else
							<div class="text-center"><i class="text-center">
								You must be <a href="/auth/login">loged </a>to add a comment !

							</i></div>
						@endif
					</div>


				</div>
			</div>

			<div class=" col-lg-4 col-sm-12 col-xs-12 col-md-4">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7&appId=336711179813108";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

				<div class="thumbnail">
				<center>
<div class="fb-page" data-href="https://www.facebook.com/TheAccidentGuys/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></center>

				</div>
				<div class="thumbnail">

					<a class="twitter-timeline" href="https://twitter.com/Sickness_Claims" data-widget-id="724969591592640512">Tweets by @Sickness_Claims</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

				</div>

				<div class="thumbnail">
					<div class="">
			<a href="https://www.facebook.com/TheAccidentGuys/" class="social-button" id="facebook-connect"> <span>CONNECT WITH US ON Facebook</span></a>
			<a href="#" class="social-button" id="google-connect"> <span>ADD US ON Google</span></a>
			<a href="https://twitter.com/TheAccidentGuys" class="social-button" id="twitter-connect"> <span>CONNET WITH US ON Twitter</span></a>
			<a href="https://www.youtube.com/c/TheAccidentGuys" class="social-button" id="linkedin-connect"> <span>CONNECT WITH US ON Youtube</span></a>
		</div>				


				</div>

				<div class="thumbnail">
					@foreach($alltags as $alt)
						<a href="/blog/tag?tag={{$alt->id}}" class="customb" style="    margin: 5px;
    margin-bottom: 5px !important;
    line-height: 3em !important;">{{$alt->tag}}</a>
					@endforeach
				</div>


			</div>

		</div>
	</div>


	</div>



	{!! HTML::script('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') !!}

	@if(session('statut') != 'visitor')
		{!! HTML::script('ckeditor/ckeditor.js') !!}
	@endif

	<script>	  

		@if(session('statut') != 'visitor')

			CKEDITOR.replace('comments', {
				language: '{{ config('app.locale') }}',
				height: 200,
				toolbarGroups: [
					{ name: 'basicstyles', groups: [ 'basicstyles'] }, 
					{ name: 'links' },
					{ name: 'insert' }
				],
				removeButtons: 'Table,SpecialChar,HorizontalRule,Anchor'
			});

			function buttons(i) {
				return "<input id='val" + i +"' class='btn btn-default' type='submit' value='{{ trans('front/blog.valid') }}'><input id='btn" + i + "' class='btn btn-default btnannuler' type='button' value='{{ trans('front/blog.undo') }}'></div>";
			}

			$(function() {

				$('a.editcomment span').tooltip();
				$('a.deletecomment span').tooltip();

				// Set comment edition
				$('a.editcomment').click(function(e) {   
					e.preventDefault();
					$(this).hide();
					var i = $(this).attr('id').substring(7);
					var existing = $('#contenu' + i).html();
					var url = $('#formcreate').find('form').attr('action');
					jQuery.data(document.body, 'comment' + i, existing);
					var html = "<div class='row'><form id='form" + i + "' method='POST' action='" + url + '/' + i + "' accept-charset='UTF-8' class='formajax'><input name='_token' type='hidden' value='" + $('input[name="_token"]').val() + "'><div class='form-group col-lg-12 '><label for='comments' class='control-label'>{{ trans('front/blog.change') }}</label><textarea id='cont" + i +"' class='form-control' name='comments" + i + "' cols='50' rows='10' id='comments" + i + "'>" + existing + "</textarea><small class='help-block'></small></div><div class='form-group col-lg-12'>" + buttons(i) + "</div>";
					$('#contenu' + i).html(html);
					CKEDITOR.replace('comments' + i, {
						language: '{{ config('app.locale') }}',
						height: 200,
						toolbarGroups: [
							{ name: 'basicstyles', groups: [ 'basicstyles'] }, 
							{ name: 'links' },
							{ name: 'insert' }
						],
						removeButtons: 'Table,SpecialChar,HorizontalRule,Anchor'
					});
				});

				// Escape edition
				$(document).on('click', '.btnannuler', function() {    
					var i = $(this).attr('id').substring(3);
					$('#comment' + i).show();
					$('#contenu' + i).html(jQuery.data(document.body, 'comment' + i));
				});

				// Validation 
				$(document).on('submit', '.formajax', function(e) {  
					e.preventDefault();
					var i = $(this).attr('id').substring(4);
					$('#val' + i).parent().html('<i class="fa fa-refresh fa-spin fa-2x"></i>').addClass('text-center');
					$.ajax({
						method: 'put',
						url: $(this).attr('action'),
						data: $(this).serialize()
					})
					.done(function(data) {
						$('#comment' + data.id).show();
						$('#contenu' + data.id).html(data.content);	
					})
					.fail(function(data) {
						var errors = data.responseJSON;
						$.each(errors, function(index, value) {
							$('textarea[name="' + index + '"]' + ' ~ small').text(value);
							$('textarea[name="' + index + '"]').parent().addClass('has-error');
							$('.fa-spin').parent().html(buttons(index.slice(-1))).removeClass('text-center');
						});
					});
				});

				// Delete comment
				$('a.deletecomment').click(function(e) {   
					e.preventDefault();		
					if (!confirm('{{ trans('front/blog.confirm') }}')) return;	
					var i = $(this).attr('id').substring(13);
					var token = $('input[name="_token"]').val();
					$(this).replaceWith('<i class="fa fa-refresh fa-spin pull-right"></i>');
					$.ajax({
						method: 'delete',
						url: '{!! url('comment') !!}' + '/' + i,
						data: '_token=' + token
					})
					.done(function(data) {
						$('#comment' + data.id).parents('.commentitem').remove();
					})
					.fail(function() {
						alert('{{ trans('front/blog.fail-delete') }}');
					});					
				});

			});

		@endif

		hljs.initHighlightingOnLoad();

	</script>


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