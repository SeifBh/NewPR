
@extends('back.template')

@section('main')

<h1>Create question</h1>

{{ Form::open(array('route' => 'questions.store')) }}
    <ul>


        <li>
            {{ Form::label('content', 'content:') }}
            {{ Form::text('content') }}
        </li>
        <li>
            {{ Form::label('Answer1', 'Answer1:') }}
            {{ Form::text('a1') }}
        </li>

        <li>
            {{ Form::label('Answer2', 'Answer2:') }}
            {{ Form::text('a2') }}
        </li>

        <li>
            {{ Form::label('Answer3', 'Answer3:') }}
            {{ Form::text('a3') }}
        </li>

        <li>
            {{ Form::label('Answer4', 'Answer4:') }}
            {{ Form::text('a4') }}
        </li>

        <li>
            {{ Form::label('Answer5', 'Answer5:') }}
            {{ Form::text('a5') }}
        </li>
 


        <li>
        {!! Form::submit(trans('front/form.send')) !!}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop