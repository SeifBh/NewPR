@extends('back.template')

@section('main')

<h1>Select Destinataires <a href="/contact/IndexMultipleMessage"  class="pull-right btn btn-danger"> Send Message to all EI</a>
</h1>

<br>
@if ($users->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>email</th>
                <th></th>

            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>

                                <td><a href="/Messages/{{ $user->id }}/create" class="btn btn-primary">Send Message</a></td>
        
                      
                        {{ Form::close() }}
                    
                </tr>
            @endforeach
              
        </tbody>
      
    </table>
@else
    There are no users
@endif

@stop