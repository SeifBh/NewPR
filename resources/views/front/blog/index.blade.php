@extends('layouts.def2')

@section('content')
<title>News | TAG</title>
<script type="text/javascript">
    $(document).ready(function() {
    if (window.matchMedia('(max-width: 767px)').matches) {
        alert('768');
        //...
 $('#products .item').addClass('list-group-item');
     } 
     

    $('#list').click(function(event){event.preventDefault();
        $('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');});
});




</script>
<style type="text/css">

.blog-wrapper {
  padding: 15px;
  display: flex;
  flex-direction: row;
  justify-content: center;
  flex-wrap: wrap;
}
.blog-wrapper .blog-card {
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  transition: 0.3s;
  max-width: 300px;
  margin: 15px;
  background: #fff;
  border: 1px solid #b91f23;
  text-align: center;
  cursor: pointer;
}
.blog-wrapper .blog-card:hover {
  box-shadow: 0 3px 10px 0 rgb(0, 0, 0)
}
.blog-wrapper .blog-card:hover .card-img img {
  opacity: 0.8;
}
.blog-wrapper .blog-card .card-img {
  position: relative;
  text-align: center;
  height: 203px;
  background: #b91f23;
}
.blog-wrapper .blog-card .card-img img {
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  transition: 0.3s;
  min-height: 200px;
  max-width: 100%;
  height: auto;
  border-bottom: 4px solid #b91f23;
}
.blog-wrapper .blog-card .card-img:before {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 50%;
  margin-left: -10px;
  width: 0;
  height: 0;
  border-top: solid 10px #b91f23;
  border-left: solid 10px transparent;
  border-right: solid 10px transparent;
}
.blog-wrapper .blog-card .card-img h1 {
  position: absolute;
  margin: 0;
  font-size: 42px;
  bottom: 15px;
  width: 100%;
  color: #fff;
  font-family: 'Slabo 27px', serif;
}
.blog-wrapper .blog-card .card-details {
  margin-top: 30px;
  font-family: 'Roboto', sans-serif;
  color: #3C3C3C;
}
.blog-wrapper .blog-card .card-details span {
  padding: 0 30px;
}
.blog-wrapper .blog-card .card-details span i {
  margin-right: 5px;
}
.blog-wrapper .blog-card .card-text {
  padding: 30px 15px;
  font-family: 'Roboto', sans-serif;
      min-height: 150px;
  line-height: 22px;
}
.blog-wrapper .blog-card .read-more {
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  transition: 0.3s;
  display: inline-block;
  width: 100%;
  text-align: center;
  text-transform: uppercase;
  background: #b91f23;
  color: #fff;
  padding: 15px;
  font-family: 'Oswald', sans-serif;
}
.blog-wrapper .blog-card .read-more:hover {
  background: #943143;
}


	.btn-success{
		color: #fff;
				margin-top:5px; 

    background-color: #449d44;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid black;
	}

	.btn-success:hover{
		color:#449d44;
		font-weight: 700;
    background-color: white;
    border-color: #398439;
    min-width: 120px;
    border-radius: 0px;
    border: 1px solid #449d44;
	}

	.v02{
		border: 0px;
		border-radius: 0px;
	}

		.v02:hover{


    border: 1px solid black;
    background: whitesmoke;
    box-shadow: #8a8a8a 5px 10px 10px 0px;

	}
	#products b{
    word-wrap: break-word;
    	}
</style>

<div class="container-fluid">
    <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span>Grid</a>
        </div>
                    {!! Form::open(['url' => 'blog/search', 'method' => 'get', 'role' => 'form', 'class' => 'pull-right']) !!}  
                {!! Form::control('text', 12, 'search', $errors, null, null, null, trans('front/blog.search')) !!}
            {!! Form::close() !!}
    </div>


<div class="blog-wrapper">
        @foreach($posts as $post)

    <div class="blog-card">
        <div class="card-img"><img src="/images/{{ $post->path_file }}" height="100%">
            <h1> {!! $post->title !!}</h1>
        </div>
        <div class="card-details"><span><i class="fa fa-calendar"></i>{!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</span><!--<span><i class="fa fa-heart"></i>102</span>!--></div>
                            <?php
                        $newvarX = substr($post->summary , 0 , 70);
                    ?>
        <div class="card-text"><p><?php echo $newvarX; ?> [...]</p></div>
        <a href="/blog/{{ $post->slug }}" ><div class="read-more">Read More</div></a>
    </div>
              @endforeach

</div>

        <div class="col-lg-12 text-center">
            {!! $links !!}
        </div>
</div>





@stop

