@extends('back.template')

@section('main')

<h1>All questions</h1>

<p>{{ link_to_route('questions.create', 'Add new question') }}</p>

@if ($questions->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
        <th>content</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
          <td>{{ $question->content }}</td>

                    <td>{{ link_to_route('questions.edit', 'Edit', array($question->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('questions.destroy', $question->id))) }}                       
        {!! Form::submit('delete') !!}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no questions
@endif

@stop