@extends('layouts.app')

@section('content')

{!! Form::open(array('action' => 'UploadController@process', 'files' => true)) !!}

  <div class="form-group">
      {{ Form::label('import-file', 'Pleae Select a File') }}
      {{ Form::file('import-file') }} 
  </div>
  {{ Form::submit('Submit', array('class' => 'btn btn-primary'))}}

  {!! Form::close() !!}

@endsection
