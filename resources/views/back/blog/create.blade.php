@extends('back.blog.template')

@section('form')
	{!! Form::open(['url' => 'blog','files' => true, 'method' => 'post', 'class' => 'form-horizontal panel']) !!}	
@stop
