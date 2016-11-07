    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

@extends('back.template')

@section('main')

<h1>New Message</h1>

                                {!! Form::open(['action' => 'ContactController@store_message', 'method' => 'post', 'role' => 'form']) !!}  





<ul>
    <li>
         To :   <input type="text" name="nameme" value="{{$username}}"  class="form-control" readonly>
    </li>
    <li>
            <label>Subject</label>

            <input type="text" name='subject'  placeholder='subject' class="form-control"/>
            <input type="hidden" name='user_id'  value='{{ $user_id }}'   />


    </li>
    <li>
                  <label>Content</label>
                  <textarea class="form-control"  placeholder="content" style="width:100% !important;" name="content"></textarea>

    </li>
</ul>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<div class="">
    <div class="row clearfix">
        <div class="col-md-12 column">



        </div>
    </div>
</div>


</div>


<br>
<center>
    <ul>

        <li>
        {!! Form::submit(trans('front/form.send')) !!}
        </li>
    </ul>
</center>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

    <script>
    var config = {
        codeSnippet_theme: 'Monokai',
        language: '{{ config('app.locale') }}',
                filebrowserBrowseUrl: '{!! url($url) !!}',

        height: 100,

        toolbarGroups: [
            { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
            { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
            { name: 'links' },
            { name: 'insert' },
            { name: 'forms' },
            { name: 'tools' },
            { name: 'document',    groups: [ 'mode', 'document', 'doctools' ] },
            { name: 'others' },
            //'/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'styles' },
            { name: 'colors' }
        ]
    };


    config['height'] = 230;     

    CKEDITOR.replace( 'content', config);

    $("#title").keyup(function(){
            var str = sansAccent($(this).val());
            str = str.replace(/[^a-zA-Z0-9\s]/g,"");
            str = str.toLowerCase();
            str = str.replace(/\s/g,'-');
            $("#permalien").val(str);        
        });

  </script>

@stop