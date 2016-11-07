@extends('back.template')

@section('main')

<h1>All Surveys</h1>

<p>{{ link_to_route('surveys.create', 'Add new survey') }}</p>

@if ($surveys->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>id</th>
        <th>Title survey</th>

            </tr>
        </thead>

        <tbody>
            @foreach ($surveys as $survey)
                <tr>
                    <td>{{ $survey->id }}</td>
          <td>{{ $survey->title_survey }}</td>

                    <td>{{ link_to_route('surveys.edit', 'Edit', array($survey->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
          {{ Form::open(array('method' 
=> 'DELETE', 'route' => array('surveys.destroy', $survey->id))) }}                       
        {!! Form::submit('delete') !!}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no surveys
@endif

@stop